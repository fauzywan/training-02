<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $user;
    public function mouth(){
        // $this->user
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
