<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Terms extends Component
{

    public $title;

    public function mount() : void
    {
        $this->title = 'Terms | Surgewares';
    }
    
    public function render()
    {
        return view('livewire.pages.terms');
    }
}
