<?php 
include_once('../config/config.php');
include('../config/database.php');

class paciente{

public $conexion;

function __construct(){
    $db= new Database(); 
    $this->conexion = $db->connectToDatabase();
}

function save ($params){
$nombres = $params['nombres'];
$apellidos = $params['apellidos'];
$eps = $params['eps'];
$correo = $params['correo'];
$telefono = $params['telefono'];
$antecedentesimportantes = $params['antecedentesimportantes'];
$perfilcomunicativo = $params['perfilcomunicativo'];
$fechanacimiento = $params['fechanacimiento'];
$imgconsentimiento = $params['imgconsentimiento'];

$terapia = $params['terapia'];
$chartfono = $params['chartfono'];
$chartfisio = $params['chartfisio'];
$chartpsico = $params['chartpsico'];
$chartteo = $params['chartteo'];
$imgexamenes = $params['imgexamenes'];

$insert = "INSERT INTO informacion VALUES (NULL, '$nombres','$apellidos','$eps','$correo',$telefono,'$antecedentesimportantes','$perfilcomunicativo','$fechanacimiento', '$imgconsentimiento', '$terapia', '$chartfono', '$chartfisio', '$chartpsico', '$chartteo', '$imgexamenes')";
return mysqli_query($this->conexion, $insert);
}

function getall(){
$sql = "SELECT * from informacion ";
return mysqli_query($this->conexion, $sql);
}

function getone($id){
    $sql= "SELECT * from informacion WHERE id= $id";
    return mysqli_query($this->conexion, $sql);
}

function update ($params){
$nombres = $params['nombres'];
$apellidos = $params['apellidos'];
$eps = $params['eps'];
$correo = $params['correo'];
$telefono = $params['telefono'];
$antecedentesimportantes = $params['antecedentesimportantes'];
$perfilcomunicativo = $params['perfilcomunicativo'];
$fechanacimiento = $params['fechanacimiento'];
$imgconsentimiento = $params['imgconsentimiento'];

$terapia = $params['terapia'];
$chartfono = $params['chartfono'];
$chartfisio = $params['chartfisio'];
$chartpsico = $params['chartpsico'];
$chartteo = $params['chartteo'];
$imgexamenes = $params['imgexamenes'];
$id = $params["id"];

$UPDATE = " UPDATE informacion set nombres='$nombres', apellidos='$apellidos', eps='$eps',correo='$correo', telefono='$telefono', antecedentesimportantes='$antecedentesimportantes',perfilcomunicativo='$perfilcomunicativo',
fechanacimiento='$fechanacimiento', imgconsentimiento='$imgconsentimiento', terapia='$terapia', chartfono='$chartfono', chartfisio='$chartfisio', chartpsico='$chartfisio', chartteo='$chartteo',imgexamenes='$imgexamenes' WHERE id ='$id'";
return mysqli_query($this->conexion, $UPDATE);


}


function DELETE ($id){
   $DELETE = "DELETE FROM informacion WHERE  id = $id"; 
   return mysqli_query($this->conexion, $DELETE);

}

}

?>