<?php
$user_id = $user['id'];
$conn = new mysqli("localhost", "root", "", "shop_management");

//add modal
if (isset($_POST['saveAddModal'])) {
    $name = $_POST['inputName'];
    $cp = $_POST['inputCp'];
    $sp = $_POST['inputSp'];
    $quantity = $_POST['inputQuantity'];
    $sql = "insert into items (name,cp,sp,quantity,user_id) values ('$name','$cp','$sp','$quantity','$user_id')";
    $conn->query($sql);
}

//edit modal
if (isset($_POST['saveEditModal'])) {
    $price = $_POST['editPrice'];
    $name = $_POST['editName'];
    $sql = "update items set sp='$price' where name='$name'";
    $conn->query($sql);
}

//delete modal
if (isset($_POST['saveDeleteModal'])) {
    $name = $_POST['deleteName'];
    $sql = "delete from items where name='$name'";
    $conn->query($sql);
}

//restock modal
if (isset($_POST['saveStockModal'])) {
    $name = $_POST['stockName'];
    $quantity = $_POST['stockQuantity'];
    $sql = "select * from items where name='$name'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $q = $quantity;
    $quantity += $row['quantity'];
    $cp = $_POST['stockCp'];
    $cp = ($row['cp'] * $q + $cp * $row['quantity']) / $quantity;
    $sql = "update items set quantity='$quantity', cp='$cp' where name='$name'";
    $conn->query($sql);
}

//sold modal
if (isset($_POST['saveSoldModal'])) {
    $name = $_POST['soldName'];
    $quant = $_POST['soldQuantity'];
    $sql = "select * from items where name='$name'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $quantity = $row['quantity'] - $quant;
    $sql = "update items set quantity='$quantity' where name='$name';";
    $conn->query($sql);

    $cost = $row['cp'] * $_POST['soldQuantity'];
    $sales = $row['sp'] * $_POST['soldQuantity'];
    $pl = $sales - $cost;
    $date = date("y/m/d");
    $sql = "insert into pl (datee,name,quantity,pl,user_id) values ('$date','$name','$quant','$pl','$user_id')";
    $conn->query($sql);
}


$sql = "select * from items where user_id='$user_id'";
$result = $conn->query($sql);
?>


<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary" id="addButton">New</button>
    <button type='button' class='btn btn-secondary' id='editButton'>edit</button>
    <button type='button' class='btn btn-danger' id='deleteButton'> delete</button>
    <button type='button' class='btn btn-success' id='stockButton'>restock</button>
    <button type='button' class='btn btn-dark' id='soldButton'>sold</button>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">cp</th>
            <th scope="col">sp</th>
            <th scope="col">quantity</th>
        </tr>
    </thead>

    <?php
    foreach ($result as $row) {

        echo " <form method='post'> <tbody>
<tr>

    <td>" . $row['name'] . "</td>
    <td>" . $row['cp'] . "</td> 
    <td>" . $row['sp'] . "</td>
    <td>" . $row['quantity'] . "</td> 
</tr>

</tbody>

";
    }
    ?>
</table>




<script>
    $(".deleteButton").click(function() {
        <?php
        $id = $_GET['item_id'];
        ?>
        alert(<?php echo $id ?>)
    })
</script>


<!-- modal start -->
<?php
include("modals/addModal.php");
include("modals/editModal.php");
include("modals/stockModal.php");
include("modals/deleteModal.php");
include("modals/soldModal.php");
?>

<script>
    $('document').ready(function() {
        $("#addButton").click(function() {
            $("#addModal").modal("show")
        })
        $("#editButton").click(function() {
            $("#editModal").modal("show")
        })

        $("#deleteButton").click(function() {
            $("#deleteModal").modal("show")
        })

        $("#stockButton").click(function() {
            $("#stockModal").modal("show")
        })

        $("#soldButton").click(function() {
            $("#soldModal").modal("show")
        })
    })
</script>