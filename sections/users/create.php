<?php
include_once ("../../templates/header.php");
?>
<h1>Crear usuarios</h1>
<div class="card">
    <div class="card-header">Datos del usuario</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipar/form-data">
            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre del usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId"
                    placeholder="Nombre del usuario" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                    placeholder="Password" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId"
                    placeholder="abc@mail.com" />
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