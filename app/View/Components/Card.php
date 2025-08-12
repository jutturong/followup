<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $content;

    public function __construct($title, $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
    /**
     * Get the view / contents that represent the component.
     */

}