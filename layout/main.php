<div class="col-10">
    <hr style="visibility: hidden;">



    <?php
    $count = 0;
    if (isset($_GET['pageName'])) {

        $directory = "layout";
        $pageNames = scandir($directory);
        $pageName = $_GET['pageName'];

        foreach ($pageNames as $page) {

            if ($page == $pageName . ".php") {
                include("$directory/$pageName" . ".php");
                $count += 1;
            }
        }
        if ($count != 1) {
            echo ("are you lost l");
        }
    } else {
        include("layout/dashboard.php");
    }


    ?>


</div>