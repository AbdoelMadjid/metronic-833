<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;

class SyncAntigravityExtensions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'antigravity:extensions 
                            {action=sync : Opsi tindakan: export, list, install, atau sync} 
                            {--clean : Hapus seluruh ekstensi lama di laptop sebelum instalasi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kelola, ekspor, bersihkan, dan sinkronkan ekstensi Antigravity IDE';

    /**
     * Default list extensions backup (40 ekstensi dasar dari PC).
     */
    protected array $defaultExtensions = [
        "amiralizadeh9480.laravel-extra-intellisense",
        "bmewburn.vscode-intelephense-client",
        "bradlc.vscode-tailwindcss",
        "codingyu.laravel-goto-view",
        "devsense.composer-php-vscode",
        "devsense.intelli-php-vscode",
        "devsense.phptools-vscode",
        "devsense.profiler-php-vscode",
        "editorconfig.editorconfig",
        "felixfbecker.php-debug",
        "golang.go",
        "jdinhlife.gruvbox",
        "llvm-vs-code-extensions.vscode-clangd",
        "mehedidracula.php-namespace-resolver",
        "meta.pyrefly",
        "mikestead.dotenv",
        "mohamedbenhida.laravel-intellisense",
        "monokai.theme-monokai-pro-vscode",
        "mrchetan.goto-laravel-components",
        "mrchetan.laravel",
        "mrchetan.laravel-goto-config",
        "mrchetan.phpstorm-parameter-hints-in-vscode",
        "ms-python.debugpy",
        "ms-python.python",
        "ms-python.vscode-python-envs",
        "onecentlin.laravel-blade",
        "onecentlin.laravel5-snippets",
        "openai.chatgpt",
        "pkief.material-icon-theme",
        "redhat.java",
        "shopify.ruby-lsp",
        "shufo.vscode-blade-formatter",
        "stef-k.laravel-goto-controller",
        "vscjava.vscode-gradle",
        "vscjava.vscode-java-debug",
        "vscjava.vscode-java-dependency",
        "vscjava.vscode-java-pack",
        "vscjava.vscode-java-test",
        "vscjava.vscode-maven",
        "xabikos.javascriptsnippets"
    ];

    public function handle(): int
    {
        $action = strtolower($this->argument('action'));

        return match ($action) {
            'export' => $this->exportExtensions(),
            'list'   => $this->listExtensions(),
            'install'=> $this->installExtensions(),
            'sync'   => $this->syncExtensions(),
            default  => $this->invalidAction($action),
        };
    }

    private function getJsonPath(): string
    {
        return base_path('antigravity-extensions.json');
    }

    private function getCliPath(): string
    {
        $localAppData = $_SERVER['LOCALAPPDATA'] ?? getenv('LOCALAPPDATA') ?? 'C:\\Users\\' . getenv('USERNAME') . '\\AppData\\Local';
        $cliPath = $localAppData . '\\Programs\\Antigravity IDE\\bin\\antigravity-ide.cmd';

        if (File::exists($cliPath)) {
            return $cliPath;
        }

        return 'antigravity-ide.cmd';
    }

    private function getExtensionsList(): array
    {
        $jsonPath = $this->getJsonPath();
        if (File::exists($jsonPath)) {
            $content = File::get($jsonPath);
            $decoded = json_decode($content, true);
            if (is_array($decoded) && !empty($decoded)) {
                return array_values(array_unique($decoded));
            }
        }

        return $this->defaultExtensions;
    }

    private function exportExtensions(): int
    {
        $this->info('🔍 Mendeteksi ekstensi terpasang dari Antigravity IDE...');

        $cliPath = $this->getCliPath();
        $process = Process::fromShellCommandline('"' . $cliPath . '" --list-extensions');
        $process->run();

        if (!$process->isSuccessful()) {
            $this->warn('⚠️ Gagal mendeteksi via CLI. Menggunakan ekstensi bawaan / folder lokasi.');
            $extensions = $this->defaultExtensions;
        } else {
            $output = $process->getOutput();
            $lines = array_filter(array_map('trim', explode("\n", $output)));
            $extensions = [];
            foreach ($lines as $line) {
                if ($line === '' || str_contains($line, '[createInstance]') || str_contains($line, 'depends on')) {
                    continue;
                }
                $extensions[] = $line;
            }
            if (empty($extensions)) {
                $extensions = $this->defaultExtensions;
            }
        }

        sort($extensions);
        $extensions = array_values(array_unique($extensions));

        File::put($this->getJsonPath(), json_encode($extensions, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        $this->info('✅ Ekstensi berhasil diekspor (' . count($extensions) . ' ekstensi)!');
        $this->line('📄 File diselamatkan ke: ' . $this->getJsonPath());

        return Command::SUCCESS;
    }

    private function listExtensions(): int
    {
        $extensions = $this->getExtensionsList();
        $this->info('📋 Daftar Ekstensi Antigravity IDE (' . count($extensions) . ' total):');
        $this->newLine();

        foreach ($extensions as $index => $ext) {
            $num = str_pad((string)($index + 1), 2, ' ', STR_PAD_LEFT);
            $this->line(" {$num}. <fg=cyan>{$ext}</>");
        }

        return Command::SUCCESS;
    }

    private function installExtensions(): int
    {
        if ($this->option('clean')) {
            $this->cleanOldExtensions();
        }

        $extensions = $this->getExtensionsList();
        $cliPath = $this->getCliPath();

        $this->info('🚀 Memulai instalasi ' . count($extensions) . ' ekstensi ke Antigravity IDE...');
        $this->newLine();

        $bar = $this->output->createProgressBar(count($extensions));
        $bar->start();

        foreach ($extensions as $ext) {
            $process = Process::fromShellCommandline('"' . $cliPath . '" --install-extension ' . escapeshellarg($ext));
            $process->run();
            $bar->advance();
        }

        $bar->finish();
        $this->newLine(2);
        $this->info('✅ Seluruh ekstensi berhasil diinstal!');

        return Command::SUCCESS;
    }

    private function cleanOldExtensions(): void
    {
        $userProfile = $_SERVER['USERPROFILE'] ?? getenv('USERPROFILE') ?? 'C:\\Users\\' . getenv('USERNAME');
        $extFolder = $userProfile . '\\.antigravity\\extensions';

        $this->warn('🧹 Membersihkan seluruh ekstensi lama di: ' . $extFolder);

        if (File::exists($extFolder)) {
            $files = File::allFiles($extFolder);
            $directories = File::directories($extFolder);

            foreach ($files as $file) {
                @unlink($file->getPathname());
            }
            foreach ($directories as $dir) {
                @File::deleteDirectory($dir);
            }
            $this->info('✨ Ekstensi lama berhasil dibersihkan.');
        } else {
            $this->line('Folder ekstensi belum ada, melanjutkan...');
        }
    }

    private function syncExtensions(): int
    {
        if (!File::exists($this->getJsonPath())) {
            $this->info('File json belum ada. Menjalankan export terlebih dahulu...');
            $this->exportExtensions();
        } else {
            $this->info('File json ditemukan. Menjalankan install...');
            $this->installExtensions();
        }

        return Command::SUCCESS;
    }

    private function invalidAction(string $action): int
    {
        $this->error("❌ Action '{$action}' tidak dikenal. Pilih dari: export, list, install, sync.");
        return Command::FAILURE;
    }
}
