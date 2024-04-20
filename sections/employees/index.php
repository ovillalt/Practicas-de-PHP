<?php
include_once ("../../templates/header.php");
?>
<h1>Lista de empleados</h1>
<div class="card">
    <div class="card-header">Empleados</div>
    <div class="card-body">
        <div
            class="table-responsive-sm"
        >
            <table
                class="table"
            >
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Osvaldo Villalobos</td>
                        <td>Imagen.jpeg</td>
                        <td>CV.pdf</td>
                        <td>Programador Jr.</td>
                        <td>10/08/2023</td>
                        <td>Carta CV | Editar | Eliminar </td>
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