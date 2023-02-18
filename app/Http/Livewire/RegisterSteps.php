<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\College;
use App\Models\Relative;
use App\Models\Section;
use App\Models\takeRoomModel;
use App\Models\Student;
use illuminate\support\carbon;

class RegisterSteps extends Component
{

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


        public $totalStep = 4;
        public $currentStep = 1;

        public function mount(){
           $this->currentStep = 1;
       }


    public function render()
    {
        return view('livewire.register-steps',[
          'section'=>Section::orderBy('section_name' , 'asc')->get(),
          'relative'=>Relative::orderBy('rel_type' , 'asc')->get(),
          'college'=>College::orderBy('college_name' , 'asc')->get(),
        ]);
    }

    public function increaseStep()
    {
      $this->resetErrorBag();
      $this->ValidateData();
     $this->currentStep++;
     if($this->currentStep > $this->totalStep){
        $this->currentStep = $this->totalStep;
      }
    }

    public function decreaseStep(){
      $this->resetErrorBag();
       $this->currentStep--;
       if($this->currentStep < 1){
         $this->currentStep = 1;
       }
    }

    public function saveRegister(){
      $this->resetErrorBag();
      if($this->currentStep == 4){
        $this->validate([
          'section_id'=>'required',
          'room_no'=>'required',
        ],[
          'room_no.required'=>'الرجاء كتابة رقم الغرفة',
          'section_id.required'=>'الرجاء اختيار الجناح',
        ]);
      }

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
         Student::insert($values);
         $this->reset();
         $this->currentStep = 1;
         return redirect()->route('success');
        }

    }

    // validate data
    public function ValidateData(){
      if($this->currentStep == 1){

        $this->validate([
          'name'=>'required|string|min:3|max:25',
          'phone'=>'required|min:10|max:10',
          'address'=>'required|string|min:3|max:50',
        ],[
          'name.required'=>'حقل الاسم مطلوب',
          'name.string'=>'حقل الاسم يجب ان يحتوي علي حروف فقط',
          'name.min'=>'الحد الادني 3 حروف',
          'name.max'=>'الحد الاعلي 50 حرف',
          'phone.required'=>'حقل الهاتف مطلوب',
          'phone.min'=>'يجب ان يحتوي علي 10 ارقام',
          'phone.max'=>'يجب ان يحتوي علي 10 ارقام فقط',
          'address.required'=>'حقل العنوان مطلوب',
          'address.string'=>'يجب ان يحتوي علي نص ',
          'address.min'=>'العنوان يجب الا يقل عن 3 احرف',
        ]);
      }elseif($this->currentStep == 2){

        $this->validate([
          'rel_name'=>'required|string|min:3|max:25',
          'rel_phone'=>'required|min:10|max:10',
          'rel_address'=>'required|string|min:3|max:50',
          'rel_id'=>'required',
        ],[
          'rel_name.required'=>'حقل الاسم مطلوب',
          'rel_name.string'=>'حقل الاسم يجب ان يحتوي علي حروف فقط',
          'rel_name.min'=>'الحد الادني 3 حروف',
          'rel_name.max'=>'الحد الاعلي 50 حرف',
          'rel_phone.required'=>'حقل الهاتف مطلوب',
          'rel_phone.min'=>'يجب ان يحتوي علي 10 ارقام',
          'rel_phone.max'=>'يجب ان يحتوي علي 10 ارقام فقط',
          'rel_address.required'=>'حقل العنوان مطلوب',
          'rel_address.string'=>'يجب ان يحتوي علي نص ',
          'rel_address.min'=>'العنوان يجب الا يقل عن 3 احرف',
          'rel_id.required'=>'الرجاء اختيار نوع صلة القرابة'
        ]);

      }elseif($this->currentStep == 3){

        $this->validate([
          'college_id'=>'required',
          'college_Department'=>'required|min:4|max:25',
          'level'=>'required',
          'StudentID'=>'required',
        ],[
          'college_id.required'=>'الرجاء اختيار الكلية',
          'college_Department.required'=>'الرجاء كتابة القسم',
          'college_Department.min'=>'الحد الادني 3 حروف',
          'college_Department.max'=>'الحد الاعلي 25 حرف',
          'level.required'=>'حقل المستوي مطلوب',
          'StudentID.required'=>'الرجاء ادخال الرقم الجامعي',
        ]);

      }
    }

}
