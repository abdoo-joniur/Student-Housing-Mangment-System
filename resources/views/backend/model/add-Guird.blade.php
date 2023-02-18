<div class="modal fade addGuird" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add new Guird</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="saveGuird">
       
        <div class="form-group">
            <label for="">Guird Name</label>
            <input type="text" class="form-control" placeholder="Type Guird Name" wire:model="name">
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">Guird address</label>
            <input type="text" class="form-control" placeholder="Type Collage Name" wire:model="address">
            <span class="text-danger">
                
                @error('address')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="number" placeholder="Enter Gaurd Name" wire:model="phone" class="form-control">
            <span class="text-danger">
                @error('phone')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save</button>
        </div>
    </form>
</div>
</div>
</div>

</div>
