<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Header extends Component
{
    public $menus;
    public $isHide;
    /**
     * Create a new component instance.
     */
    public function __construct($isHide)
    {
        $this->isHide = $isHide;
        $this->menus = [
            ['label' => 'S-Stream', 'routeName' => 'stream'],
            ['label' => 'Music', 'routeName' => 'music'],
            ['label' => 'About us', 'routeName' => 'aboutUs'],
            ['label' => 'Let\'s talk', 'routeName' => 'letsTalk'],
            ['label' => 'Careers', 'routeName' => 'career'],
            ['label' => 'Blogs', 'routeName' => 'blog']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
