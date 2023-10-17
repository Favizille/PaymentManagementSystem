<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
  <link rel="stylesheet" href="{{asset("assets1/css/styles.min.css")}}"/>
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
                    <h5>Sign Up</h5>
                </div>
                <form action=" {{ route("registration") }} " method="POST">
                    @csrf
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" required>
                    </div>
                    <div class="mb-4">
                      <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <a href="" ><button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-3 rounded-2">Sign Up</button></a>

                    <div class="d-flex align-items-center justify-content-center mb-3">
                      <a class="text-primary fw-bold ms-2" href="{{route("login")}}">Already have an account? SignIn</a>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
