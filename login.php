<?php include('path.php'); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="<?php echo BASE_URL . '/assets/signin.css'?>" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
}
.text-center {
    text-align: center !important;
}
body {
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="container py-3"> 
         <form action="login.php" method="post" class="form-signin">
  <img class="mb-4" src="<?php echo BASE_URL . '/assets/logo.png'?>" alt="" width="79" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
  <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?><br>

  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text"  class="form-control mb-3" placeholder="Username"  name="username" value="<?php echo $username; ?>" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password"  class="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login-btn">Login</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
</form>
</div>

</body>
</html>
