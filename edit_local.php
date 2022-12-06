<?php
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM locales WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_local = $row['local_name'];
        $direccion_local = $row['local_address'];
    }
}

if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $local = $_POST['local'];
    $address = $_POST['address'];

    $query = "UPDATE locales SET local_name = '$local', local_address = '$address' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] =  'Local actualizado satisfactoriamente';
    $_SESSION['message_type'] = 'primary';
    header("Location: index.php");
}

?>

<?php
include("includes/header.php")
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_local.php?id=<?php
                echo $_GET['id'];
                ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="local" class="form-control" value="<?php echo $nombre_local?>" placeholder="Actualizar local">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" value="<?php echo $direccion_local?>"  placeholder="Actualizar dirección">
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar local
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include("includes/footer.php")
?>