<?php
require_once 'conexion.php';
session_start();
if(isset($_SESSION["admin_login"])) //Condicion admin
{
header("location: tablas.php"); 
}
if(isset($_SESSION["usuarios_login"])) //Condicion Usuarios
{
header("location: registro.php");
}

if(isset($_REQUEST['btn_login'])) 
{
$correo =$_REQUEST["correo"]; 
$contraseña =$_REQUEST["contraseña"]; 
$role =$_REQUEST["rol"]; 

if(empty($correo)){ 
$errorMsg[]="Por favor ingrese correo"; //Revisar email
}
else if(empty($contraseña)){
$errorMsg[]="Por favor ingrese contraseña"; //Revisar password vacio
}
else if(empty($rol)){
$errorMsg[]="Por favor seleccione rol "; //Revisar rol vacio
}
else if($correo AND $contraseña AND $rol)
{
try
{
$select_stmt=$db->prepare("SELECT correo,contraseña,rol FROM mainlogin
WHERE
correo=:ucorreo AND contraseña=:ucontraseña AND rol=:urol"); 
$select_stmt->bindParam(":ucorreo",$correo);
$select_stmt->bindParam(":ucontraseña",$contraseña);
$select_stmt->bindParam(":urol",$rol);
$select_stmt->execute(); //execute query

while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)) 
{
$correo =$row["correo"];
$contraseña =$row["contraseña"];
$rol =$row["rol"];
}
if($correo!=null AND $contraseña!=null AND $rol!=null) 
{
if($select_stmt->rowCount()>0)
{
if($correo==$correo and $contraseña==$contraseña and $rol==$rol)
{
switch($rol) //inicio de sesión de usuario base de roles
{
case "admin":
$_SESSION["admin_login"]=$correo; 
$loginMsg="Admin: Inicio sesión con éxito"; 
header("refresh:3;tablas.php"); 
break;

case "usuarios":
$_SESSION["usuarios_login"]=$correo; 
$loginMsg="Usuario: Inicio sesión con éxito"; 
header("refresh:3;registro.php"); 
break;

default:
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
catch(PDOException $e)
{
$e->getMessage();
} 
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
include("index.php");
?>