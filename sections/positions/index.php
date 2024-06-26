<?php
include ("../../db.php");

if (isset($_GET['txtID'])) {

    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : '';
    $sentencia = $conection->prepare("DELETE FROM tbl_puestos WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    header("location:index.php");
}
$sentencia = $conection->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();
$lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($lista_tbl_puestos);
?>
<?php
include_once ("../../templates/header.php");
?>
<h1>Puestos</h1>
<div class="card">
    <div class="card-header"><a name="" id="" class="btn btn-primary" href="create.php" role="button">Agregar
            registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_tbl_puestos as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $registro['id']; ?></td>
                            <td><?php echo $registro['nombredelpuesto']; ?></td>
                            <td><input name="btneditar" id="btneditar" class="btn btn-success" type="button"
                                    value="Editar" />
                                || <a name="" id="" class="btn btn-danger"
                                    href="index.php?txtID=<?php echo $registro['id']; ?>" role="button">Eliminar</a>

                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>


<?php
include_once ("../../templates/footer.php");
?>