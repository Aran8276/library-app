<?php

namespace App\Livewire;

use Livewire\Component;

class SearchForm extends Component
{
    public $searchquery;

    public function render()
    {
        return view('livewire.search-form');
    }
}
