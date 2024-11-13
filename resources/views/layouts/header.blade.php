  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>
  </nav>
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <span class="brand-text brand-link" style="font-weight: bold; display: block; text-align: center;">School</span>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->user_type ==1)
          <li class="nav-item">
            <a href="{{ asset('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('admin/admin/list')}}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('admin/teacher/list')}}" class="nav-link @if(Request::segment(2) == 'teacher') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Teacher
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('admin/student/list')}}" class="nav-link @if(Request::segment(2) == 'student') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Student
              </p>
            </a>
          </li>
          @elseif(Auth::user()->user_type ==2)
          <li class="nav-item">
            <a href="{{ asset('teacher/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('teacher/teacher/list')}}" class="nav-link @if(Request::segment(2) == 'teacher') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Teacher
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('teacher/student/list')}}" class="nav-link @if(Request::segment(2) == 'student') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Student
              </p>
            </a>
          </li>
          @elseif(Auth::user()->user_type ==3)
          <li class="nav-item">
            <a href="{{ asset('student/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ asset('student/teacher/list')}}" class="nav-link @if(Request::segment(2) == 'teacher') active @endif">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Teacher
              </p>
            </a>
          </li>
          @endif
          
          <li class="nav-item">
            <a href="{{ asset('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                LogOut
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.navbar -->