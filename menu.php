<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/styles1.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Roboto+Condensed:ital,wght@0,300;0,400;1,400&display=swap"
    rel="stylesheet">
<nav class="navbar navbar-expand-lg">

    <div class="container-fluid" ;>
      <a class="navbar-brand" href="#">
        <img src="../imagenes/logo proyecto.JPG" alt="" width="180" height="80" class="d-inline-block align-text-top">
        <!-- Initial Phonoaudiological Chart -->
      </a>
    </div>

    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Quienes somos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="../misionyvision.html">Misión y visión</a></li>
              <li><a class="dropdown-item" href="../instructivodeuso.html">Instructivo de uso</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../informacion-paciente/add.php">Initial chart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../experiencias.html">Experiencias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<section class="navbar navbar-expand  navbar-dark bg-dark  text-white mb-5">
    <ul class='navbar-nav'>
<li class="nav-item">
<a class="nav-link" href="<?php echo ROOT ?>/informacion-paciente/index.php">Nuestros Usuarios</a>
</li class="nav-item">
<a class="nav-link" href="<?= ROOT ?>/informacion-paciente/add.php">Registrar usuario</a>

</li>
    </ul>


</section>



</body>
</html>