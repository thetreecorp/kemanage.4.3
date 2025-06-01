<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Throwable;

class Topbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $languages;
    public $countriesTop;
    public $currencies;
    public $bft_AB;
    public $top_menu;
    public $other_menu;

    public function __construct($lang = 'en')
    {
        //

        $this->languages = $this->languages();
        $this->countriesTop = $this->countries();
        $this->currencies = $this->currency($lang);
        $this->bft_AB = $this->bftab($lang);

        $this->top_menu = $this->systemsMenu($lang);
        $this->other_menu = $this->otherSystemMenu($lang);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.fixTopBar');
    }

    public function systemsMenu($lang){
        $systemMenu = Cache::rememberForever('topMenu'.$lang,function() use ($lang){
            $url = config('app.api')."/api/get-menus?name=systems_button_desktop_nonlogin-login&lang=".$lang;
            try{
                return Http::accept('application/json')->get($url)['result']['data'];
            }catch (Throwable $e) {
                echo $e;
            }

        });
        return $systemMenu;
    }

    public function otherSystemMenu($lang){
        $otherSystemMenu = Cache::rememberForever('otherSystemMenu'.$lang,function() use ($lang) {
            $url = config('app.api')."/api/get-menus?name=other_systems_nonlogin_Login_desktop&lang=".$lang;
            return Http::accept('application/json')->get($url)['result']['data'];
        });
        return $otherSystemMenu;
    }

    public function countries()
    {
        // Cache::put('countries', $response_countries);
        $response_cache_countries = Cache::rememberForever('countriesTop', function () {
            $url = config('app.api')."/api/countries-in-continent";
            return  Http::accept('application/json')->get($url)['result'];
        });
        return $response_cache_countries;
    }

    public function languages()
    {

        // Cache::put('languages', $response_language);
        $response_cache_languages = Cache::rememberForever('languages', function () {
            $url2 = config('app.api')."/api/languages";
            return Http::accept('application/json')->get($url2)['result']['data'];
        });;
        return $response_cache_languages;
    }

    public function currency($lang)
    {
        // Cache::put('currencies', $response_currency);
        $response_cache_currencies = Cache::rememberForever('currency'.$lang, function () use ($lang) {
            $url3 = config('app.api')."/api/currencies?lang=".$lang;
            return Http::accept('application/json')->get($url3)['result']['data'];
        });
        return $response_cache_currencies;
    }

    public function bftab($lang)
    {
        $response_cache_users = Cache::rememberForever('bft_AB'.$lang, function () use ($lang) {
            $url4 = config('app.api')."/api/get-menus?name=top_header_desktop&lang=".$lang;
            return Http::accept('application/json')->get($url4)['result']['data'];
        });
        return $response_cache_users;
    }
}
