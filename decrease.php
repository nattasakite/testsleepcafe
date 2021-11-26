<?php
    include('config.php');
    
    $stmt = "SELECT quantity FROM cart WHERE ID = '". $_POST["id"] ."'";
    $query = mysqli_query($objCon, $stmt);
    $product = mysqli_fetch_array($query);

    if($product['quantity'] > 1) {
        $sql = "UPDATE cart SET quantity=quantity-1 WHERE id='". $_POST["id"] ."'";
        $objQuery = mysqli_query($objCon, $sql);
        if ($objQuery) {
            echo $product['quantity'];
        } else {
            echo "ERROR";
            echo mysqli_error($objCon);
        }
    }

    mysqli_close($objCon);

    header("Location: cart.php");
    exit;

?>