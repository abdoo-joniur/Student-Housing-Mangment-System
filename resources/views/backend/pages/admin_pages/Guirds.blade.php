@extends('backend.layout.master')
@section('title')
    Add-Guards
@endsection

@section('content')
@livewire('add-guird')
@endsection

@section('script')
    window.addEventListener('openAddGuirdModel' , function(){
      $('.addGuird').find('span').html('');
      $('.addGuird').find('form')[0].reset();
      $('.addGuird').modal('show');
    });

    window.addEventListener('closeAddGuird' , function(){
      $('.addGuird').find('span').html('');
      $('.addGuird').find('form')[0].reset();
      $('.addGuird').modal('hide');
    });

    {{-- for deleting guird --}}
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
    
    {{-- edit gauird --}}
    window.addEventListener('openEditModel' , function(event){
      $('.editGuird').find('span').html('');
      $('.editGuird').modal('show');
    });

     window.addEventListener('closeEditModel' , function(){
      $('.editGuird').find('span').html('');
      $('.editGuird').find('form')[0].reset();
      $('.editGuird').modal('hide');
    });
@endsection