@extends('admin.admin_dashboard')

@section('admin')

<div class="col-md-12 grid-margin stretch-card" dir="rtl">
  <div class="card">
    <div class="card-body">

      <h6 class="card-title">ویرایش پروفایل</h6>

      <form class="forms-sample" method="POST" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data"> 
         @csrf

        <div class="row mb-3">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">نام کاربری</label>
          <div class="col-sm-9">
            <input type="text" name="username" class="form-control text-end" value="{{ $admin->username }}" placeholder="نام کاربری" style="direction: rtl;">
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">ایمیل</label>
          <div class="col-sm-9">
            <input type="email" class="form-control text-end" name="email" value="{{ $admin->email }}"  placeholder="ایمیل" style="direction: rtl;">
          </div>
        </div>

          <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">عکس پروفایل </label>
          <div class="col-sm-9">
            <input type="file" class="form-control text-end" id="Image" name="profile_image" style="direction: rtl;">
          </div>
        </div>

          <div class="row mb-3">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
          <div class="col-sm-9">
           <img id="ShowImage" src="{{$admin->photo ? asset($admin->photo) : asset('uploads/admin/favicon.png')}}" alt="" style="width:90px; height:90px;">
          </div>
        </div>

        <button class="btn btn-secondary">ویرایش</button>
      </form>

    </div>
  </div>
</div>



<script>
  $(document).ready(function () {
    $('#Image').on('change', function (e) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#ShowImage').attr('src', e.target.result);
      }
      reader.readAsDataURL(e.target.files[0]);
    });
  });
</script>


@endsection
