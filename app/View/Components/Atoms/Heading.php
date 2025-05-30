<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Heading extends Component
{
    /**
     * The heading level (1-6)
     */
    public int $level;

    /**
     * Create a new component instance.
     */
    public function __construct(int $level = 1)
    {
        $this->level = $level;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.atoms.heading');
    }
} 