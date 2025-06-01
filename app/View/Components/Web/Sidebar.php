<?php

namespace App\View\Components\Web;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $sidebars;
    public $othersidebar;
    public function __construct($lang='en')
    {
        //
        $this->sidebars = $this->barMenu($lang);
        $this->othersidebar = $this->joinbarMenu($lang);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.sidebar');
    }

    public function barMenu($lang)
    {

        $sidebar = Cache::rememberForever('menuBar'.$lang, function () use ($lang){
            $url = config('app.api')."/api/get-menus?name=common_user_cpanel_desktop&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $sidebar;
    }
    public function joinbarMenu($lang)
    {
        $othersidebar = Cache::rememberForever('menuBarOtherPro'.$lang, function () use ($lang) {
            $url = config('app.api')."/api/get-menus?name=com_pro_user_cpanel_new_systems&lang=".$lang;
            return  Http::accept('application/json')->get($url)['result']['data'];
        });
        return $othersidebar;
    }
}
