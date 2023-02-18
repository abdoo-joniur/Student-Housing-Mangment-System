<div class="modal fade editSection" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">Add new Section</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="updateSection">
       <input type="hidden" wire:click="cid">
        <div class="form-group">
            <label for="">update Section Name</label>
            <input type="text" class="form-control" wire:model="up_section_name">
            <span class="text-danger">
                @error('up_section_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save Changes</button>
        </div>
    </form>
</div>
</div>
</div>

</div>
