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
            <h1>REGISTRO DE DATOS</h1>       
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="registro.html">Registro</a>
                </li>
                <li>
                    <a href="tablas.html">Datos</a>
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
    <article>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>INE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM empleados";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> Nombre ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>INE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM clientes";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> Nombre ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td colspan=4>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clientes</th>
                        <th>Articulos</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM ventas";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> ID ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td colspan=4>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM pagos";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> Nombre ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td colspan=4>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Articulos</th>
                        <th>Existencia</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM inventario";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> ID ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td colspan=4>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $conecta=new Conexion();
                        $sql="SELECT * FROM prestamos";
                        $query=$conecta->prepare($sql);
                        $query -> execute();
                        $resultados=$query -> fetchAll(PDO::FETCH_OBJ);
                        if($query-> rowCount()>0){
                            foreach ($resultados as $item){
                                echo "<tr>
                                <td>". $item -> Nombre ."</td>
                                </tr>";
                            }
                            else{
                                echo "<tr><td colspan=4>No hay datos</td></tr>"
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </article>
    <footer>
        <br>
        <p>&copy; 2021 Derechos Reservados</p>
    </footer>
</body>
</html>