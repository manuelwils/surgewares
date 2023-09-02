<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Products extends Component
{

    public $title;

    public function mount() : void
    {
        $this->title = 'Products | Surgewares';
    }

    public function render()
    {
        return view('livewire.pages.products');
    }
}
