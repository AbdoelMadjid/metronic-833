<?php

namespace App\Http\Controllers;

use App\Support\MenuTranslationCatalog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LanguageController extends Controller
{
    public function update(Request $request, MenuTranslationCatalog $translations): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'locale' => ['required', Rule::in(array_keys(config('locales', [])))],
        ]);

        $request->session()->put('locale', $validated['locale']);

        if ($request->expectsJson()) {
            return response()->json([
                'locale' => $validated['locale'],
                'translations' => $translations->forLocale($validated['locale']),
            ]);
        }

        return redirect()->back();
    }
}
