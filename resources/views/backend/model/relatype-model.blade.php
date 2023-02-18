<div class="modal fade addRela" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add new Relatives</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="Save">
       
        <div class="form-group">
            <label for="">Relative Type</label>
            <input type="text" class="form-control" placeholder="Relative Type" wire:model="rel_type">
            <span class="text-danger">
                @error('rel_type')
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
