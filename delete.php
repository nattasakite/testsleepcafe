<?php
    include('config.php');

    $sql = "DELETE FROM cart WHERE id='". $_POST["id"] ."'";
    $objQuery = mysqli_query($objCon, $sql);

    if (!$objQuery) {
        echo "ERROR";
        echo mysqli_error($objCon);
    }

    header("Location: cart.php");
    exit;
?>