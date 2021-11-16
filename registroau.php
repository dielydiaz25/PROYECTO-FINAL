<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>REGISTRO</title>
</head>
<body>
    <div class="login-form"> 
        <center><h2>Registrar</h2></center>
        <form method="post" class="form-horizontal">
        
        <div class="form-group">
            <label class="col-sm-9 text-left">Usuario</label>
                <div class="col-sm-12">
                    <input type="text" name="usuario" class="form-control" placeholder="Ingrese usuario" />
                </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-9 text-left">Correo</label>
                <div class="col-sm-12">
                    <input type="text" name="correo" class="form-control" placeholder="Ingrese email" />
                </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-9 text-left">Contraseña</label>
                <div class="col-sm-12">
                    <input type="password" name="contraseña" class="form-control" placeholder="Ingrese contraseña" />
                </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-9 text-left">Seleccione tipo</label>
                <div class="col-sm-12">
                    <select class="form-control" name="rol">
                        <option value="" selected="selected"> - seleccione rol - </option>
                        <option value="admin">Administrador</option>
                        <option value="usuarios">Usuario</option>
                    </select>
                </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_register" class="btn btn-primary btn-block" value="Registro">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
            ¿Tienes una cuenta? <a href="login.php"><p class="text-info">Inicio de sesión</p></a> 
            </div>
        </div>
        
        </form>
        </div>
</body>
</html>