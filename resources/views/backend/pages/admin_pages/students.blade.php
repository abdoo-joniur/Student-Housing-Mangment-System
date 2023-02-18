@extends('backend.layout.master')
@section('title')
    Add-Students
@endsection

@section('content')
  @livewire('add-student')
@endsection

@section('script')
  <!-- open add new student model -->
    window.addEventListener('openAddStudentModel' , function(){
      $('.addStudent').find('span').html('');
      $('.addStudent').find('form')[0].reset();
      $('.addStudent').modal('show');
    });
<!-- close model after adding student and reset inputs failds and remove error -->
    window.addEventListener('closeAddStudentModel' , function(){
      $('.addStudent').find('span').html('');
      $('.addStudent').find('form')[0].reset();
      $('.addStudent').modal('hide');
    });
    
    <!-- check if room is full or not -->
    window.addEventListener('FullRoom' ,function(event) {
      swal.fire({
        icon:event.detail.type,
        title:event.detail.title,
        text:event.detail.text,
      });
    });

    <!-- delete student -->
    window.addEventListener('swalConfirm' , function(event){
      swal.fire({
        title:event.detail.title,
        html:event.detail.html,
        imageWidth:48,
        imageHeight:48,
        showCloseButton :true,
        showCancelButton :true,
        cancelButtonText: 'cancel',
        cancelButtonColor: '#d33',
        canfirmButtonText :'yes , delete',
        canfirmButtonText :'#3085d6',
        width:500,
        allowOutSideClick:false,
      }).then(function(result){
        if(result.value){
          window.livewire.emit('delete',event.detail.id);
        }
      });
    });
   

@endsection