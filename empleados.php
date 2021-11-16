<?php
    $nombre = $_POST [ 'nombre' ];
    $fecha = $_POST [ 'fecha' ];
    $telefono = $_POST [ 'telefono' ];
    $direccion = $_POST [ 'direccion' ];
    $ine = $_POST [ 'ine' ];

    include  'conexion.php' ;
    $conecta = new  conexión ();
    $sql = "INSERT INTO empleados (Nombre, Fecha, Telefono, Dirección, Ine) VALORES (: nombre,: fecha,: telefono,: direccion,: ine)" ;
    $query = $conecta -> prepare ( $sql );
    $query -> bindParam (': nombre', $nombre, PDO :: PARAM_STR);
    $query -> bindParam (': apellido', $fecha, PDO :: PARAM_STR);
    $query -> bindParam (': telefono', $telefono, PDO :: PARAM_STR);
    $query -> bindParam (': direccion', $direccion, PDO :: PARAM_STR);
    $query -> bindParam (': ine' , $ine, PDO :: PARAM_STR );
    $query -> execute ();
    $ultimoID = $conecta -> lastInsertId ();

    header ( "location: agregarEmpleados.php? success = Registro exitoso" );
    exit ();
?>