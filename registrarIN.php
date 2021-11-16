<?php
require_once "conexion.php";
if(isset($_REQUEST['btn_register'])) //compruebe el nombre del botón "btn_register" y configúrelo
{
$usuario = $_REQUEST['usuario']; 
$correo = $_REQUEST['correo']; 
$contraseña = $_REQUEST['contraseña']; 
$rol = $_REQUEST['rol']; 

if(empty($usuario)){
$errorMsg[]="Ingrese nombre de usuario"; //Compruebe input nombre de usuario no vacío
}
else if(empty($correo)){
$errorMsg[]="Ingrese email"; //Revisar email input no vacio
}
else if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
$errorMsg[]="Ingrese email valido"; //Verificar formato de email
}
else if(empty($contraseña)){
$errorMsg[]="Ingrese password"; //Revisar password vacio o nulo
}
else if(strlen($contraseña) < 6){
$errorMsg[] = "Password minimo 6 caracteres"; //Revisar password 6 caracteres
}
else if(empty($rol)){
$errorMsg[]="Seleccione rol"; //Revisar etiqueta select vacio
}
else
{ 
try
{ 
$select_stmt=$db->prepare("SELECT usuario, correo FROM mainlogin 
WHERE usuario=:uusuario OR correo=:ucorreo"); // consulta sql
$select_stmt->bindParam(":uusuario",$usuario); 
$select_stmt->bindParam(":ucorreo",$correo); //parámetros de enlace
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC); 
if($row["usuario"]==$username){
$errorMsg[]="Usuario ya existe"; //Verificar usuario existente
}
else if($row["correo"]==$email){
$errorMsg[]="Correo ya existe"; //Verificar email existente
}

else if(!isset($errorMsg))
{
$insert_stmt=$db->prepare("INSERT INTO mainlogin(usuario,correo,contraseña,rol) VALUES(:uusuario,:ucorreo,:ucontraseña,:urol)"); //Consulta sql de insertar 
$insert_stmt->bindParam(":uusuario",$usuario); 
$insert_stmt->bindParam(":ucorreo",$correo); //parámetros de enlace 
$insert_stmt->bindParam(":ucontraseña",$contraseña);
$insert_stmt->bindParam(":urol",$rol);

if($insert_stmt->execute())
{
$registerMsg="Registro exitoso: Esperar página de inicio de sesión"; //Ejecuta consultas 
header("refresh:2;index.php"); //Actualizar despues de 2 segundo a la portada
}
}
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}
}
include("index.php");
?>