<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset("assets/theme.css") }}">
  <title> register </title>
</head>

<body class="bg-light">

  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        <div class="card smooth-shadow-md">

          <div class="card-body p-6">
            <div class="mb-4">
                <h2>Register Here </h2>
                <p class="mb-6">Please enter your user information.</p>
                @isset($messsage)
                    <div style="color: red"> $message </div>
                @endisset

            </div>

            <form action="{{route("register")}}" method="POST">
                @csrf

              <div class="mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
              </div>

              <div class="mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
              </div>

              <div class="mb-3">
                <input type="email"  class="form-control" name="email" placeholder="Email address here" required>
              </div>

              <div class="mb-3">
                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
              </div>

              <div class="mb-3">
                <input type="password" id="confirm-password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
              </div>

              <div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-secondary">
                    Create Free Account
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="" class="fs-5">Already
                        member? Login </a>
                  </div>

                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
