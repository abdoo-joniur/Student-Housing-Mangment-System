<div>
    
    <div class="row">
    <div class="col-md-11">
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Guards Page</h1>
       <button wire:click="openAddGuirdModel" type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">add new</button>
      </div>
    </div>
</div>


 <div class="">
    <div class="row">
        <div class="col-md-11">
          <div class="card">
           <div class="card-header">All Guards</div>
           <div class="card-body">
             <table class="table table-striped table-hover">
               <thead>
                <tr>
                  <th>#no</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>phone</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
               </thead>
               <tbody>
                 @php($i = 1)
                @forelse ($guard as $item)
                <tr>
                  <th>{{ $i++}}</th>
                  <th>{{ $item->name}}</th>
                  <th>{{ $item->address}}</th>
                  <th>{{ $item->phone}}</th>
                  <th>{{ $item->created_at}}</th>
                  <th>
                    <button class="btn btn-info" wire:click="openEditModel({{ $item->id }})">edit</button>
                    <button class="btn btn-danger" wire:click="deleteConfirm({{ $item->id }})">delete</button>
                  </th>
                </tr>
                @empty
                    <code>no data found</code>
                @endforelse
               </tbody>
             </table>
           </div>
          </div>
        </div>
    </div>
 </div>

 @include('backend.model.add-Guird')
 @include('backend.model.editGuird-model')
</div>
