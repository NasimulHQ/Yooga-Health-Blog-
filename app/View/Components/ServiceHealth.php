<?php

namespace App\View\Components;

use App\Models\YogaHealth;
use Illuminate\View\Component;

class ServiceHealth extends Component
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
        $yogahealth = YogaHealth::select('y_name', 'y_details', 'icon')
            ->orderBy('id', 'asc')
            ->get();
        return view('components.service-health', compact('yogahealth'));
    }
}
