<div>
    <form wire:submit.prevent="saveRegister">

        {{-- step 1 --}}
        @if ($currentStep == 1)
          <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    الخطوة  4/1 [ المعلومات شخصية ]
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">الاسم</label>
                                <input type="text" class="form-control" wire:model="name" placeholder="ادخل اسمك ">
                                 <span class="text-danger">
                                     @error('name')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">الهاتف</label>
                                <input type="number" class="form-control" wire:model="phone" placeholder="الرجاء ادخال رقم هاتفك الشخصي">
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
                                <label for="">العنوان</label>
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
                </div>
            </div>
        </div>
    
        @endif

        
        {{-- step 2 --}}
        @if ($currentStep == 2)
           <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    الخطوة 2\4  [ بيانات احد الاقارب ]
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">الاسم</label>
                                <input type="text" wire:model="rel_name" class="form-control" placeholder="قد نحتاج للوصول لاحد اقاربك عند الضرورة">
                                <span class="text-danger">
                                     @error('rel_name')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">العنوان</label>
                                <input type="text" class="form-control" wire:model="rel_address" placeholder="عنوانه">
                                 <span class="text-danger">
                                     @error('rel_address')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">الهاتف</label>
                                <input type="number" wire:model="rel_phone" class="form-control" placeholder="رقم هاتفه">
                                 <span class="text-danger">
                                     @error('rel_phone')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">نوع صلة القرابة</label>
                                <select class="form-control" wire:model="rel_id">
                                    <option>لم يتم الاختيار</option>
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
                </div>
            </div>
        </div> 
    @endif


        {{-- step 3 --}}
    @if ($currentStep == 3)
           <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                   الخطوة 4/3  [ بيانات الكلية ]
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">في اي كلية تدرس</label>
                                <select wire:model="college_id" class="form-control">
                                    <option>لم يتم الاختيار</option>
                                    @foreach ($college as $item)
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
                                <label for="">القسم</label>
                                <input type="text" wire:model="college_Department" class="form-control" placeholder="الرجاء اختيار القسم">
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
                                <label for="">المستوي</label>
                                <input type="text" wire:model="level" class="form-control" placeholder="ادخل المستوي">
                                 <span class="text-danger">
                                     @error('level')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">الرقم الجامعي</label>
                                <input type="number" wire:model="StudentID" class="form-control" placeholder="الرجاء كتابة رقمك الجامعي">
                                 <span class="text-danger">
                                     @error('StudentID')
                                      {{ $message }}
                                     @enderror
                               </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
 @endif


       {{-- step 4 --}}
 @if ($currentStep == 4)
     <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    الخطوة 4/4 [ بيانات حجز الغرفة ]
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class=".label" for="">الجناح</label>
                                <select class="form-control" wire:model="section_id">
                                    <option>لم يتم الاختيار</option>
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
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">رقم الغرفة</label>
                                <input type="number" wire:model="room_no" class="form-control" placeholder="ادخل رقم الغرفة">
                                <span class="text-danger">
                                  @error('room_no')
                                   {{ $message }}
                                  @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
 @endif

       {{-- action buttons --}}
        <div class="action-buttons d-flex bg-white justify-content-between pt-2 pb-2">
            @if($currentStep == 1)
              <div></div>
            @endif

            @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4 )
              <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">رجوع</button>
            @endif

            @if($currentStep == 1 || $currentStep == 2 || $currentStep == 3 )
              <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">التالي</button>
            @endif

            @if($currentStep == 4)
              <button type="submit" class="btn btn-md btn-primary">حجز</button>
            @endif
        </div>

    </form>
</div>
