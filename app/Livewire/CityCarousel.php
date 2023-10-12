<?php

namespace App\Livewire;

use Livewire\Component;

class CityCarousel extends Component
{
    public $cities = [
        ['city' => 'Rome', 'image' => 'rome.png'],
        ['city' => 'Santorini', 'image' => 'santorini.png'],
    ];

    public $currentIndex = 0;

    public function render()
    {
        return view('livewire.city-carousel');
    }

    public function next()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->cities);
    }

    public function previous()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->cities)) % count($this->cities);
    }
}
