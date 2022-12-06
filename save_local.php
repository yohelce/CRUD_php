<?php
include("db.php");

if (isset($_POST['save_local'])){
    $local = $_POST['local'];
    $address =  $_POST['address'];

    $query = "INSERT INTO locales(local_name, local_address) VALUES('$local', '$address')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] =  'Local grabado satisfactoriamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>
