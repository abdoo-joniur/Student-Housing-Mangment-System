<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Relative;

class RelaType extends Component
{
    protected $listeners = ['delete'];
    public $rel_type;
    public $up_rel_type;
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
        return view('livewire.rela-type',[
            'relative'=> Relative::orderBy('rel_type' , 'asc')->get(),
        ]);
    }

    public function openAddRelativeModel(){
        $this->rel_type='';
        $this->dispatchBrowserEvent('openAddRelativeModel');
    }

    public function Save(){
        $this->validate([
            'rel_type'=> 'required',
        ],[
            'rel_type.required'=>'this fiald is required',
        ]);

        $save = Relative::insert([
            'rel_type'=>$this->rel_type,
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeAddRelaModal');
        }

        //show Toaster Successfully Message
        $this->showToastr('new data have been added successfuly' , 'info');

    }
      //for delete relative Type
      public function deleteConfirm($id){
        $info = Relative::find($id);
        return $this->dispatchBrowserEvent('swalConfirm' ,[
            'title'=>'are you sure ?',
            'html'=>' you want to delete relative  <strong>'.' '.$info->rel_type.'</strong>',
            'id'=> $id,
        ]);
      }

      public function delete($id){
        Relative::find($id)->delete();
        $this->showToastr('Relative hav been deleted successfuly' , 'success');
      }

      //edit Relative type
      public function openEditModel($id){
        $info = Relative::find($id);
        $this->up_rel_type = $info->rel_type;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('openEditRalaModel' ,[
            'id'=>$id,
        ]);
      }

      public function updateRelative(){
        $cid = $this->cid;
        $this->validate([
            'up_rel_type'=>'required|max:10|unique:relatives,rel_type,'.$cid
        ]);

        $save = Relative::find($cid)->update([
            'rel_type'=>$this->up_rel_type,
        ]);

        $this->dispatchBrowserEvent('closeEditRelaModel');
         $this->showToastr('Relative Type updated successfuly' , 'success');
      }
}
