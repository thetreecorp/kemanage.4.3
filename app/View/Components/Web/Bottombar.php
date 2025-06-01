<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;


class Bottombar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menuBottom;
    public $menuBottomMobile;
    public function __construct($lang = 'en')
    {
        //
        $this->menuBottom = $this->bottomMenu($lang);
        $this->menuBottomMobile = $this->bottomMenuMobile($lang);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.bottom-bar');
    }
    public function bottomMenu($lang)
    {
        $bottom_menu = Cache::rememberForever('bottomMenuDeskTop'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=bottom_footer_desktop&lang=".$lang;

            return Http::accept('application/json')->get($url)['result']['data'];
        });

        return $bottom_menu;
    }
    public function bottomMenuMobile($lang)
    {
        $bottom_menu = Cache::rememberForever('bottomMenuMobile'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=bottom_footer_mobile&lang=".$lang;
            return Http::accept('application/json')->get($url)['result']['data'];
        });

        return $bottom_menu;


    }
}
