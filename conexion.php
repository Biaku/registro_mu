<?php
$host = "192.168.1.107";
$base_datos = "MuOnline";
$usuario = "sa";
$contrasena = "smtavo1991";


try {
    $pdo = new PDO('sqlsrv:Server=' . $host . ';Database=' . $base_datos . '', $usuario, $contrasena);
    #$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
function desconectar()
{
    global $pdo;
    $pdo = null;
}