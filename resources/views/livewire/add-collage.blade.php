<div>
    <div class="row">
    <div class="col-md-11">
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Faculties Page</h1>
       <a href="" wire:click="addcollageModel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#addFacultyModal">add new Collage</a>
      </div>
    </div>
</div>


 <div class="">
    <div class="row">
        <div class="col-md-11">
          <div class="card">
           <div class="card-header">All Faculties</div>
           <div class="card-body">
             <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#no</th>
                    <th>Faculty Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($i = 1)
                  @forelse ($college as $item)
                  <tr>
                    <td width="20">{{ $i++ }}</td>
                    <td width="60">{{ $item->college_name }}</td>
                    <td width="20">
                      <button class="btn btn-primary" wire:click="editConfirm({{$item->id}})">edit</button>
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

 @include('backend.model.Add-Faculty')
 @include('backend.model.edit-Faculty')
</div>
