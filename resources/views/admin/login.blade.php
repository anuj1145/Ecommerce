<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin login </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/admin_theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('public/admin_theme/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('public/admin_theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            @if($errors->any())
            <div class="alert alert-danger">
               @foreach($errors->all() as $error)
                 <li>{{$error}}
               @endforeach
            </div>
            @endif
            <form action="{{route('admin.makeLogin')}}" method="post" >
                @csrf
              <h1>Login Form</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="Enter your email" value="admin@gmail.com"  required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" value="admin@123" placeholder="Enter Password" required="" />
              </div>
              <div>
                <input type="submit" class="">
              </div>

            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
