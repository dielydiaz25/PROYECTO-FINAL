<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <a href="index.html"><p class="text-info" align="right">Regresar al inicio</p></a> 
    <div class="login-form">
        <center><h2>Iniciar sesión</h2></center>
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-6 text-left">Correo</label>
                    <div class="col-sm-12">
                        <input type="text" name="correo" class="form-control" placeholder="Ingrese email" />
                    </div>
            </div>
        
        <div class="form-group">
            <label class="col-sm-6 text-left">Contraseña</label>
                <div class="col-sm-12">
                    <input type="password" name="contraseña" class="form-control" placeholder="Ingrese contraseña" />
                </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-6 text-left">Seleccionar rol</label>
                <div class="col-sm-12">
                    <select class="form-control" name="rol">
                        <option value="" selected="selected"> - selecccionar rol - </option>
                        <option value="admin">Administrador</option>
                        <option value="usuarios">Usuario</option>
                    </select>
                </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_login" class="btn btn-success btn-block" value="Iniciar Sesion">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
                ¿No tienes una cuenta? <a href="registroau.php"><p class="text-info">Registrar Cuenta</p></a> 
            </div>
        </div>         
        </form>  
    </div>
</body>
</html>