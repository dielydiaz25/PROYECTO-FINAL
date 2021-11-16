<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Banking Welfare</title>
</head>
<body>
    <header>
        <div id="titulo">
            <h1>FORMULARIOS</h1>       
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="registro.php">Registro</a>
                </li>
                <li>
                    <a href="acercade.html">Acerca de</a>
                </li>
                <li>
                    <a href="contacto.html">Contacto</a>
                </li>
                <li>
                    <a href="cerrarSesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="view registro">
        <div class="flex-center">
            <a href="#scroll" class="btn"><h4>PRESTAMOS</h4></a>
        </div>
    </div>
    <main class="form">
        <form action="registro.php" method="post">
            <div class="container bg-light">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label><h5>Nombre del cliente</h5></label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <br>
                        <div class="form-group">
                            <label><h5>Fecha</h5></label>
                            <input type="date" class="form-control" name="fecha">
                        </div>
                        <br>
                        <div class="form-group">
                            <label><h5>Cantidad</h5></label>
                            <input type="number" class="form-control" name="telefono">
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="reset" value="Borrar" class="btn btn-primary">
                        <input type="submit" value="Registrar" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </main>
    <br>
    <br>
    <div class="forma">
        <table bgcolor="white">
            <tr>
                <td>
                    <p id="img"><img src="img/OIP.jpg" alt="IMG"/></p>
                    <h4>Formularios para...</h4>
                    <br>
                    <p><a href="registro.php">Agregar clientes</a></p>
                    <p><a href="pagosR.php">Pagos</a></p>
                    <p><a href="ventasR.php">Ventas</a></p>
                    <p><a href="inventarioR.php">Inventario</a></p>
                    <p><a href="prestamosR.php">Prestamos</a></p>  
                    <p><a href="agregarEmpleados.php">Agregar empleados</a></p>   
                    <br>  
                    <br>
                </td>
            </tr>
        </table>  
    </div>
    <footer>
        <br>
        <p>&copy; 2021 Derechos Reservados</p>
    </footer>
</body>
</html>