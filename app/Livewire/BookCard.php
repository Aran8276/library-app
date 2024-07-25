<?php

namespace App\Livewire;

use Livewire\Component;

class BookCard extends Component
{
    public $title;
    public $src;
    public $desc;
    public $author;
    public $href;

    public function render()
    {
        return view('livewire.book-card');
    }
}
