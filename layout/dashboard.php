<?php
$id = $user['id'];
$conn = new mysqli("localhost", "root", "", "shop_management");
$sql = "select name, quantity, price from items where user_id=$id";
$result = $conn->query($sql);
$name = [];

?>
<script>
    var quantity = [];
    var background = [];
    var hover = [];
    var label = [];
</script>
<?php

foreach ($result as $row) {
?>
    <script>
        quantity.push(<?php echo ($row['quantity'] * $row['price']) ?>);
        label.push("<?php echo $row['name'] ?>")


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




<!--   pie chart start-->

<div class="card bg-light mb-3 ml-5 shadow-lg  " style="max-width: 25rem; background-color:#F4FCD9; height:30rem;border-radius: 15px; ">
    <div class="card-body text-primary">
        <canvas id="pieChart" style="max-width: 500px;"></canvas>
    </div>
</div>
<!--   pie chart end-->
</div>

</div>

<script>
    //pie js start


    var num = quantity
    var bg = background
    var bgc = hover
    var label = label

    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
        type: 'pie',
        data: {
            labels: label,
            datasets: [{
                data: num,
                backgroundColor: bg,
                hoverBackgroundColor: bgc
            }]
        },
        options: {
            responsive: true
        }
    });
    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>

<script>
    const myChart = new Chart(
        document.getElementById('pieChart'),
        config
    );
</script>
<!-- pie end -->

<!-- random color generator start -->


<!-- random color generator end -->




<!--Main part end-->