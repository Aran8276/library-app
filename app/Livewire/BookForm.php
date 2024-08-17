<?php

namespace App\Livewire;

use Livewire\Component;

class BookForm extends Component
{
    public $data = null;
    public $bookContent1 = '';
    public $bookContent2 = '';
    public $bookName = '';
    public $bookDescription = '';
    public $bookId = null;
    public $isCreate;

    public function mount($data = null)
    {
        if ($data) {
            $this->bookContent1 = $data->book_content_1;
            $this->bookContent2 = $data->book_content_2;
            $this->bookName = $data->book_name;
            $this->bookDescription = $data->book_description;
            $this->bookId = $data->book_id;
        }
    }

    public function render()
    {
        return view('livewire.book-form');
    }
}
