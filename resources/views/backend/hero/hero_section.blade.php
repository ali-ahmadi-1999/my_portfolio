

@extends('admin.admin_dashboard')

@section('admin')

<div class="card" dir="rtl">
    <div class="card-body text-right">
        <h6 class="card-title">فرم  صفحه اصلی </h6>
        <form>
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-3">
                        <label class="form-label"></label>
                      <img id="ShowImage" src="{{ $hero->photo ? asset($hero->photo) : asset('backend/assets/images/pic.jpg') }}" alt="" style="width: 140px; height:140px; ">
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">انتخاب تصویر  </label>
                      <input type="file" id="Image" class="form-control text-end" id="Image" name="profile_image" style="direction: rtl;">
                    </div>
                </div><!-- Col -->

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">بارگذاری روزمه </label>
                      <input type="file"  class="form-control text-end" name="profile_image" style="direction: rtl;">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
    
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">نام </label>
                        <input type="text" class="form-control text-right" placeholder="نام  خود را وارد کنید ">
                    </div>
                </div><!-- Col -->

                   <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">حرفه  </label>
                        <input type="text" class="form-control text-right" placeholder="حرفه خود را وارد کنید  ">
                    </div>
                </div><!-- Col -->
     
            </div><!-- Row -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">لینک تویتر</label>
                        <input type="text" class="form-control text-right" placeholder=" لینک تویتر خود را وارد کنید  ">
                    </div>
                </div><!-- Col -->
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">لینک یوتیوب </label>
                        <input type="text" class="form-control text-right" autocomplete="off" placeholder="لینک یوتیوب وارد کنید  ">
                    </div>
                </div><!-- Col -->
                     <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">لینک دین </label>
                        <input type="text" class="form-control text-right" autocomplete="off" placeholder=" لینک دین خود را وارد کنید  ">
                    </div>
                </div><!-- Col -->


                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label"> گیت هاب </label>
                        <input type="text" class="form-control text-right" autocomplete="off" placeholder="لینک گیت هاب خود را وارد کنید  ">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->

         <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">تجربه کاری </label>
                        <input type="text" class="form-control text-right" placeholder="تجربه کاری ">
                    </div>
                </div><!-- Col -->
         
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label"> پروژهای انجام شده</label>
                        <input type="text" class="form-control text-right" autocomplete="off" placeholder="پروژهای انجام شده  ">
                    </div>
                </div><!-- Col -->

                 <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label"> رضایت مشتریان  </label>
                        <input type="text" class="form-control text-right" autocomplete="off" placeholder=" رضایت مشتریان ">
                    </div>
                </div><!-- Col -->

                   <div class="col-sm-12">
                    <div class="mb-3">
                        <label class="form-label"> توضیحات    </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  
                    </div>
                </div><!-- Col -->
                
         </div><!-- Row -->

         <button type="submit" class="btn btn-primary submit"> ویرایش </button>
        </form>

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
