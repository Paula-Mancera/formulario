<?php
include_once('../config/config.php');
include('paciente.php');

$pt = new paciente();
$data = $pt ->getall();

if(isset($_GET['id']) && !empty($_GET['id'])){
   $remove=  $pt->DELETE($_GET['id']);
   if ($remove){
    header('location:' .ROOT. 'informacion-paciente/index.php');
   }else{
    $mensaje = '<div class= "alert alert-danger" role="alert">Error al elinimar </div>';
}
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php')?>
 
<div class="container">
 <h2 class= "text-center mb-2">Usuarios registrados</h2>
 <div class= "row">
  <?php    
        while ($pt = mysqli_fetch_object($data)) {
         $input = $pt->fechanacimiento;
           echo "<div class='col'>";
           echo "<div class='border border-info p-2'>";
           echo"<h5> <img src='".ROOT."/images/$pt->imgexamenes' width='50' height='50'/>
                 $pt->nombres $pt->apellidos 
               </h5>";
           echo "<p><b>eps:</b> $pt->eps <br>
                <b>Telefono:</b>  $pt->telefono
                </p>";
   
     echo "<div class='text-center'>
       <a class='btn btn-success' href='". ROOT ."/informacion-paciente/edit.php? id=$pt->id' > Modificar </a> -
        <a class='btn btn-danger' href='". ROOT ."/informacion-paciente/index.php? id=$pt->id' > Eliminar </a> ";
          
      echo "</div>";
     echo "</div>";
     echo "</div>";
}

 ?>
</div>
</div>
</body>
</html>