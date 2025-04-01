<?php

namespace App\Livewire;

use Livewire\Component;

class Clicker extends Component
{
    public function click()
    {
        dump("Aduh Gantengnya");
    }
    public function render()
    {
        return view('livewire.clicker');
    }
}
