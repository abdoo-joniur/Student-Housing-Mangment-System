<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Models\Relative;
use App\Models\College;
use App\Models\Section;
use illuminate\support\carbon;
class AddStudent extends Component
{
        protected $listeners = ['delete'];
        public $name;
        public $phone;
        public $address;
        public $rel_name;
        public $rel_phone;
        public $rel_address;
        public $rel_id;
        public $college_id;
        public $college_Department;
        public $level;
        public $StudentID;
        public $room_no;
        public $section_id;
        public $up_name;
        public $up_phone;
        public $up_address;
        public $cid;

        public $bySection = null;
        public $perPage = 5;
        public $sortBy = 'asc';
        public $orderBy = 'name';
        public $search;

        public function showToastr($message,$type){
        return $this->dispatchBrowserEvent(
            'showToastr',[
                'message'=> $message,
                'type'=>   $type,
            ]);
    }

    public function render()
    {
        return view('livewire.add-student' ,[
            'relative'=> Relative::orderBy('rel_type' , 'asc')->get(),
            'collage'=> College::orderBy('college_name' , 'asc')->get(),
            'section'=> Section::orderBy('section_name' , 'asc')->get(),
            'student'=> Student::when($this->bySection,function($query){
                $query->where('section_id',$this->bySection);
            })
            ->search(trim($this->search))
            ->orderBy($this->orderBy,$this->sortBy)
            ->paginate($this->perPage)
        ]);
    }

    public function saveStudent(){
        $this->validate([
        'name'              =>'required|string|min:5|max:12',
        'phone'             =>'required|min:10|max:10',
        'address'           =>'required',
        'rel_name'          =>'required',
        'rel_phone'         =>'required',
        'rel_address'       =>'required',
        'rel_id'            =>'required',
        'college_id'        =>'required',
        'college_Department'=>'required',
        'level'             =>'required',
        'StudentID'         =>'required',
        'room_no'           =>'required',
        'section_id'        =>'required',
        ]);

        $values = array(
        'name'=>$this->name,
        'phone'=>$this->phone,
        'address'=>$this->address,
        'rel_name'=>$this->rel_name,
        'rel_phone'=>$this->rel_phone,
        'rel_address'=>$this->rel_address,
        'rel_id'=>$this->rel_id,
        'college_id'=>$this->college_id,
        'college_Department'=>$this->college_Department,
        'level'=>$this->level,
        'StudentID'=>$this->StudentID,
        'room_no'=>$this->room_no,
        'section_id'=>$this->section_id,
        'created_at'=>Carbon::now(),
      );

      $count = Student::where('room_no' ,'=', $this->room_no )->count();
        if($count >= 3){
          $this->dispatchBrowserEvent('FullRoom' ,[
            'type'=>'warning',
            'title'=>'<strong>!...عفوا </strong>',
            'text'=>' ...هذة الغرفة  ممتلئة الرجاء اختيار غرفة اخري',
          ]);
        }else{
         $save = Student::insert($values);
         if($save){
            $this->dispatchBrowserEvent('closeAddStudentModel');
        }
        $this->showToastr('New Student has been Registered Successfuly' , 'success');
        }
       }

       public function openAddStudentModel(){
            $this->dispatchBrowserEvent('openAddStudentModel');
        }

        // delete student
        public function DeleteConfirm($id){
            $info = Student::find($id);
            $this->dispatchBrowserEvent('swalConfirm',[
                'title'=>"are you sure ?",
                'html'=>' you want to delete <strong>'.$info->name.'</strong>',
                'id'=>$id,
            ]);
        }
        public function delete($id){
            Student::find($id)->delete();
            $this->showToastr('Student has been deleted Successfuly' , 'success');
        }
}
