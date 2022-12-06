<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM locales WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Falló la consulta");
    }

    $_SESSION['message'] = 'Local removido satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    
    header("Location: index.php");
}
?>