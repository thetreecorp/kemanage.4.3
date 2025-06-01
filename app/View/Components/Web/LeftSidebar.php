<?php

namespace App\View\Components\Web;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class LeftSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dropdownsidebar;

    public $sidebar;
    public $sidebarPart2;

    public $othersidebar;

    //public $side;
    public $site;
    public function __construct($lang='en')
    {
       // $this->side = env("MOBILE_VIEW_LEFT_SIDE_BAR");
        //$this->site = env("MOBILE_VIEW_LEFT_SIDE_BAR_SITE");

        $this->dropdownsidebar = $this->barMenu($lang);

        if(! \Request::route()->getName() == 'sidebar.page'){
            $this->sidebar = $this->sideBarGet($lang);
            $this->sidebarPart2 = $this->sideBarGetPart2($lang);
        }
        else{
            $this->sidebar = $this->sideBarGetLogin($lang);
            $this->sidebarPart2 = $this->sideBarGetPart2Login($lang);
        }


        $this->othersidebar = $this->joinbarMenu($lang);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this->sidebarKemedar);
        return view('components.web.left-sidebar');
    }

    public function barMenu($lang)
    {
        $dropdownsidebar = Cache::rememberForever('barMenuMobile'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=All_systems_nonlogin_mobile&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $dropdownsidebar;
    }

    public function sideBarGet($lang)
    {
        $sidebar = Cache::rememberForever('kemanageSidebar'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=common_user_cpanel_desktop&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sidebar;
    }

    public function sideBarGetLogin($lang)
    {
        //$this->side = env("CPANEL_USER_LEFT_SIDE_BAR", "common_user_cpanel_desktop&lang=en");
        $sidebar = Cache::rememberForever('kemanageSidebarLogin'.$lang, function () use ($lang) {
            $url = config('app.api')."/api/get-menus?name=common_user_cpanel_desktop&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sidebar;
    }

    public function sideBarGetPart2($lang)
    {
        $sidebarPart2 = Cache::rememberForever('sidebarPart2'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=non_Login_mobile_side_menu_basic&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sidebarPart2;
    }

    public function sideBarGetPart2Login($lang)
    {
        $sidebarPart2 = Cache::rememberForever('sidebarPart2Login'.$lang, function () use($lang) {
            $url = config('app.api')."/api/get-menus?name=com_pro_user_cpanel_new_systems&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sidebarPart2;
    }



    public function joinbarMenu($lang)
    {
        $othersidebar = Cache::rememberForever('menuBarOther'.$lang, function () use($lang){
            $url = config('app.api')."/api/get-menus?name=non_Login_mobile_side_menu_kemedar&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $othersidebar;
    }
}
