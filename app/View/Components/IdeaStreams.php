<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IdeaStreams extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $ideaStreams = [
            [
                'title' => 'Breakfast ideas and whatever',
            ],
            [
                'title' => 'Quick book to read',
            ],
            [
                'title' => 'Inspiration for Art',
            ],
        ];

        return view('components.idea-streams', compact('ideaStreams'));
    }
}
