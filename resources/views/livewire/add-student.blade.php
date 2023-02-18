<div>

<div class="row">
   <div class="col-md-11">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Students Page</h1>
        <button type="button" wire:click="openAddStudentModel" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">add New Student</button>
     </div>
   </div>
</div>

<div class="row mb-3 p-2">
  <div class="col-md-3">
    <lable>Section</lable>
    <select wire:model="bySection" class="form-control">
        <option>no selected</option>
        @foreach($section as $item)
        <option value="{{ $item->id }}">{{ $item->section_name }}</option>
        @endforeach
    </select>
  </div>

  <div class="col-md-2">
    <lable>Search</lable>
    <input type="text" class="form-control" wire:model.debounce.350ms="search">
  </div>

  <div class="col-md-2">
    <lable>per page</lable>
    <select wire:model="perPage" class="form-control">
        <option>no selected</option>
        <option value="5">5</option>
        <option value="15">15</option>
        <option value="25">25</option>
    </select>
  </div>

  <div class="col-md-2">
    <lable>oreder By</lable>
    <select wire:model="orderBy" class="form-control">
        <option value="name">name</option>
        <option value="room_no">room no</option>
    </select>
  </div>

  <div class="col-md-2">
    <lable>sort By</lable>
    <select wire:model="sortBy" class="form-control">
        <option value="asc">asc</option>
        <option value="desc">desc</option>
    </select>
  </div>

</div>


<div class="">
<div class="row">
<div class="col-md-11">
<div class="card">
<div class="card-header">All Students</div>
<div class="card-body">
<table class="table table-striped table-hover">
<thead>
<tr>
    <th>#no</th>
    <th>Name</th>
    <th>phone</th>
    <th>collage</th>
    <th>section</th>
    <th>room no</th>
    <th>date</th>
    <th>action</th>
</tr>
</thead>
<tbody>
@php( $i = 1)
@forelse ($student as $item)
<tr>
    <td>{{  $i++ }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->college->college_name }}</td>
    <td>{{ $item->section->section_name}}</td>
    <td>{{ $item->room_no }}</td>
    <td>{{ $item->created_at->diffforHumans() }}</td>
    <td>
        <button type="button" class="btn btn-danger" wire:click="DeleteConfirm({{ $item->id }})">delete</button>
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

@include('backend.model.addStudent-model')
</div>
