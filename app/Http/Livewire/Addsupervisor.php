<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supervisors;
use illuminate\support\carbon;
use App\Models\Section;

class Addsupervisor extends Component
{
    protected $listeners =['delete'];
    public $name;
    public $address;
    public $phone;
    public $section_id;
    public $up_name;
    public $up_address;
    public $up_phone;
    public $up_section_id;
    public $cid;

     public function showToastr($message,$type){
        return $this->dispatchBrowserEvent(
            'showToastr',[
                'message'=> $message,
                'type'=>   $type,
            ]);
    }

    public function render()
    {
        return view('livewire.addsupervisor' , [
            'section' => Section::orderBy('section_name' , 'asc')->get(),
            'super' => Supervisors::orderBy('name' , 'asc')->get(),
        ]);
    }

    public function openAddsuperModel(){
        $this->name = '';
        $this->address = '';
        $this->phone = '';
        $this->section_id = '';
        $this->dispatchBrowserEvent('openAddsuperModel');
    }

    public function saveSuper(){
        $this->validate([
            'name'=>'required|string',
            'address'=>'required',
            'phone'=>'required',
            'section_id'=>'required',
        ]);

        $save = Supervisors::insert([
            'name' => $this->name,
            'address' => $this->address,
            'phone' =>$this->phone,
            'section_id' =>$this->section_id,
            'created_at'=>Carbon::now(),
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeAddSuper');
        }

        $this->showToastr('data have been saved successfuly' , 'info');
    }

    //delete supervisor
    public function deleteConfirm($id){
       $info = Supervisors::find($id);
       $this->dispatchBrowserEvent('swalConfirm' ,[
        'title'=>'are you suer ?',
        'html'=>'you want to delete<strong>'.' '.$info->name.'</strong>',
        'id'=>$id,
       ]);
    }
    public function delete($id){
      Supervisors::find($id)->delete();
      $this->showToastr('Supervisors have been deleted successfuly' , 'success');
    }

    //edit supervisor info
    public function editInfo($id){
        $info = Supervisors::find($id);
        $this->up_name = $info->name;
        $this->up_address = $info->address;
        $this->up_phone = $info->phone;
        $this->up_section_id = $info->section_id;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('opentEditSuper',[
            'id'=>$id,
        ]);
    }

    public function updateSuper(){
        $cid = $this->cid;
        $this->validate([
            'up_name'=>'required|string',
            'up_address'=>'required',
            'up_phone'=>'required',
            'up_section_id'=>'required', 
        ]);

        $save = Supervisors::find($cid)->update([
            'name'=> $this->up_name,
            'address'=>$this->up_address,
            'phone'=>$this->up_phone,
            'section_id'=>$this->up_section_id,  
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeEditsuperModel');
        }
        $this->showToastr('Supervisors info has been updated successfuly' , 'success');
    }
}
