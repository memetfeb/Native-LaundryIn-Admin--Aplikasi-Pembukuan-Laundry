<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" class="form-control" placeholder="Password" required="required">
              <label for="Password">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a id="btnlogin" class="btn btn-primary btn-block" style="color: white">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
       https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/7.2.2/firebase-analytics.js"></script>
  <!-- <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-auth.js"></script>
   -->
  <script src="https://www.gstatic.com/firebasejs/3.1.0/firebase-database.js"></script>
  <script src="js/js-firebase.js"></script>
  <script src="js/auth.js"></script>
  <script type="text/javascript">
    document.getElementById("btnlogin").addEventListener("click", function(){
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      login(username, password);
    });
  </script>
</body>

</html>
