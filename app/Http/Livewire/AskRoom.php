<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class AskRoom extends Component
{

    public $room_no;
    public function render()
    {
        return view('livewire.ask-room');
    }

    public function save(){
        $this->validate([
            'room_no'=>'required'
        ]);

        $count = Student::where('room_no' ,'=', $this->room_no )->count();
        $this->dispatchBrowserEvent('askRoom' ,[
            'type'=>'success',
            'title'=>'<strong>الغرفة رقم </strong>'.$this->room_no,
            'text'=>' هذه الغرفة سجل فيها' .' '.$count.' '.'طالب حتي الان ',
          ]);
            
    }
}
