<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location:login.php");
}
$user=$_SESSION['user'];
include("layout/header.php");
?>
<?php include("layout/sidepart.php");?>
?>
<div class="col-9">
    <h1>
        Profile
    </h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    <br><br>
</div>
<?php include("layout/footer.php");?>