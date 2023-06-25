<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Transactions</title>
    <link rel="stylesheet" href="{{ asset("assets/vendors/mdi/css/materialdesignicons.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/flag-icon-css/css/flag-icon.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/css/vendor.bundle.base.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  </head>
  <body>
    <div class="container-scroller">
        <div class="card-body shadow">
            <a href="{{route("payment_site")}}"><button class="btn btn-secondary mb-4"> Previous Page</button></a>
            <h3 class="card-title">Transaction History</h3>
            <p class="card-description"> Here are all your payment histories:
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment )

                        <tr>
                        <td>{{$payment->created_at}}</td>
                        <td>{{$payment->purpose}}</td>
                        <td>NGN 77.99</td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
        </div>
    </div>
  </body>
</html>



