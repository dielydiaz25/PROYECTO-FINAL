<?php
    $id = $_POST [ 'id' ];
    $cliente = $_POST [ 'cliente' ];
    $articulo = $_POST [ 'articulo' ];
    $cantidad = $_POST [ 'cantidad' ];
    $precio = $_POST [ 'precio' ];
    $total = $_POST [ 'total' ];

    include  'conexion.php' ;
    $conecta = new  conexión();
    $sql = "INSERT INTO empleados (Id, Cliente, Articulo, Cantidad, Precio, Total) VALORES (: id,: cliente,: articulo,: cantidad,: precio,: total)" ;
    $query = $conecta -> prepare ( $sql );
    $query -> bindParam (': id', $ id, PDO :: PARAM_STR);
    $query -> bindParam (': cliente', $ cliente, PDO :: PARAM_STR);
    $query -> bindParam (': articulo', $ articulo, PDO :: PARAM_STR);
    $query -> bindParam (': cantidad', $ cantidad, PDO :: PARAM_STR);
    $query -> bindParam (': precio', $ precio, PDO :: PARAM_STR);
    $query -> bindParam (': total', $ total, PDO :: PARAM_STR);
    $query -> execute ();
    $ultimoID = $ conecta -> lastInsertId ();

    header ( "location: ventasR.php? success = Registro exitoso" );
    exit ();
?>