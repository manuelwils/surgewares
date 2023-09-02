<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{

    public $title;

    public function mount() : void
    {
        $this->title = 'Home | Surgewares';
    }

    public function render()
    {
        return view('livewire.pages.home');
    }
}
