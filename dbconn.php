<html>
    <head>
        <title> Connect Database</title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"db_SD");

        //check connection
        if (mysqli_connect_errno()) {
            echo "Failed Connect To Database: ". mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>