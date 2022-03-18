<?php
$user_id = $user['id'];
$conn = new mysqli("localhost", "root", "", "shop_management");

//add modal
if (isset($_POST['saveAddModal'])) {
    $name = $_POST['inputName'];
    $price = $_POST['inputPrice'];
    $quantity = $_POST['inputQuantity'];
    $sql = "insert into items (name,price,quantity,user_id) values ('$name,'$price','$quantity','$user_id')";
    $conn->query($sql);
}

//edit modal
if (isset($_POST['saveEditModal'])) {
    $price = $_POST['editPrice'];
    $name = $_POST['editName'];
    $sql = "update items set price='$price' where name='$name'";
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
    $quantity += $row['quantity'];
    $sql = "update items set quantity='$quantity' where name='$name';";
    $conn->query($sql);
}




$conn = new mysqli("localhost", "root", "", "shop_management");
$sql = "select * from items where user_id='$user_id'";
$result = $conn->query($sql);
?>


<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary" id="addButton">New</button>
    <button type='button' class='btn btn-secondary' id='editButton'>edit</button>
    <button type='button' class='btn btn-danger' id='deleteButton'> delete</button>
    <button type='button' class='btn btn-success' id='stockButton'>restock</button>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
        </tr>
    </thead>

    <?php
    foreach ($result as $row) {
        $item_id = $row['id'];
        echo " <form method='post'> <tbody>
<tr>

    <td>" . $row['name'] . "</td>
    <td>" . $row['price'] . "</td>
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
    })
</script>