<div class="modal fade addStudent" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add new new Student</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="saveStudent">
       
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="">Student Name</label>
                  <input type="text" class="form-control" placeholder="Type Student Name" wire:model="name" autofocus>
                    <span class="text-danger">
                      @error('name')
                       {{ $message }}
                      @enderror
                    </span>
                 </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="">Student phone</label>
                 <input type="number" class="form-control" placeholder="Type phone"   wire:model="phone">
                <span class="text-danger">
                    @error('phone')
                      {{ $message }}
                    @enderror
                 </span>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="form-group mb-3">
                <label for="">Student address</label>
                 <textarea class="form-control" cols="2" rows="2" wire:model="address">
                    
                 </textarea>
                 <span class="text-danger">
                      @error('address')
                      {{ $message }}
                      @enderror
                  </span>
             </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
               <div class="form-group mb-3">
                  <label for="">relatave Name</label>
                  <input type="text" class="form-control" placeholder="Type Relative Name" wire:model="rel_name">
                  <span class="text-danger">
                     @error('rel_name')
                       {{ $message }}
                     @enderror
                  </span>
               </div>
             </div>
             <div class="col-md-6">
             <div class="form-group mb-3">
              <label for="">relatave phone</label>
                <input type="number" class="form-control" placeholder="Type Relative phone" wire:model="rel_phone">
                  <span class="text-danger">
                     @error('rel_phone')
                       {{ $message }}
                     @enderror
                  </span>
               </div>
              </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="form-group mb-3">
                   <label for="">relatave address</label>
                   <input type="text" class="form-control" placeholder="Type Relative address" wire:model="rel_address">
                  <span class="text-danger">
                     @error('rel_address')
                       {{ $message }}
                     @enderror
                  </span>
                 </div>
               </div>

               <div class="col-md-6">
                 <div class="form-group mb-3">
                  <label for="">relatave Type</label>
                  <select class="form-control" wire:model="rel_id">
                    <option value="">no selected</option>
                        @foreach ($relative as $item)
                          <option value="{{ $item->id }}">{{ $item->rel_type }}</option>
                        @endforeach
                  </select>
                  <span class="text-danger">
                     @error('rel_id')
                       {{ $message }}
                     @enderror
                  </span>
                 </div>
               </div>
           </div>

          <div class="row">
            <div class="col-md-6">
               <div class="form-group mb-3">
                  <label for="">Collage</label>
                  <select class="form-control" wire:model="college_id">
                    <option value="">no selected</option>
                      @foreach ($collage as $item)
                        <option value="{{ $item->id }}">{{ $item->college_name }}</option>
                      @endforeach
                  </select>
                  <span class="text-danger">
                     @error('college_id')
                       {{ $message }}
                     @enderror
                  </span>
                 </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-3">
                  <label for="">Department</label>
                  <input type="text" class="form-control" placeholder="Type Department" wire:model="college_Department">
                  <span class="text-danger">
                     @error('college_Department')
                       {{ $message }}
                     @enderror
                   </span>
                 </div>
            </div>
          </div>

          <div class="row">
          <div class="col-md-6">
            <div class="form-group mb-3">
              <label for="">level</label>
                 <input type="text" class="form-control" placeholder="Type level"  wire:model="level">
                 <span class="text-danger">
                    @error('level')
                      {{ $message }}
                     @enderror
                 </span>
              </div>
           </div>
          <div class="col-md-6">
             <div class="form-group mb-3">
              <label for="">StudentID</label>
                 <input type="number" class="form-control" placeholder="Type StudintID"  wire:model="StudentID">
                 <span class="text-danger">
                    @error('StudentID')
                      {{ $message }}
                     @enderror
                 </span>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
             <div class="form-group mb-3">
              <label for="">Room no</label>
                 <input type="number" class="form-control" placeholder="Type room no"  wire:model="room_no">
                 <span class="text-danger">
                    @error('room_no')
                      {{ $message }}
                     @enderror
                 </span>
              </div>
           </div>
           <div class="col-md-6">
           <div class="form-group mb-3">
              <label for="">Section</label>
                 <select class="form-control" wire:model="section_id">
                    <option value="">no selected</option>
                       @foreach ($section as $item)
                          <option value="{{ $item->id }}">{{ $item->section_name }}</option> 
                       @endforeach
                  </select>
                  <span class="text-danger">
                     @error('section_id')
                       {{ $message }}
                     @enderror
                  </span>
             </div>
          </div>
        </div>

        <div class="form-group mb-3">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save</button>
        </div>
      </div>
    </div>
        
    </form>


</div>
</div>
</div>

</div>
