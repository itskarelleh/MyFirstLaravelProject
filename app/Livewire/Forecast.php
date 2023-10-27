<?php

namespace App\Livewire;

use Livewire\Component;

class Forecast extends Component
{

    public $days = [
        ['day'=>'Mo','temp'=>'31', 'icon'=>'cloudy-icon.png'],
        ['day'=>'Tu', 'temp'=>'29', 'icon'=>'hail.png'],
        ['day'=>'We', 'temp'=>'33', 'icon'=>'sunny.png'],
        ['day'=>'Th', 'temp'=>'28', 'icon'=>'stormy.png'],
        ['day'=>'Fr', 'temp'=>'32', 'icon'=>'sunny.png'],
    ];
    public function render()
    {
        return view('livewire.forecast');
    }
}
