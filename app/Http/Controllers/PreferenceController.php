<?php

namespace App\Http\Controllers;

use App\Http\Requests\Preference\{
    GetLocale,
    SetLocale
};
use App\Http\Resources\DefaultResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class PreferenceController extends Controller
{
    /**
     * Obtém o idioma do sistema
     * 
     * @return void
     */
    public function getLocale(GetLocale $request)
    {
        $locale = App::getLocale();

        return new DefaultResource([$locale]);
    }

    /**
     * Define o idioma do sistema
     * 
     * @return void
     */
    public function setLocale(SetLocale $request)
    {
        $cookie = Cookie::get('locale');

        App::setLocale($request->locale);

        $locale = App::getLocale();

        return response()->json([
            'data' => $locale
        ])->cookie('locale', $request->locale, 10);
    }
}
