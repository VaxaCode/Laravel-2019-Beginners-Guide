<!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">
        <!-- Logo -->
        <div class="pull-left">
      <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>
          <div class="logo-wrapper">
          <a class="logo" href="index.html"><h4>Laravel2019</h4></a>
          <a class="logo-alt" href="index.html"><h3>laravel2019</h3></a>
          </div>
        </div>
        <!-- END Logo -->
        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" title="Login" href="user-login.html">Login</a> <a class="btn btn-sm btn-primary" title="Register" href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="{{url('category/index')}}">Categories</a>  </li>
          <li> <a href="user-login.html">Post a Job</a> </li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <!-- END Navigation menu -->
      </div>
    </nav>
<!-- Site header -->
