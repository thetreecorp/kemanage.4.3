<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $other_menu;
    public $system_menu;
    public function __construct($lang='en')
    {
        $this->other_menu = $this->otherSystemMenu($lang);
        $this->system_menu = $this->thisSystemMenu($lang);
    }

    public function thisSystemMenu($lang)
    {
        $otherSystemMenu = Cache::rememberForever('thisSysMenu'.$lang, function () use($lang){
            $url = config('app.api')."/api/get-menus?name=main_menu_header_NL-Kemanage_desktop_mobile&lang=".$lang;
            return Http::accept('application/json')->get($url)['result']['data'];
        });
        return $otherSystemMenu;
    }

    public function otherSystemMenu($lang)
    {
        $otherSystemMenu = Cache::rememberForever('otherSysMenu'.$lang, function () use ($lang) {
            $url = config('app.api')."/api/get-menus?name=All_systems_login_nonlogin_mobile&lang=".$lang;
            return Http::accept('application/json')->get($url)['result']['data'];
        });
        return $otherSystemMenu;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.nav-bar');
    }
}
