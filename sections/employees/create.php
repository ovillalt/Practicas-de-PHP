<?php
include_once ("../../templates/header.php");
?>
<h1>Empleados crear</h1>
<div class="card">
    <div class="card-header">Datos del empleado</div>
    <div class="card-body">
        <form action="" method="post" encytype="multipart/form-data">
            <div class="mb-3">
                <label for="primernombre" class="form-label">Primer nombre</label>
                <input type="text" class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId"
                    placeholder="Primer nombre" />
            </div>
            <div class="mb-3">
                <label for="segundonombre" class="form-label">Segundo nombre</label>
                <input type="text" class="form-control" name="segundonombre" id="segundonombre"
                    aria-describedby="helpId" placeholder="Segundo nombre" />
            </div>
            <div class="mb-3">
                <label for="primerapellido" class="form-label">Primer apellido</label>
                <input type="text" class="form-control" name="primerapellido" id="primerapellido"
                    aria-describedby="helpId" placeholder="Primer apellido" />
            </div>
            <div class="mb-3">
                <label for="segundoapellido" class="form-label">Segundo apellido</label>
                <input type="text" class="form-control" name="segundoapellido" id="segundoapellido"
                    aria-describedby="helpId" placeholder="Segundo apellido" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId"
                    placeholder="" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">CV(PDF):</label>
                <input type="file" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="" />
            </div>
            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto:</label>
                <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
                <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso"
                    aria-describedby="emailHelpId" placeholder="Fecha de ingreso" />
            </div>
            <button type="submit" class="btn btn-success">
                Agregar registro
            </button>
            <a name="cancelar" id="cancelar" class="btn btn-primary" href="index.php" role="button">Cancelar</a>



        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>




<?php
include_once ("../../templates/footer.php");
?>