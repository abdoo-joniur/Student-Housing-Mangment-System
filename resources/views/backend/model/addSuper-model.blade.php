<div class="modal fade addSuper" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add new Supervisor</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    
    <form wire:submit.prevent="saveSuper">
       
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" placeholder="Type Supervisor Name" wire:model="name">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">address</label>
            <input type="text" class="form-control" placeholder="Type address" wire:model="address">
            <span class="text-danger">
                @error('address')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">phone</label>
            <input type="number" class="form-control" placeholder="Type Supervisor phone" wire:model="phone">
            <span class="text-danger">
                @error('phone')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">Section</label>
            <select class="form-control" wire:model="section_id">
                <option>no selected</option>
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

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save Data</button>
        </div>
    </form>
</div>
</div>
</div>

</div>
