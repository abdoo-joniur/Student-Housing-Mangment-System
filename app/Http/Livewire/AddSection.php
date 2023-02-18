<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;

class AddSection extends Component
{
    protected $listeners =['delete'];
    public $section_name;
    public $up_section_name;
    public $cid;

    public function showToastr($message , $type){
       return $this->dispatchBrowserEvent(
            'showToastr',[
                'message'=> $message,
                'type'=>   $type,
            ]);
    }

    public function render()
    {
        return view('livewire.add-section' , [
            'Section'=> Section::orderBy('section_name' ,'asc')->get(),
        ]);
    }

    public function openAddSectionModel(){
        $this->section_name='';
        $this->dispatchBrowserEvent('openAddSectionModel');
    }

    public function saveSection(){
        $this->validate([
            'section_name'=>'required|min:3|max:20|unique:sections',
        ]);

        $save = Section::insert([
            'section_name'=>$this->section_name,
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeAddSectionModel');
        }
        $this->showToastr('New Section has been added successfuly','info');
    }

    //for deleting section
    public function deleteConfirm($id){
        $info = Section::find($id);
        return $this->dispatchBrowserEvent('swalConfirm' ,[
            'title'=>'Are you sure ?',
            'html'=>'you want to delete <strong>'.' '.$info->section_name.'</strong>',
            'id'=>$id,
        ]);
    }

    public function delete($id){
        Section::find($id)->delete();
        $this->showToastr('Section has been deleted successfuly','success');
    }

    //for edit Section info
    public function openEditModel($id){
        $info = Section::find($id);
        $this->up_section_name = $info->section_name;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('openEditModel',[
            'id'=>$id,
        ]);
    }
    public function updateSection(){
        $cid = $this->cid;
        $this->validate([
            'up_section_name'=>'required:max:10|min:3|unique:sections,section_name,'.$cid,
        ]);

        $save = Section::find($cid)->update([
            'section_name'=>$this->up_section_name,
        ]);

        if($save){
            $this->dispatchBrowserEvent('closeEditModel');
            $this->showToastr('Section info has been updated successfuly','success');
        }
    }
}
