<?php
$user_id = $user['id'];
$conn = new mysqli("localhost", "root", "", "shop_management");
$sql = "select * from pl where user_id='$user_id'";
$result = $conn->query($sql);
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">date</th>
            <th scope="col">name</th>
            <th scope="col">quantity</th>
            <th scope="col">profit/loss</th>
            <th scope="col">sales</th>

        </tr>
    </thead>

    <?php
    foreach ($result as $row) {
        echo " <form method='post'> <tbody>
<tr>

<td>" . $row['datee'] . "</td>
<td>" . $row['name'] . "</td> 
<td>" . $row['quantity'] . "</td>
<td>" . $row['pl'] . "</td> 
<td>" . $row['salesAmt'] . "</td> 


</tr>

</tbody>

";
    }
    ?>
</table>