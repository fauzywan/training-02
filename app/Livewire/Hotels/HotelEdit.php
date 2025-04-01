<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelEdit extends Component
{
    #[Title('Hotel Edit')]
    public $hotel;

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

    public function mount($id)
    {
        $this->hotel=Hotel::find($id);
        $this->name=$this->hotel->name;
        $this->phone=$this->hotel->phone;
        $this->email=$this->hotel->email;
        $this->address=$this->hotel->address;
        $this->stars=$this->hotel->stars;
        $this->check_in_time=$this->hotel->check_in_time;
        $this->check_out_time=$this->hotel->check_out_time;

    }
    public function update()
    {
        $this->validate();
        $this->hotel->update($this->all());
        return $this->redirect('/hotels',navigate:true);
    }
    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }
}
