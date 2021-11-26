<?php
    include('config.php');

    $sql = "DELETE FROM cart";
    $objQuery = mysqli_query($objCon, $sql);

    if (!$objQuery) {
        echo "ERROR";
        echo mysqli_error($objCon);
    }

    header("Location: welcome.html");
    exit;
?>