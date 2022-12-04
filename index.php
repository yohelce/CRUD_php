<?php
include("db.php")
?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['message'] )){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Great!</strong> <?= $_SESSION['message'] ?>
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
    </div>
</div>

<?php include("includes/footer.php") ?>

