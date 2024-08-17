<?php

namespace App\Livewire;

use Livewire\Component;

class Pagination extends Component
{
    public $pages;
    public $results;
    public $currentpage;
    public $from;
    public $to;
    public $of;

    public function render()
    {
        return view('livewire.pagination');
    }
}
