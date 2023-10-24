<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $isOpen = false;

    public function render()
    {
        return view('livewire.navigation');
    }

    public function toggleMenu() {
        $this->isOpen = !$this->isOpen;
    }
}
