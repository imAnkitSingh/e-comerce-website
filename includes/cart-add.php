<?php
require 'common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
   
    $query = "INSERT INTO users_item(`user-id`, `item-id`, status) VALUES('".$_SESSION['id']."', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   