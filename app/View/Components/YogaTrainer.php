<?php

namespace App\View\Components;

use App\Models\Trainer;
use Illuminate\View\Component;

class YogaTrainer extends Component
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
        $trainer = Trainer::select('tr_name', 'tr_title', 'tr_image')
        ->orderBy('id', 'asc')
        ->get();
        return view('components.yoga-trainer', compact('trainer'));
    }
}
