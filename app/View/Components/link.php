<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class link extends Component
{
    public $href;
    public $color;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($href = '#',$color,$class = '')
    {
        $this->href = $href;
        $this->color = $color;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link');
    }

    public function buttonClasses()
    {
        if ($this->color === 'blue') {
            return 'text-white bg-klinikBlue hover:bg-hovBlue';
        } elseif ($this->color === 'white') {
            return 'text-klinikBlue bg-white border-2 border-klinikBlue hover:bg-hovWhite';
        } elseif ($this->color === 'red') {
            return 'text-white bg-alert hover:bg-bgAlert';
        }
        return ''; // Default case
    }
}
