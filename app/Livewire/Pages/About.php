<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{

    public $title;

    public function mount() : void
    {
        $this->title = 'About | Surgewares';
    }

    
    public function render()
    {
        return view('livewire.pages.about');
    }
}
