<?php

namespace App\View\Components;

use App\Models\Setting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OffCanvas extends Component
{
    public $menus;
    public $subMenus;
    public $socials;
    public $menuBackground;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = [
            ['label' => 'S-Stream', 'routeName' => 'stream'],
            ['label' => 'Music', 'routeName' => 'music'],
            ['label' => 'About us', 'routeName' => 'aboutUs'],
            ['label' => 'Let\'s talk', 'routeName' => 'letsTalk'],
            ['label' => 'Careers', 'routeName' => 'career'],
            ['label' => 'Blogs', 'routeName' => 'blog'],
            ['label' => 'Media Kit', 'routeName' => 'index'],
        ];
        $this->subMenus = [
            ['label' => 'One page', 'link' => route('index')],
            ['label' => 'Whitepaper', 'link' => route('index')],
            ['label' => 'Pitch desk', 'link' => route('index')],
        ];

        $this->socials = [
            ['label' => 'Facebook', 'icon' => asset('assets/icons/facebook.svg'), 'link' => '#'],
            ['label' => 'Instagram', 'icon' => asset('assets/icons/instagram.svg'), 'link' => '#'],
            ['label' => 'LinkedIn', 'icon' => asset('assets/icons/linkedin.svg'), 'link' => '#'],
            ['label' => 'Twitter', 'icon' => asset('assets/icons/twitter.svg'), 'link' => '#'],
        ];

        $settings = Setting::allInArrayFormat();
        $this->menuBackground = $settings['menu_background'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.off-canvas');
    }
}
