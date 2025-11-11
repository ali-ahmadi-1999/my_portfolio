
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('../../../backend/assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('../../../backend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('../../../backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('../../../backend/assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('../../../backend/assets/images/favicon.png') }}" />
  <style>
    .auth-login-side-wrapper{
      background-image: url('../../../backend/assets/images/login.png');
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-login-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2">ام‌جی-<span>نمادی</span></a>
                   <h5 class="text-muted fw-normal mb-4">خوش آمدید! وارد حساب کاربری خود شوید.</h5>




                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                         </div>

                    @endif

                    <form method="POST" action="{{ route('login') }}" class="forms-sample">
                         @csrf
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">نام کاربری </label>
                        <input type="uesername" class="form-control" name="username" value="{{ old('username') }}" placeholder="نام کاربری ">
                   

                            @error('username')
                                    <span class="text-danger ">  {{ $message }}  </span>
                            @enderror
                        
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">رمز عبور </label>
                        <input type="text" class="form-control"  name="password" value="{{ old('password') }}"  autocomplete="current-password" placeholder="رمز عبور">
                      

                            @error('password')
                             <span class="text-danger ">  {{ $message }}  </span>
                            @enderror
                      
                      </div>
          
                      <div>
                    
                        <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                
                           وارد شدن 
                        </button>
                      </div>
                     <a href="{{ route('password.request') }}" class="d-block mt-3 text-muted" style="text-decoration: underline;">فراموشی رمز عبور</a>

                    </form>


                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('../../../backend/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('../../../backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('../../../backend/assets/js/template.jsbackend/') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>