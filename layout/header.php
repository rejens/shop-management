<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="js/node_modules/chart/dist/chart.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"> </script>


</head>

<body>

  <!---Head part start-->
  <div class="container-fluid ">

    <!--Nav bar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav navbar-right">
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <div class="d-flex justify-content-end">
              <img src="img/user_img.png" height="50px">
              <span class="m-2" id="user_name"><?php echo $user['name']; ?></span>
              <form method="get" action="index.php">
                <button type="submit" name="logout" class="btn btn-danger m-2">Logout</button>
              </form>
            </div>
          </div>
        </ul>
      </div>
    </nav>

    <!--Nav bar end--->
  </div>
  <!-- Head part end-->