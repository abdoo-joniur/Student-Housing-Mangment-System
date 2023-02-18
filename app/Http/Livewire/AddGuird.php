<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guard;
use illuminate\support\carbon;

class AddGuird extends Component
{

    protected $listeners =['delete'];
    public $name;
    public $address;
    public $phone;
    public $up_name;
    public $up_address;
    public $up_phone;
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
        return view('livewire.add-guird' , [
            'guard' => Guard::orderBy('name' , 'asc')->get()
        ]);
    }

    public function openAddGuirdModel(){
        $this->name='';
        $this->address='';
        $this->phone='';
        $this->dispatchBrowserEvent('openAddGuirdModel');
    }

    public function saveGuird(){
        $this->validate([
            'name'=>'required|string|min:3|max:25|unique:guards',
            'address'=>'required|regex:/^[a-zA-Z]+$/u|min:3|max:50',
            'phone'=>'required|min:10|max:10',
        ],[
            'name.regex'=>'the name faild must be String',
            'address.regex'=>'the address must be String',
        ]);

        $save = Guard::insert([
            'name'=> $this->name,
            'address'=> $this->address,
            'phone' => $this->phone,
            'created_at'=>Carbon::now(),
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeAddGuird');
        }
        $this->showToastr('new data have been added successfuly' , 'info');
    }

    // delet gauird
    public function deleteConfirm($id){
        $info = Guard::find($id);
        return $this->dispatchBrowserEvent('swalConfirm' ,[
            'title'=>'are you sure ?',
            'html'=>'you want to delete <strong>'.' '.$info->name.'</strong>',
            'id'=>$id,
        ]);
    }
    public function delete($id){
        Guard::find($id)->delete();
        $this->showToastr('Guard have been deleted successfuly' , 'success');
    }

    //edit gauird
    public function openEditModel($id){
        $info = Guard::find($id);
        $this->up_name = $info->name;
        $this->up_phone = $info->phone;
        $this->up_address = $info->address;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('openEditModel',[
            'id'=>$id,
        ]);
    }
    public function updateGuird(){
        $cid =$this->cid;
        $this->validate([
            'up_name'=>'required|unique:guards,name,'.$cid,
            'up_address'=>'required|min:3|max:255',
            'up_phone'=>'required|min:10|max:10',
        ]);

        $save = Guard::find($cid)->update([
            'name'=>$this->up_name,
            'address'=>$this->up_address,
            'phone'=>$this->up_phone,
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeEditModel');
            $this->showToastr('Guard info have been updated successfuly' , 'success');
        }
    }
}
