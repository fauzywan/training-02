<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;
    #[Title('Hotel List')]
    public $keyword;
    public function delete($id)
    {
        $hotel=Hotel::find($id);
        $hotel->delete();
        return $this->redirect('/hotels',navigate:true);

    }
    public function updatingKeyword(){
        $this->gotoPage(1);
    }

    public function render()
    {
        return view('livewire.hotels.hotel-list',['hotels'=>Hotel::where('name','LIKE','%'.$this->keyword.'%')->paginate(5)]);
    }
}
