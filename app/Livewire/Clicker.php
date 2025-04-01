<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;
    public function click()
    {
        dump("Aduh Gantengnya");
    }
    public function createNewUser(){
        $count=User::count();
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
        ]);
        $this->name="";
        $this->password="";
    }
    public function render()
    {
        $title="Test";
        $users = User::orderBy('created_at', 'desc')->get();
        $this->email='test'.$users->count().'@gmail.com';
        return view('livewire.clicker',['title'=>$title,'users'=>$users]);
    }

}
