<!Doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('/img/download.png') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/css/all.min.css') }}">

    <!-- Our style -->
    <link rel="stylesheet" href="{{ url('/css/navFooter.css') }}">
    <link rel="stylesheet" href="{{ url('/Admin/css/main.css') }}">

    @yield('styles')

</head>

<body>
    <!-- Start Content -->
    <div class="page-wrapper chiller-theme toggled">
        <a>
            <i id="show-sidebar" class="fas fa-bars btn btn-sm btn-dark"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="">
                        <img src="{{ url('/img/download.png') }}" style="width: 32px;" alt="" class=" ml-2 mr-2">
                        M T
                    </a>
                   
                </div>

                <div class="sidebar-header text-center">
                    <div class="user-pic" >
                        @php
                           
                        @endphp
                      
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
               <!--  <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        
                        <li class="header-menu">
                            <span>Conference</span>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-user-injured"></i>
                                <span>Search About Conf..</span>
                            </a>
                        </li>
                        <div class="sidebar-search"></div><!-- For Horizontal line -->
                        <li class="header-menu">
                            <span>General</span>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:;">
                                <i class="fas fa-plus text-success"></i>
                                <span>All</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('venues.index')}}">Venue</a>
                                    </li>
                                    <li>
                                        <a href="{{route('attendees.index')}}">Attendees</a>
                                    </li>
                                    <li>
                                        <a href="{{route('conferences.index')}}">Conferences</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="sidebar-dropdown">
                            <a href="javascript:;">
                                <i class="fas fa-plus text-success"></i>
                                <span>Add</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('venues.create')}}">Venue</a>
                                    </li>
                                    <li>
                                        <a href="{{route('attendees.create')}}">Attendees</a>
                                    </li>
                                    <li>
                                        <a href="{{route('conferences.create')}}">Conference</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:;">
                                <i class="fas fa-edit text-warning"></i>
                                <span>Update</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('venues.edit',['id'=> 1])}}">Venue</a>
                                    </li>
                                    <li>
                                        <a href="{{route('attendees.edit' ,['id'=> 1])}}">Attendees</a>
                                    </li>
                                    <li>
                                        <a href="{{route('conferences.edit',['id'=> 1])}}">Conference</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:;">
                                <i class="fas fa-edit text-warning"></i>
                                <span>Users</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('users.index')}}">Users</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="javascript:;">
                                <i class="fas fa-edit text-warning"></i>
                                <span>Roles</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="{{route('roles.index')}}">Roles</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <!-- <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a> -->
                <!-- <a href="#">
                    <i class="fa fa-power-off"></i>
                </a> -->
              
                <a href="javascript:;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                </a>

                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
        <!-- ----------------------------------------------- -->
        <!-- sidebar-wrapper  -->

        <main class="page-content">
            <div class="container-fluid">
                <!-- page-content" -->
                <!-- NarBar -->
                @yield('content')
            </div>
           
        </main>
        <!-- page-wrapper -->
        <!-- End Content -->

    </div>

    <script src="{{ url('/js/jquery-3.4.1.js') }}"></script>
    <script src="{{ url('/js/popper.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.js') }}"></script>
    <script src="{{ url('/Admin/js/main.js') }}"></script>
    <script src="{{ url('/js/navfooter.js') }}"></script>
   
    @yield('scripts')
</body>

</html>