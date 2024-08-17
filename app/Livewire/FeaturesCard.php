<?php

namespace App\Livewire;

use Livewire\Component;

class FeaturesCard extends Component
{
    public $title;
    public $subtitle;
    public $src;

    public function render()
    {
        return view('livewire.features-card');
    }
}
