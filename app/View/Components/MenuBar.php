<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

use function Laravel\Prompts\text;

class MenuBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $text,
        public array $menuItems = []
    )
    {
        //
        $this->text = $text;
        $this->menuItems = $menuItems;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-bar');
    }
}
