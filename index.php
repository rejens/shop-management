<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location:login.php");
}
if (!isset($_SESSION['user'])) {
    header("Location:login.php");
}
$user = $_SESSION['user'];


include("layout/header.php");
include("layout/sidepart.php");
include("layout/main.php"); ?>

<?php
include("layout/footer.php");
