<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset("assets1/css/styles.min.css")}}" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <div class="text-center">
                    <h3 class="text-nowrap d-block pt-3"><b>POCKETPILL</b></h3>
                    <h5>Reset Password</h5>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if(count($errors) > 0)
                    @foreach( $errors->all() as $message )
                        <div class="alert alert-danger display-hide">
                        <span>{{ $message }}</span>
                        </div>
                    @endforeach
                @endif

                <form action="{{route('password.reset')}}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ request()-> email }}" readonly>
                  </div>

                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Enter Your New Password" required>
                  </div>

                  <div class="mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                  </div>

                  <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset("assets1/libs/jquery/dist/jquery.min.js")}}"></script>
  <script src="{{asset("assets1/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>
