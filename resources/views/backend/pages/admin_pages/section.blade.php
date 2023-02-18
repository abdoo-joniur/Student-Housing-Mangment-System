@extends('backend.layout.master')
@section('title')
    Add-Section
@endsection

@section('content')
  @livewire('add-section')
@endsection

@section('script')
    window.addEventListener('openAddSectionModel' , function(){
      $('.addSection').find('span').html('');
      $('.addSection').find('form')[0].reset();
      $('.addSection').modal('show');
    });

     window.addEventListener('closeAddSectionModel' , function(){
      $('.addSection').find('span').html('');
      $('.addSection').find('form')[0].reset();
      $('.addSection').modal('hide');
    });


    {{-- delete section --}}

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

   {{-- for edit --}}
   window.addEventListener('openEditModel' , function(event){
      $('.editSection').find('span').html('');
      $('.editSection').modal('show');
    });

     window.addEventListener('closeEditModel' , function(){
      $('.editSection').find('span').html('');
      $('.editSection').find('form')[0].reset();
      $('.editSection').modal('hide');
    });
@endsection