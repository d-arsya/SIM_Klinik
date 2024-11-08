<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopUp extends Component
{
    public $id;
    public $header;
    public $width;
    /**
     * Create a new component instance.
     */
    public function __construct($id = '',$header = '', $width = '')
    {
        $this->id = $id;
        $this->header = $header;
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pop-up');
    }
}
