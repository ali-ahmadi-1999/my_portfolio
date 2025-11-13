

<@php
    
    $admin = App\Models\User::find(Auth::user()->id);


@endphp




	<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">

					<ul class="navbar-nav">


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
              </a>
       
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
       
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="{{ asset($admin->photo) }}" alt="پروفایل">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="{{ asset($admin->photo) }}" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">{{ $admin->username }}</p>
                    <p class="tx-12 text-muted">{{ $admin->email }}</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="{{ route('dashboard') }}" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>پروفایل</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="{{ route('admin.edit.profile') }}" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>ویرایش پروفایل</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>تغییر کاربر</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="{{ route('admin.logout') }}" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>خروج</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>


					</ul>
				</div>
			</nav>