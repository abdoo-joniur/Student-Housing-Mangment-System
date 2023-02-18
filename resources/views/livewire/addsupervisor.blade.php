<div>
    
    <div class="row">
    <div class="col-md-11">
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Supervisors Page</h1>
       <button type="button" wire:click="openAddsuperModel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> add New</button>
      </div>
    </div>
</div>


 <div class="">
    <div class="row">
        <div class="col-md-11">
          <div class="card">
           <div class="card-header">All Supervisors</div>
           <div class="card-body">
             <table class="table table-striped table-hover">
              <thead>
                <th>#no</th>
                <th>Name</th>
                <th>Address</th>
                <th>phone</th>
                <th>Section</th>
                <th>date</th>
                <th>Action</th>
              </thead>
              <tbody>
                @php($i = 1)
                @forelse ($super as $item)
                <tr>
                  <td>{{ $i++}}</td>
                  <td>{{ $item->name}}</td>
                  <td>{{ $item->address}}</td>
                  <td>{{ $item->phone}}</td>
                  <td>{{ $item->section->section_name}}</td>
                  <td>{{ $item->created_at}}</td>
                  <td>
                    <button class="btn btn-info" wire:click="editInfo({{ $item->id }})">edit</button>
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

 @include('backend.model.addSuper-model')
 @include('backend.model.editSuper-model')
</div>
