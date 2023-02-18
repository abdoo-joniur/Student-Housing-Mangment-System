<div>
    
<form wire:submit.prevent="save">
    <div class="form-group mb-3">
    <label class="mb-3">ادخل رقم الغرفة</label>
    <input
        wire:model="room_no"
        type="number"
        placeholder="ادخل رقم الغرفة"
        class="form-control room" />
        <span class="text-danger">
           @error('room_no')
            {{ $message }}
           @enderror
        </span>
    </div>
    <div class="form-group mb-3">
    <button type="submit" class="btn btn-info form-control">استعلام</button>
    </div>
</form>

</div>
