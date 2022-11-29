<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>PPDB</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset ('assets/modules/bootstrap.min.css')}}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset ('assets/modules/all.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/components.css')}}">
    <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="feedback.css">
</head>

<body>
<header class="masthead">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="https://yt3.ggpht.com/ytc/AMLnZu9JW4gVnRwef3M2GbDxrfyO00bqDxawTFifLKcY=s900-c-k-c0x00ffffff-no-rj" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                  <div class="form-group">
                        <form action="/postregister" method="POST">
                            @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                  </div>
    
                    <div class="form-group">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" name="password">
                    </div>

                  <div class="form-group">
                    <div class="container"></div>                       
                        <a href="{{route('login')}}" class="nav-link">Sudah Memiliki Akun</a>
                    </div>
                  </div>

                  <!-- Tombol Submit -->
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>

                </form>
              </div>
            </div>
            <!-- Footer -->
            @include('template.footer')
          </div>
        </div>
      </div>
    </section>
  </div>
</header>

  <!-- General JS Scripts -->
  <script src="{{asset ('assets/modules-js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/popper.js')}}"></script>
    <script src="{{asset ('assets/modules-js/tooltip.js')}}"></script>
    <script src="{{asset ('assets/modules-js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/moment.min.js')}}"></script>
    <script src="{{asset ('assets/modules-js/stisla.js')}}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>