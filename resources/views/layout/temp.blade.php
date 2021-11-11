<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Mangement System</title>

  @include('layout.link')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light">Student Mangement System</span>
    </a>
    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{route('student#profile')}}" class="nav-link">
              <i class="fas fa-user-circle"></i>
              <p>
                My Profile
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('student#subjects')}}" class="nav-link">
              <i class="fas fa-list"></i>
              <p>
                Subjects
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('student#classes')}}" class="nav-link">
                <i class="fab fa-buromobelexperte"></i>
              <p>
                Class
              </p>
            </a>
          </li>

         <li class="nav-item">
            <a href="{{route('student#teachers')}}" class="nav-link">
                <i class="fas fa-chalkboard-teacher"></i>
              <p>
                Teachers
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('student#students')}}" class="nav-link">
                <i class="fas fa-user-graduate"></i>
              <p>
               Students
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('student#schedule')}}" class="nav-link">
                <i class="fas fa-calendar-alt"></i>
              <p>
              Schedule
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>


@yield('contact')
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
@include('layout.js')
</body>
</html>
