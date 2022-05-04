<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="js/node_modules/chart/dist/chart.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"> </script>


</head>

<body>

  <!---Head part start-->

  <!--Nav bar start-->


  <!--Nav bar end--->

  <!-- Head part end-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Shop Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <img src="img/user_img.png" height="50px">
          </li>
          <li class="nav-item">
            <span class="m-2" id="user_name"><?php echo $user['name']; ?></span>
          </li>
          <li class="nav-item">
            <form method="get" action="index.php">
              <button type="submit" name="logout" class="btn btn-danger m-2">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>