<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro Mu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Mu Online</h1>
            <h1>Registro de usarios</h1>
            <form method="post">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="pass1" required>
                </div>
                <div class="form-group">
                    <label>Repetir contraseña</label>
                    <input type="password" class="form-control" name="pass2" required>
                </div>
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <button type="submit" class="btn btn-success">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.min.js"></script>
<script src="js/registro_ajax.js"></script>
</body>
</html>