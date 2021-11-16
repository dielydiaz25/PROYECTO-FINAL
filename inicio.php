<header id="cabecera">
    <!--parte estatca del formulario donde se inicia secion-->
    <div class="secion">
        <!--Formulario para iniciar sesion-->
        <form action="index.php" method="post" name="inicioSesion" align="right">
            <!--Enlace para registrarse-->
            <a href="" target="-blank" style="font-family: 'Montserrat Light', bold;font-size: 10px;text-shadow: 0px 0px 0px #aaa;  color:#686666;">Registrarse</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- &nbsp; Este codigo deja espacio sin salto de linea-->
            <a href="recuperarContraseña.html" target="-blank" style="font-family: 'Montserrat Light', bold;font-size: 10px;text-shadow: 0px 0px 0px #aaa; color:#686666;">¿Has olvidado tu contraseña?</a>&nbsp;&nbsp;&nbsp;
            <!-- campo para ingresar el email -->
            <br><input id="redondo" type="text" placeholder="Correo Electrónico" name="email" required>
            <!-- campo para ingresar la contraseña -->
            <input id="redondo" type="password" placeholder="Contraseña" name="contra" size="24" required>
            <!-- Boton para entrar-->
            &nbsp;&nbsp;<input id="enviar" name="boton" type="submit" src="boton entrar 1-01.png" width="45" height="35" onmouseover="sobre()" onmouseout="fuera()">
        </form>
    </div>
 </header>
 
<?php
 
if(isset($_POST['boton'])) {
 
    //MODIFICAR conexión a base de datos
    $conexion= mysqli_connect("localhost","root","","informacionplataforma");
 
    // verifica la conexion si es correcta o no
    if($conexion->connect_errno) {
         echo "error";
     }
 
    // MODIFICAR, consulta el correo y contraseña en la base de datos
 
    // aqui filtros anti-injection
    $email = $_POST['email'];
    $contra = $_POST['contra'];
 
 
 
    $consulta="select * from usuarios where email = '".$email."'";
 
 
    //guarda los datos de la variable conexion y la variable consulta
    $datos_query= mysqli_query($conexion,$consulta);
 
    // verifica si la información es correcta para iniciar sesión
 
 
        // guardo todos los datos de la consulta.
        if($datos= mysqli_fetch_array($datos_query)){
              if($contra==$datos['contrasenaAdmin']){
        // el correo se guarda en una variable de sesión para redirigirlo a la otra pagina
        $_SESSION["id"] = $datos["id"];
        $_SESSION['email']=$datos['email'];
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
        echo "<script>location.href='doctorprueba.php'</script>";
        // se redirige a la pagina asignada.
 
              }
        }
 
 
 
    $consulta2="select * from usuarios where email = '".$email."'";
    $datosQuery2=mysqli_query($conexion,$consulta2);
 
    if($dato=mysqli_fetch_array($consulta2)){
        if($contra==$dato['contrasena']){
 
            $_SESSION['id']=$dato['id'];
            $_SESSION['user']=$dato['user'];
            header("location:usuarioPrueba.php");
        }else{
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
            echo "<script>location.href='inicio.php'</script>";
        }
    }else{
 
            echo'<script>alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")';
            echo"<script>location.href='inicio.php'</script>";
    }
    }
?>
