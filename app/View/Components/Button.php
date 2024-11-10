<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $color;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'button',$color='',$class = '')
    {
        $this->type = $type;
        $this->color = $color;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.button', [
            'buttonClasses' => $this->buttonClasses()
        ]);
    }

    public function buttonClasses()
    {
        if ($this->color === 'blue') {
            return 'text-white bg-klinikBlue hover:bg-hovBlue';
        } elseif ($this->color === 'white') {
            return 'text-klinikBlue bg-white border-2 border-klinikBlue hover:bg-hovWhite';
        } elseif ($this->color === 'red') {
            return 'text-white bg-alert hover:bg-hovAlert';
        }
        return ''; // Default case
    }
}
