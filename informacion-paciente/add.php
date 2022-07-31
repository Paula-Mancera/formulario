<?php
include_once('../config/config.php');
include('paciente.php');

if (isset($_POST) && !empty($_POST)){
$p = new paciente();

  if ($_FILES['imgconsentimiento']['name'] !== ''){
    $_POST['imgconsentimiento'] = saveImage1($_FILES);
  }

  if ($_FILES['imgexamenes']['name'] !== ''){
    $_POST['imgexamenes'] = saveImage2($_FILES);
  }

 $save = $p->save($_POST);
if($save){
 $mensaje = '<div class= " alert alert-success" role="alert">Usuario registrado </div>';
}else{$mensaje = '<div class= "alert alert-danger" role="alert">Error al registrar </div>';
}


}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php')?>
<div class="container">
   <?php 
   if(isset($mensaje)){
    echo $mensaje;
   }
   ?> 
    <h2 class="text-center nb-2">Registrar sesión</h2>    
<form method="post" enctype="multipart/form-data"><br><br> 

<div class="row mb-2 ">
<div class="col" style="padding-left: 5px">
    <input type= "text" name="nombres" id="nombres" placeholder="nombres del paciente" class="form-control"/>
</div>
<div class="col">
    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente" class="form-control"/>
</div>
</div>
<br>

<div class="row mb-2 col-lg-12">
<div class="col" style="padding-left: 5px">
    <input type="text" name="eps" id="eps" placeholder="eps del paciente" class="form-control"/>
</div>
<div class="col">
    <input type="email" name="correo" id="correo" placeholder="correo del paciente" class="form-control"/>
</div>
<div class="col col-lg-4">
    <input type="number" name="telefono" id="telefono" placeholder="telefono del paciente" class="form-control"/>
</div>
</div>
<br>
<div class="row mb-3 col-lg-12">
<div class="col"style="padding-left: 125px">
</div>
   <textarea id='antecedentesimportantes' name="antecedentesimportantes" placeholder="antecedentesimportantes del paciente" class="form-control"></textarea>
</div>
<div class="row mb-3 col-lg-12">
<div class="col">
</div>
   <textarea id='perfilcomunicativo' name="perfilcomunicativo" placeholder="perfilcomunicativo del paciente" class="form-control"></textarea>
</div>
</div>
</div>
<br>

<div class="row  mb-2 col-lg-11" >
<div class="col"style="padding-left: 125px" >
    <input type="date" name="fechanacimiento" id="fechanacimiento"  class="form-control"/>
</div>
<div class="col  ">
    <input type="file" name="imgconsentimiento" id="imgconsentimiento"  class="form-control"/>Consentimiento Informado
</div>
<div class="col col-lg-4">
    <input type="text" name="terapia" id="terapia" placeholder="terapia del paciente" class="form-control"/>
</div>
</div>
<br>
<div class="row mb-2 col-lg-11">
<div class="col"style="padding-left: 125px" >
    <textarea id='chartfono' name="chartfono" placeholder="chartfono del paciente" class="form-control"></textarea>
</div>   
 <div class="col">
    <textarea id='chartfisio' name="chartfisio" placeholder="chartfisio del paciente" class="form-control"></textarea>
</div> 
</div>
</div><br>

<div class="row mb-2 col-lg-11">
<div class="col" style="padding-left: 125px">
   <textarea id='chartpsico' name="chartpsico" placeholder="chartpsico del paciente" class="form-control"></textarea>
</div>
<div class="col">
   <textarea id='chartteo' name="chartteo" placeholder="chartteo del paciente" class="form-control"></textarea>
</div><br><br>

</div>


<div class="row mb-3 col-lg-8">
<div class="col" style="padding-left: 500px">
    <input type="file" name="imgexamenes" id="imgexamenes" class="form-control"/>Examenes Medicos
</div><br><br>
</div>
<div class= "col" style="padding-left: 225px"> 
<button class="col-lg-9 btn btn-success" >Registrar</button>
</div><br><br><br>
</form>
</div>
</body>
</html>