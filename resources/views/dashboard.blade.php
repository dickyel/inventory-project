<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @stack('start-style')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @include('style.style')
    @stack('end-style')
    <title>@yield('title')</title>
</head>

<body>



<div class="screen-cover d-none d-xl-none"></div>

<div class="row">
    <div class="col-12 col-lg-3 col-navbar d-none d-xl-block">

        <aside class="sidebar">
            <a href="" class="sidebar-logo">
                <div class="d-flex justify-content-start align-items-center">
                    
                    <span>E-Dashboard</span>
                </div>

                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="./dashboard/assets/img/global/navbar-times.svg" alt="">
                </button>
            </a>

            <h5 class="sidebar-title">Main Menu</h5>

            <a href="{{ route('home') }}" class="sidebar-item {{ (request()->is('home')) ? 'active' : '' }}" onclick="toggleActive(this)">
                <!-- <img src="./assets/img/global/grid.svg" alt=""> -->

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                <span>Beranda</span>
            </a>

            <!-- <a href="./employees.html" class="sidebar-item"> -->
            <!-- <img src="./assets/img/global/users.svg" alt=""> -->
            <a href="{{ route('index-barang-masuks') }}" class="sidebar-item {{ (request()->is('/barang-masuks*')) ? 'active' : '' }}" onclick="toggleActive(this)">
                <!-- <img src="./assets/img/global/box.svg" alt=""> -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 16V8C20.9996 7.64927 20.9071 7.30481 20.7315 7.00116C20.556 6.69751 20.3037 6.44536 20 6.27L13 2.27C12.696 2.09446 12.3511 2.00205 12 2.00205C11.6489 2.00205 11.304 2.09446 11 2.27L4 6.27C3.69626 6.44536 3.44398 6.69751 3.26846 7.00116C3.09294 7.30481 3.00036 7.64927 3 8V16C3.00036 16.3507 3.09294 16.6952 3.26846 16.9988C3.44398 17.3025 3.69626 17.5546 4 17.73L11 21.73C11.304 21.9055 11.6489 21.9979 12 21.9979C12.3511 21.9979 12.696 21.9055 13 21.73L20 17.73C20.3037 17.5546 20.556 17.3025 20.7315 16.9988C20.9071 16.6952 20.9996 16.3507 21 16Z" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.27002 6.96L12 12.01L20.73 6.96" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 22.08V12" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                <span>Barang Masuk</span>
            </a>

            <a href="{{ route('index-barang-keluars') }}" class="sidebar-item {{ (request()->is('/barang-keluars*')) ? 'active' : '' }}" onclick="toggleActive(this)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7H4C2.89543 7 2 7.89543 2 9V19C2 20.1046 2.89543 21 4 21H20C21.1046 21 22 20.1046 22 19V9C22 7.89543 21.1046 7 20 7Z" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16 21V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H10C9.46957 3 8.96086 3.21071 8.58579 3.58579C8.21071 3.96086 8 4.46957 8 5V21" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                <span>Barang Keluar</span>
            </a>

            <a href="{{ route('index-users') }}" class="sidebar-item {{ (request()->is('/users')) ? 'active' : '' }}" onclick="toggleActive(this)">
                <!-- <img src="./assets/img/global/dollar-sign.svg" alt=""> -->
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 1V23" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                <span>Manage User</span>
            </a>

           
            <form action="{{ route('logout') }}" method="post" >
            @csrf
                <button type="submit" class="sidebar-item" >
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 17L21 12L16 7" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21 12H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>

        </aside>

    </div>


    <div class="col-12 col-xl-9">
        <div class="nav">
            <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                <div class="d-flex justify-content-start align-items-center">
                    <button id="toggle-navbar" onclick="toggleNavbar()">
                        <img src="./dashboard/assets/img/global/burger.svg" class="mb-2" alt="">
                    </button>
                    <h2 class="nav-title">Dashboard Administrator</h2>
                </div>
                
            </div>

            <ul class="d-flex justify-content-between align-items-center nav-input-container">
                    <span> Hi, {{ Auth::user()->nama_line }} </span><img
                    src="{{ Auth::user()->profile_photo_path ?? 'https://ui-avatars.com/api/?name=' . Auth::user()->nama_line }}"
                    alt=""
                    class="rounded-circle mr-5 profile-picture"
                    />
                    
            </ul>
           
        </div>
        
        @yield('content')
        
    </div>
</div>

    </div>

    @stack('start-script')
    @include('script.script')
    @stack('end-script')
</body>

</html>