<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $title;

    public function mount()
    {
        $this->title = "Surgewares | Making the world a better place";
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
