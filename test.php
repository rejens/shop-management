<?php
// if (isset($_POST['clickme'])) {
//     $file = $_FILES['files'];

//     $fileName = $file['name'];
//     $fileName = explode(".", $fileName);
//     $fileUrl = end($fileName);
//     $allowdedUrl = ["jpg", "jpeg", "png"];
//     $fileName = uniqid(true) . "." . $fileUrl;
//     $tempFileLocation = $file['tmp_name'];
//     $permFielLocation = "img/" . "$fileName";
//     echo "<br>";
//     move_uploaded_file($tempFileLocation, $permFielLocation);
//}
echo uniqid();
