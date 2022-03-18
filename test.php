<?php



$ar = [1, 2, 3, 4, 5];
array_push($ar, 6);

?>


<script>
    <?php $a = json_encode($ar);

    ?>

    var number = [];

    for (var i = 0; i < <?php echo $a ?>.length; i++) {
        number.push(<?php echo $a ?>[i])
    }


    alert(number);
</script>