<?php
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $company = $_POST['company'];
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_DEFAULT); // encrypting password

  $conn = new mysqli("localhost", "root", "", "shop_management");
  if ($conn->connect_error) {
    die("connection error");
  }

  $sql = "select * from user WHERE company='$company'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
?>
    <script>
      alert("company name already taken");
    </script>
    <?php
  } else {
    $sql = "insert into user (name,company, password) values ('$name','$company','$password') ";

    if ($conn->query($sql)) {
      $sql = "select * from user where name='$name' and company='$company'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $id = $row['id'];

    ?>
      <script src="js/jquery-3.6.0.min.js"></script>

      <script>
        $(function() {
          $("#dialog").dialog();
        });
        window.location.href = "login.php";
      </script>

<?php
    } else {
      die("connection error");
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
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
</head>


<body style="background-image: url('img/blur.webp') ; background-repeat: no-repeat;  background-size: 100%">
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">sign up</p>

                  <form class="mx-1 mx-md-4" method="post" action="register.php">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <div class="mb-2">
                          <label class="form-label" for="name">Your Name</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fas fa-user py-1 "></i></div>
                            </div>
                            <input type="text" name="name" class="form-control" id="name" required />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <div class="mb-3">
                          <label class="form-label" for="company">company name</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"> <i class="fa-solid fa-building fa-lg py-1 "></i>
                              </div>
                            </div>
                            <input type="text" name="company" id="company" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <div class="mb-3">
                          <label class="form-label" for="password">Password</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"> <i class="fas fa-lock fa-lg "></i>
                              </div>
                            </div>
                            <input type="password" name=password name id="password" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="register" class="btn btn-dark btn-lg">Signup</button>
                    </div>

                  </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 ">

                  <img src="img/register.webp" class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Button trigger modal -->
  <div id="dialog" title="Basic dialog">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the &apos;x&apos; icon.</p>
  </div>



  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="fontawesome/js/all.js"> </script>



</body>

</html>