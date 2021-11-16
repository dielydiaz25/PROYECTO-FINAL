<?php
session_start();
header("location:index.html");
// Destruye la sesion actual
session_destroy();
?>