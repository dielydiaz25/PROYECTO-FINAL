<?php
    $nombre = $_POST [ 'nombre' ];
    $fecha = $_POST [ 'fecha' ];
    $cantidad = $_POST [ 'cantidad' ];

    include  'conexion.php';
    $conecta = new  conexión ();
    $sql = "INSERT INTO empleados (Nombre, Fecha, Cantidad) VALORES (: nombre,: fecha,: cantidad)" ;
    $query = $conecta -> prepare ( $sql );
    $query -> bindParam (': nombre', $ nombre, PDO :: PARAM_STR);
    $query -> bindParam (': fecha', $ fecha, PDO :: PARAM_STR);
    $query -> bindParam (': cantidad', $ cantidad, PDO :: PARAM_STR);
    $query -> execute ();
    $ultimoID = $conecta -> lastInsertId ();

    header ( "location: pagosR.php? success = Registro exitoso" );
    exit ();
?>