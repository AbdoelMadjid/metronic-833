<?php

namespace App\Support;

use Illuminate\Support\Facades\File;

class MenuTranslationCatalog
{
    /**
     * @return array<string, string>
     */
    public function forLocale(string $locale): array
    {
        $path = lang_path($locale.'.json');

        if (! File::exists($path)) {
            return [];
        }

        $translations = File::json($path);

        return is_array($translations) ? $translations : [];
    }
}
