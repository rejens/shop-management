    <!-- main -->
    <div class="col-10">
        <hr style="visibility: hidden;">

        <?php
        $count = 0;
        if (isset($_GET['pageName'])) {

            $directory = "layout";
            $pageNames = scandir($directory);
            $pageName = $_GET['pageName'];

            if (in_array($pageName . ".php", $pageNames)) {
                include("$directory/$pageName" . ".php");
            } else {
                echo "are you lost";
            }
        } else {
            include("layout/dashboard.php");
        }
        ?>
    </div>
    </div>

    <script>
        document.querySelector()
    </script>