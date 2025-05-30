<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * The text size (base, sm)
     */
    public string $size;

    /**
     * Create a new component instance.
     */
    public function __construct(string $size = 'base')
    {
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.atoms.text');
    }
} 