<div class="modal fade editSuper" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModallable" aria-hidden="true" data-keyboard="false" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModallable">update Supervisor info</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form wire:submit.prevent="updateSuper">
       <input type="hidden" wire:model="cid">
        <div class="form-group">
            <label for="">Update Name</label>
            <input type="text" class="form-control"wire:model="up_name">
            <span class="text-danger">
                @error('up_name')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">update address</label>
            <input type="text" class="form-control"  wire:model="up_address">
            <span class="text-danger">
                @error('up_address')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">update phone</label>
            <input type="number" class="form-control"  wire:model="up_phone">
            <span class="text-danger">
                @error('up_phone')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="">update Section</label>
            <select class="form-control" wire:model="up_section_id">
                <option>no selected</option>
                @foreach ($section as $item)
                    <option value="{{ $item->id }}">{{ $item->section_name }}</option>   
                @endforeach
            </select>
            <span class="text-danger">
                @error('up_section_id')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-sm" >Save changes</button>
        </div>
    </form>
</div>
</div>
</div>

</div>
