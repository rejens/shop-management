<?php
if (isset($_POST['login'])) {
  $id = $_POST['id'];
  $company = $_POST['company'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", "root", "", "shop_management");
  if ($conn->connect_error) {
    die("Connection Error");
  }
  $sql = "select * from user WHERE id='$id' and company='$company'";
  $result = $conn->query($sql);
  if ($result) {
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user'] = $row;
        header("Location:index.php");
      } else
?>
      <script>
        alert("username and password not matched");
      </script>
    <?php
  } else {
    ?>
      <script>
        alert("username and password not matched");
      </script>

<?php

  }
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/all.css">
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body style="background-image: url('img/blur.webp') ; background-repeat: no-repeat;  background-size: 100%">
  <div class="card mb-3 bg-light shadow-lg" style="max-width: 540px; margin:0 auto;margin-top:3%">
    <div class="row g-0">
      <div class="col-md-4 col-sm bg-dark">
        <img src="img/vector-sign-of-user-icon.webp" class="img-fluid rounded-start mt-5 pt-3  img-responsive" style="border-radius: 5rem;" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title mb-4 mt-2 d-flex justify-content-center">Login </h5>
          <form method="post" action="login.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">user id</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid py-1 fa-id-card"></i></div>
                </div>
                <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">company name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid py-1 fa-building"></i></div>
                </div>
                <input type="text" name="company" class="form-control" id="exampleCompany" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa-solid py-1 fa-key"></i></div>
                </div>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
              </div>
            </div>

            <p class="text-center pt-3"><a class="text-oxblood" href="#">Forgot password?</a></p>

            <button type="submit" name="login" class="btn btn-dark" style="margin-left: 8rem;">Login</button>

            <p class="text-center pt-5">Don't have an account? <a class="text-oxblood" href="register.php">Sign up</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"> </script>
</body>

</html>