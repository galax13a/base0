<?php

namespace App\View\Components\app\base;

use Illuminate\View\Component;
use \App\Models\NavegatorMo;

class navegator extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $menus_navs = NavegatorMo::where('enabled',true)->orderBy('order','desc')->get();
        return view('components..app.base.navegator')->with('menu_navs',$menus_navs);
    }
}
