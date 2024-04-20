<?php
include_once ("../../templates/header.php");
?>
<h1>Lista de usuarios</h1>
<div class="card">
    <div class="card-header"><a name="" id="" class="btn btn-primary" href="create.php" role="button">Agregar
            usuario</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Osvaldo Villalobos</td>
                        <td>***********</td>
                        <td>proyectos@osvaldovillalobos.com</td>
                        <td><input name="btneditar" id="btneditar" class="btn btn-success" type="button"
                                value="Editar" />
                            || <input name="btnborrar" id="btnborrar" class="btn btn-danger" type="button"
                                value="Borrar" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>


<?php
include_once("../../templates/footer.php");
?>