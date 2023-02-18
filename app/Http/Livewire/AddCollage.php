<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\College;

class AddCollage extends Component
{
    protected $listeners =['delete'];
    public $collage_name;
    public $upd_collage_name;
    public $cid;

    public function showToastr($message,$type){
        return $this->dispatchBrowserEvent(
            'showToastr',[
                'message'=> $message,
                'type'=>   $type,
            ]);
    }
    

    public function saveCollage(){
        $this->validate([
            'collage_name'=>'required|regex:/^[a-zA-Z]+$/u|min:5|max:50',
        ],[
            'collage_name.required'=>'this faild is Required',
            'collage_name.regex'=>'the Collage name must be string',
        ]);

        $save = College::insert([
            'college_name'=>$this->collage_name,
        ]);
        
        if($save){
            $this->dispatchBrowserEvent('closeAddcollageModel');
        }
        $this->showToastr('Collage has been added successfuly','info');

    }
    
    public function addcollageModel(){
        $this->collage_name='';
        $this->dispatchBrowserEvent('addcollageModel');
    }

    public function render()
    {
        return view('livewire.add-collage' ,[
            'college' => College::orderBy('college_name','asc')->get(),
        ]);
    }

    //delete college
    public function deleteConfirm($id){
        $info = College::find($id);
        $this->dispatchBrowserEvent('swalConfirm',[
            'title'=>'are you sure ?',
            'html'=>'you want to delete <strong>'.$info->college_name.'</strong>',
            'id'=>$id,
        ]);
    }
    public function delete($id){
        $del = College::find($id)->delete();
        $this->showToastr('Collage name has been Deleted successfuly','success');
    }

    //editing the collage
    public function editConfirm($id){
      $info = College::find($id);
      $this->upd_collage_name = $info->college_name;
      $this->cid = $info->id;
      $this->dispatchBrowserEvent('openEditModel',[
        'id'=>$id
      ]);
    }

    //updating collage name
    public function updateCollage(){
        $cid = $this->cid;
        $this->validate([
            'upd_collage_name'=>'required|min:5|max:50|unique:colleges,college_name,'.$cid,
        ],[
            'upd_collage_name.required'=>'the collage name is required',
            'upd_collage_name.min'=>'the collage name must be at least 5 characters',
            'upd_collage_name.max'=>'the collage name must be not greter than 50 characters',
            'upd_collage_name.unique'=>'this collage name was already exist',
        ]);

        $update = College::find($cid)->update([
             'college_name'=>$this->upd_collage_name,
          ]);

          if($update){
            $this->dispatchBrowserEvent('closeEditModel');
          }
          $this->showToastr('Collage name has been updated successfuly','success');
    }

}
