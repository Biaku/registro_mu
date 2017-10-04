<?php
include_once 'conexion.php';
$usuario = $_POST['usuario'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$email = $_POST['email'];

if ($pass1 == $pass2) {
    $sql = "SELECT COUNT(*) FROM MEMB_INFO WHERE memb___id = ?";
    $query = $pdo->prepare($sql);
    $query->execute(array($usuario));

    if ($query->fetchColumn() > 0) {
        echo json_encode(array(false, "esta cuenta ya existe favor de elegir otra"));
    } else {
        $query = $pdo->prepare("
INSERT INTO MEMB_INFO (memb_name, memb___id, memb__pwd, sno__numb, mail_addr, bloc_code, ctl1_code, AccountLevel) 
VALUES (?, ?, ?, ?, ?, ?, ?,?)");
        $memb_name = "mu_chacho";
        $sno__numb = "0123456789";
        $mail_addr = "";
        $bloc_code = "0";
        $ctl1_code = "1";
        $accountlevel = 0;
        $query->bindParam(1, $memb_name);
        $query->bindParam(2, $usuario);
        $query->bindParam(3, $pass1);
        $query->bindParam(4, $sno__numb);
        $query->bindParam(5, $email);
        $query->bindParam(6, $bloc_code);
        $query->bindParam(7, $ctl1_code);
        $query->bindParam(8, $accountlevel);
        if ($query->execute()) {
            echo json_encode(array(true, "registro exitoso"));
        } else {
            echo json_encode(array(false, "algo salio al momento de registrar"));
        }
    }

} else {
    echo json_encode(array(false, "El password no coincide intentarlo de nuevo"));
}