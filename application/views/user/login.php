<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css" integrity="sha256-4w9DunooKSr3MFXHXWyFER38WmPdm361bQS/2KUWZbU=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    .tag, .fa-people-carry{filter:drop-shadow(4px 2px 1px lightgrey)}
  </style>

</head>

<body class="bg-gradient-info" style="background-image: url('<?=base_url()?>assets/img/pattern.png'); background-repeat: all; background-size: auto;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">


      <div class="col-md-5 col-lg-4">

        <div class="col-xl-12 text-center mt-5">
          <i class="fas text-primary fa-people-carry fa-5x"></i>
          <!-- <i class="fas fa-archway fa-5x"></i> -->
          <p class="tag text-success text-dark">Coordination <i class="fas text-success fa-hands-helping"></i> Administration</p>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-2">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col">
                <div class="px-4 py-4 pb-0">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="">
                    <small  class="text-muted">User account</small >
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <small  class="text-muted">Password</small ><a class="float-right pt-1" href="forgot-password.html" style="font-size: 11px">Forgot Password?</a>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
       <!--              <a href="index.html" class="btn btn-success btn-user btn-block mt-5">
                      Login
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    
                  </div>
                </div>
                <a type="submit" class="bg-success shadow shadow-sm text-center text-light" style="display: block; height: 56px; cursor: pointer; line-height: 56px; font-size: 20px; width: 100%">Let's go..</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>assets/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
