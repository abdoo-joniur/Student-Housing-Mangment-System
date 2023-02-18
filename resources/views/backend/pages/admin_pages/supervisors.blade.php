@extends('backend.layout.master')
@section('title')
    Add-Supervisors
@endsection

@section('content')

@livewire('addsupervisor')
@endsection

@section('script')
     window.addEventListener('openAddsuperModel' , function(){
      $('.addSuper').find('span').html('');
      $('.addSuper').find('form')[0].reset();
      $('.addSuper').modal('show');
    });

     window.addEventListener('closeAddSuper' , function(){
      $('.addSuper').find('span').html('');
      $('.addSuper').find('form')[0].reset();
      $('.addSuper').modal('hide');
    });

    {{-- delete Supervisors --}}
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
    
    {{-- editng superviser info --}}
    
     window.addEventListener('opentEditSuper' , function(event){
      $('.editSuper').modal('show');
      $('.editSuper').find('span').html('');
    });

    window.addEventListener('closeEditsuperModel' , function(){
      $('.editSuper').find('form')[0].reset();
      $('.editSuper').find('span').html('');
      $('.editSuper').modal('hide');
    });
@endsection