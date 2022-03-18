<script>
    alert("i am in add item")
</script>
<?php


$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$conn = new mysqli("localhost", "root", "", "shop_management");

if ($conn->connect_error) {
    die("connection error");
}

//$sql = "insert into items (name,price,quantity) values ('$name','$price','$quantity')";

$sql = "insert into items (name,price,quantity) values ('rice',100,1000)";
$conn->query($sql);
