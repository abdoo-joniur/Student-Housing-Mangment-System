@extends('backend.layout.master')
@section('title')
    Add-Faculties
@endsection

@section('content')
 @livewire('add-collage')
@endsection

@section('script')
    window.addEventListener('addcollageModel' , function(){
      $('.addCollage').find('span').html('');
      $('.addCollage').find('form')[0].reset();
      $('.addCollage').modal('show');
    });

    window.addEventListener('closeAddcollageModel' , function(){
      $('.addCollage').find('span').html('');
      $('.addCollage').find('form')[0].reset();
      $('.addCollage').modal('hide');
    });

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
    
    {{-- editing the collage --}}
    window.addEventListener('openEditModel' , function(event){
      $('.editCollage').modal('show');
      $('.editCollage').find('span').html('');
    });

    window.addEventListener('closeEditModel' , function(){
      $('.editCollage').modal('hide');
    });
@endsection