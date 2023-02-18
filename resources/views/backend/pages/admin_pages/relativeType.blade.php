@extends('backend.layout.master')
@section('title')
    Add-Relative
@endsection

@section('content')
   @livewire('rela-type')
@endsection

@section('script')
  
    window.addEventListener('openAddRelativeModel' , function(){
      $('.addRela').find('span').html('');
      $('.addRela').find('form')[0].reset();
      $('.addRela').modal('show');
    });

    window.addEventListener('closeAddRelaModal' , function(){
      $('.addRela').find('span').html('');
      $('.addRela').find('form')[0].reset();
      $('.addRela').modal('hide');
    });

    {{-- for deleting --}}
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
    
    {{-- for editing --}}
     window.addEventListener('openEditRalaModel' , function(event){
      $('.editRela').find('span').html('');
      $('.editRela').modal('show');
    });

      window.addEventListener('closeEditRelaModel' , function(){
      $('.editRela').find('span').html('');
      $('.editRela').find('form')[0].reset();
      $('.editRela').modal('hide');
    });
@endsection