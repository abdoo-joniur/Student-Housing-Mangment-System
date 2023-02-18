<div>
    
    <div class="row">
    <div class="col-md-11">
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Section Page</h1>
       <a wire:click="openAddSectionModel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">add New Section</a>
      </div>
    </div>
</div>


 <div class="">
    <div class="row">
        <div class="col-md-11">
          <div class="card">
           <div class="card-header">All Section</div>
           <div class="card-body">
               <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#no</th>
                    <th>Section Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @forelse ($Section as $item)
                  <tr>
                    <td width="20">{{ $i++ }}</td>
                    <td width="60">{{ $item->section_name }}</td>
                    <td width="20">
                      <button class="btn btn-primary" wire:click="openEditModel({{$item->id}})">edit</button>
                      <button class="btn btn-danger" wire:click="deleteConfirm({{$item->id}})">delete</button>
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

 @include('backend.model.add-Section')
 @include('backend.model.editSection-model')
</div>
