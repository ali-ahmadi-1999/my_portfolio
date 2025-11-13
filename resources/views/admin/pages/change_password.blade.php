
@extends('admin.admin_dashboard')

@section('admin')


<div class="col-md-12 grid-margin stretch-card" dir="rtl">
  <div class="card">
    <div class="card-body">

      <h6 class="card-title">ویرایش پروفایل</h6>

      <form class="forms-sample" method="POST" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data"> 
             @csrf
            
        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> پسورد قبلی  </label>
          <div class="col-sm-9">
            <input type="text" name="old_password" @error('old_password') is-invalid  @enderror class="form-control text-end"  placeholder=" پسورد قبلی " style="direction: rtl;">
            @error('old_password')

            <span class="text-danger" >{{ $message }}</span>
                
            @enderror
          </div>
        </div>


              <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> پسورد جدید </label>
          <div class="col-sm-9">
            <input type="text" name="old_password" @error('new_password') is-invalid  @enderror class="form-control text-end"  placeholder=" پسورد جدید " style="direction: rtl;">
            @error('new_password')

            <span class="text-danger" >{{ $message }}</span>
                
            @enderror
          </div>
        </div>


        
       <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> تکرار پسورد جدید</label>
          <div class="col-sm-9">
            <input type="text" name="old_password" @error('confirm_new_password') is-invalid  @enderror class="form-control text-end"  placeholder="  تکرار پسورد جدید  " style="direction: rtl;">
            @error('confirm_new_password')

            <span class="text-danger" >{{ $message }}</span>
                
            @enderror
          </div>
        </div>
    
        <button class="btn btn-secondary">تغییر  رمز </button>
      </form>

    </div>
  </div>
</div>



@endsection
