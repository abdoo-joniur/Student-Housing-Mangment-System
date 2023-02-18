<div class="modal fade addnews" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add news</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="saveCollage">
       
        <div class="form-group">
            <label for="">Collage Name</label>
            <input type="text" class="form-control" placeholder="Type Collage Name" wire:model="collage_name">
            <span class="text-danger">
                @error('collage_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save Collage</button>
        </div>
    </form>
</div>
</div>
</div>

</div>
