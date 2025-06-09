<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input type
     */
    public string $type;

    /**
     * The input placeholder
     */
    public ?string $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'text', ?string $placeholder = null)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.atoms.input');
    }
} 