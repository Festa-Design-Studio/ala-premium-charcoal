<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * The link href
     */
    public string $href;

    /**
     * Create a new component instance.
     */
    public function __construct(string $href = '#')
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.atoms.link');
    }
} 