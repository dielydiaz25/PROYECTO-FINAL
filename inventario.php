<? php
    $id = $_POST [ 'id' ];
    $articulo = $_POST [ 'articulo' ];
    $existencia = $_POST [ 'existencia' ];
    $precio = $_POST [ 'precio' ];

    include  'conexion.php';
    $conecta = new  conexión();
    $sql = "INSERT INTO empleados (Id, Articulo, Existencia, Precio) VALORES (: id,: articulo,: existencia,: precio)" ;
    $query = $ conecta -> prepare ( $ sql );
    $query -> bindParam (': id', $ id, PDO :: PARAM_STR);
    $query -> bindParam (': articulo', $ articulo, PDO :: PARAM_STR);
    $query -> bindParam (': existencia', $ existencia, PDO :: PARAM_STR);
    $query -> bindParam (': precio', $ precio, PDO :: PARAM_STR);
    $query -> execute ();
    $ultimoID = $conecta -> lastInsertId ();

    header ( "location: inventarioR.php? success = Registro exitoso" );
    exit ();
?>