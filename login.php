<?php
if (isset($_POST['login'])) {
  $id = $_POST['id'];
  $company = $_POST['company'];
  $password = $_POST['password'];
  $conn = new mysqli("localhost", "root", "", "shop_management");
  if ($conn->connect_error) {
    die("Connection Error");
  }
  $sql = "select * from user WHERE id='$id' and company='$company' and password='$password';";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['user'] = $row;
    header("Location:index.php");
  } else {

?>
    <script>
      alert("username or password not matched")
    </script>

<?php


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
</head>

<body>
  <div class="card mb-3 shadow" style="max-width: 540px; margin:0 auto;margin-top:3%">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/vector-sign-of-user-icon.webp" class="img-fluid rounded-start mt-5 pt-3" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title mb-4 mt-2">Login </h5>
          <form method="post" action="login.php">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">user id</label>
              <input type="number" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">company name</label>
              <input type="text" name="company" class="form-control" id="exampleCompany" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>

            <p class="text-center pt-3"><a class="text-oxblood" href="#">Forgot password?</a></p>

            <button type="submit" name="login" class="btn btn-primary" style="margin-left: 8rem;">Login</button>

            <p class="text-center pt-5">Don't have an account? <a class="text-oxblood" href="register.php">Sign up</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="js/jquery=3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"> </script>
</body>

</html>