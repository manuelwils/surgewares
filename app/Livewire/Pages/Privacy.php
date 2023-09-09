<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Privacy extends Component
{

    public $title;

    public function mount() : void
    {
        $this->title = 'Privacy | Surgewares';
    }

    public function render()
    {
        return view('livewire.pages.privacy');
    }
}
