<?php
$user_id = $user['id'];
$conn = new mysqli("localhost", "root", "", "shop_management");
$sql = "select name, quantity, cp from items where user_id='$user_id'";
$result = $conn->query($sql);
$name = [];

// //add modal
// if (isset($_POST['saveAddModal'])) {
//     $name = $_POST['inputName'];
//     $cp = $_POST['inputCp'];
//     $sp = $_POST['inputSp'];
//     $quantity = $_POST['inputQuantity'];
//     $sql = "select '$name' from items where user_id='$user_id'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
// 
?>
<script>
    //             alert("item already exists in your inventory")
    //         
</script>
<?php
//     } else {
//         $sql = "insert into items (name,cp,sp,quantity,user_id) values ('$name','$cp','$sp','$quantity','$user_id')";
//         $conn->query($sql);
//     }
// }

// //edit modal
// if (isset($_POST['saveEditModal'])) {
//     $price = $_POST['editPrice'];
//     $name = $_POST['editName'];
//     $sql = "select * from items where name='$name' and user_id='$user_id'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $sql = "update items set sp='$price' where name='$name' and user_id='$user_id'";
//         $conn->query($sql);
//     } else {
//     
?>
<script>
    //             alert("sorry no such product in your inventory")
    //         
</script>
<?php
//     }
// }

// //delete modal
// if (isset($_POST['saveDeleteModal'])) {
//     $name = $_POST['deleteName'];
//     $sql = "select * from items where name='$name' and user_id='$user_id'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $sql = "delete from items where name='$name' and user_id='$user_id'";
//         $conn->query($sql);
//     } else {
//     
?>
<script>
    //             alert("sorry no such product in your inventory")
    //         
</script>
<?php
//     }
// }

// //restock modal
// if (isset($_POST['saveStockModal'])) {
//     $name = $_POST['stockName'];
//     $quantity = $_POST['stockQuantity'];
//     $sql = "select * from items where name='$name' and user_id='$user_id'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $q = $quantity;
//         $quantity += $row['quantity'];
//         $cp = $_POST['stockCp'];
//         $cp = ($row['cp'] * $q + $cp * $row['quantity']) / $quantity;
//         $sql = "update items set quantity='$quantity', cp='$cp' where name='$name' and user_id='$user_id'";
//         $conn->query($sql);
//     } else {
//     
?>
<script>
    //             alert("sorry no such product in your inventory")
    //         
</script>
<?php
//     }
// }

// //sold modal
// if (isset($_POST['saveSoldModal'])) {
//     $name = $_POST['soldName'];
//     $quant = $_POST['soldQuantity'];
//     $sql = "select * from items where name='$name' and user_id='$user_id'";
//     $result = $conn->query($sql);
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         $quantity = $row['quantity'] - $quant;

//         if ($quantity >= 0) {
//             $sql = "update items set quantity='$quantity' where name='$name' and user_id='$user_id'";
//             $conn->query($sql);

//             $cost = $row['cp'] * $_POST['soldQuantity'];
//             $sales = $row['sp'] * $_POST['soldQuantity'];
//             $pl = $sales - $cost;
//             $date = date("y/m/d");
//             $sql = "insert into pl (datee,name,quantity,pl,salesAmt,user_id) values ('$date','$name','$quant','$pl',$sales,'$user_id')";
//             $conn->query($sql);
//         } else {
//         
?>
<script>
    //                 alert("sorry not enough product in your inventory");
    //             
</script>
<?php
//         }
//     } else {
//         
?>
<script>
    //             alert("sorry no such product in your inventory")
    //         
</script>
<?php
//     }
//}
?>



<script>
    var quantity = [];
    var background = [];
    var hover = [];
    var label = [];
</script>
<?php
$totalInvestment = 0;

foreach ($result as $row) {
?>
    <script>
        <?php $investment = $row['quantity'] * $row['cp']; ?>
        quantity.push(<?php echo $investment ?>);
        label.push("<?php echo $row['name'] ?>")
        <?php $totalInvestment += $investment; ?>


        function getRandomColor() {

            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        background.push(getRandomColor())
        hover.push(getRandomColor())
    </script>
<?php
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <!--   pie chart start-->

            <div class="card bg-light mb-3 ml-0 shadow-lg " style="max-width: 20rem; background-color:#F4FCD9; height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="pieChart" style="max-width: 500px;"></canvas>
                    <br>
                    <div class="text-dark mt-5">total investment: <?php echo $totalInvestment; ?></div>
                </div>
            </div>
            <!--   pie chart end-->
        </div>

        <div class="col-lg-8 col-md-8">
            <!--   line chart start-->

            <div class="card bg-light mb-3 ml-0 shadow-lg " style="max-width: 45rem; background-color:#F4FCD9; height:30rem;border-radius: 15px; ">
                <div class="card-body text-primary">
                    <canvas id="lineChart" style="max-width: 60rem;max-height: 50rem"></canvas>
                </div>
            </div>
            <!--   pie chart end-->
        </div>

    </div>
</div>

</div>

</div>

<script>
    //pie js start
    var quantity = quantity
    var bg = background
    var bgc = hover
    var label = label


    var pieChart = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            labels: label,
            datasets: [{
                data: quantity,
                backgroundColor: bg,
                hoverBackgroundColor: bgc
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
<!-- pie end -->


<!-- line chart start-->
<script>
    var datee = [];
    var pl = [];
    <?php
    $sql = "select datee,sum(salesAmt) as 'group' from pl where user_id='$user_id' GROUP by datee";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
        datee.push('<?php echo $row['datee']; ?>')
        pl.push(<?php echo $row['group'] ?>)
    <?php
    }
    ?>
</script>

<script>
    let dateLabels = datee;
    let data = pl;

    var lineChart = document.getElementById("lineChart").getContext('2d');

    let gradient = lineChart.createLinearGradient(0, 0, 0, 400)
    gradient.addColorStop(0, "rgb(58,123,231,1");
    gradient.addColorStop(1, "rgb(0,210,255,0.3");

    var myLineChart = new Chart(lineChart, {
        type: 'line',
        data: {
            labels: dateLabels,
            datasets: [{
                data: data,
                hoverBackgroundColor: '#5B7DB1',
                label: 'sales',
                fill: true,
                backgroundColor: gradient,
                borderColor: "#5B7DB1",
                radius: 3,
                hoverRadius: 5,

            }]

        },
        options: {
            responsive: true,
            animations: {
                tension: {
                    duration: 500,
                    easing: 'linear',
                    from: 1,
                    to: 0,

                }
            },
        }
    });
</script>

<!-- line chart end-->
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


<!--Main part end-->