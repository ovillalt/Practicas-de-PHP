<?php
if($_SERVER["HTTP_HOST"]=="localhost"){
    $url="http://".$_SERVER["HTTP_HOST"]."/practicasphp/";
}else{
    $url="https://".$_SERVER["HTTP_HOST"]."/";
}
echo $url;
$url_base=$url;
?>
<!doctype html>
<html lang="es">
<head>
    <title>Practicas de PHP - Osvaldo José Villalobos Torres</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo $url_base; ?>" aria-current="page">Practicas PHP <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base; ?>sections/employees/">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base."sections/positions/"; ?>">Puestos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_base."sections/users/"; ?>">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cerrar sessión</a>
                </li>
            </ul>
        </nav>

    </header>
    <main class="container">
        <br/>