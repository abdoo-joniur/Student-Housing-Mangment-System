<div>
    
    
<div class="row">
    <div class="col-md-11">
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Relatives Type Page</h1>
       <button wire:click="openAddRelativeModel" type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">add new</button>
      </div>
    </div>
</div>


 <div class="">
    <div class="row">
        <div class="col-md-11">
          <div class="card">
           <div class="card-header">All Relatives Type</div>
           <div class="card-body">
              <table class="table table-hover table-striped">
                  <thead>
                    <tr>
                        <th>#no</th>
                        <th>Relative Type</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @forelse ($relative as $item)
                   <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->rel_type }}</td>
                        <td>
                            <button class="btn btn-info" wire:click="openEditModel({{ $item->id }})">edit</button>
                            <button class="btn btn-danger" wire:click="deleteConfirm({{ $item->id }})">delete</button>
                        </td>
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

 @include('backend.model.relatype-model')
 @include('backend.model.editRela-model')
</div>
