<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Fixedside extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $sidenav;
//    public $allsystems;
    public function __construct($lang = 'en')
    {
        //
        $this->sidenav = $this->sideMenu($lang);
       // $this->allsystems = $this->barMenu($lang);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.fixed-side');
    }

   /* public function barMenu($lang)
    {
        $dropdownsidebar = Cache::rememberForever('barMenu_mobile'.$lang, function () use ($lang) {
            $url = config('app.api')."/api/get-menus?name=All_systems_nonlogin_mobile&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $dropdownsidebar;
    }*/

    public function sideMenu($lang)
    {
        $sideMenu1 = Cache::rememberForever('sideMenu'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=side_menu_non_login_desktop&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sideMenu1;
    }
}
