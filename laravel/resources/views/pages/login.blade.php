 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','PHS')}} | Log in</title>

        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <link href="{{asset('css/register.css')}}" rel="stylesheet">
        <!-- Fonts -->
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

           <style type="text/css">
            footer{
                position: fixed;
                 left: 0;
                 bottom: 0;
                 width: 100%;
            }
        </style>
      
    </head>
<body>
 {{-- <h1>Hello world!</h1>  --}}

 <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin">
             

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
             

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <a class="d-block text-center mt-2 small" href="/register">Don't have an account? Register here!</a>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  


@include('inc.footer')

</body>
</html>