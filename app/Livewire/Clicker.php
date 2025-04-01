<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $username="testname";
    public function click()
    {
        dump("Aduh Gantengnya");
    }
    public function createNewUser(){
        $count=User::count();
        User::create([
            'name'=>'test user',
            'email'=>'test'.$count.'@gmail.com',
            'password'=>'123',
        ]);
    }
    public function render()
    {
        $title="Test";
        $users=User::all();
        return view('livewire.clicker',['title'=>$title,'users'=>$users]);
    }

}
