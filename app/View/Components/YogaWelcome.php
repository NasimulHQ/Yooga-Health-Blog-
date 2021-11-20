<?php

namespace App\View\Components;

use App\Models\Welcome;
use Illuminate\View\Component;

class YogaWelcome extends Component
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
        $welcome = Welcome::select('wl_title', 'wl_detais', 'wl_image')
            ->orderBy('id', 'asc')
            ->get();
        return view('components.yoga-welcome', compact('welcome'));
    }
}
