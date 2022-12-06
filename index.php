<?php
include("db.php")
?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'] )){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                    <strong>¡Perfecto!</strong> <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); }?>
            
            <div class="card card-body"> 
                <form action="save_local.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="local" class="form-control"
                        placeholder="Agregar local" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Agregar dirección">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_local" value="Save Local">  
                </form>
            </div>
        </div>

        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Clínica</th>
                            <th>Dirección</th>
                            <th>Creado el</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM locales";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php
                                    echo $row['local_name']
                                    ?></td>
                                    <td><?php
                                    echo $row['local_address']
                                    ?></td>
                                    <td><?php
                                    echo $row['created_at']
                                    ?></td>
                                    <td>
                                        <a href="edit_local.php?id=<?php
                                        echo $row['id']
                                        ?>">
                                        Edit
                                        </a>
                                        <a href="delete_local.php?id=<?php
                                        echo $row['id']
                                        ?>">
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>

