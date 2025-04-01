<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Validate('required',message:'Field nama Harus diisi')]
    public $name;
    #[Validate('required')]
    public $phone;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $address;
    #[Validate('required')]
    public $stars;
    #[Validate('required')]
    public $check_in_time;
    #[Validate('required')]
    public $check_out_time;
    public function create()
    {
        $this->validate();
        Hotel::create($this->all());
        return $this->redirect('/hotels',navigate:true);
    }
    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }
}
