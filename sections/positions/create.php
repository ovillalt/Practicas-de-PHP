<?php include_once('../../db.php');
if ($_POST){
    //print_r($_POST);
    // Recogiendo datos del formulario (POST)
    $nombredelpuesto=(isset($_POST['nombredelpuesto'])?$_POST['nombredelpuesto']:'');
    // Sentencia para insertar los datos en la base de datos
    $sentencia=$conection->prepare("INSERT INTO tbl_puestos(id,nombredelpuesto) VALUES (null, :nombredelpuesto)");
    // Asignando los valores que vienen del método POST
    $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
    $sentencia->execute();
    header('location:index.php');
}
?>

<?php
include_once ("../../templates/header.php");
?>
<h1>Crear puestos</h1>
<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipar/form-data">
            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="nombredelpuesto" id="nombredelpuesto"
                    aria-describedby="helpId" placeholder="Nombre del puesto" />
            </div>
            <button type="submit" class="btn btn-success">
                Agregar
            </button>
            || <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>


        </form>

    </div>


    <div class="card-footer text-muted">Footer</div>
</div>






<?php
include_once ("../../templates/footer.php");
?>