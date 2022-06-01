<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LivewirePageComponent extends Component
{

    public $title,$lwcomponent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$lwcomponent)
    {
        $this->title = $title;
        $this->lwcomponent = $lwcomponent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.livewire-page-component');
    }
}
