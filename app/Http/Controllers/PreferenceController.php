<?php

namespace App\Http\Controllers;

use App\Http\Requests\Preference\{
    GetLocale,
    SetLocale
};
use App\Http\Resources\DefaultResource;
use Illuminate\Support\Facades\App;

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
        $locale = App::setLocale($request->locale);

        return new DefaultResource([$locale]);
    }
}
