<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * The button variant (primary, secondary, ghost)
     */
    public string $variant;

    /**
     * The button type (button, submit)
     */
    public string $type;

    /**
     * Create a new component instance.
     */
    public function __construct(string $variant = 'primary', string $type = 'button')
    {
        $this->variant = $variant;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.atoms.button');
    }
} 