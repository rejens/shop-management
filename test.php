<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.0.min.js"></script>


</head>

<body>
    <select name="user" id="">
        <option value="admin">admin</option>
        <option value="doctor">doctor</option>
    </select>
</body>

<div class="doctor" style="visibility: hidden">doctor</div>
<div class="admin" style="visibility: hidden">admin</div>

<script>
    $("document").ready(function() {


        $("select").on("input", function() {
            let uservalue = $("select").val();
            alert(uservalue)

        })
    })
</script>


</html>