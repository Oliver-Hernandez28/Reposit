<?php
 include 'include/conecta.php;'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <h3 class="text-center">Registro de Usuario</h3>
</div>
<div class="row">
    <div class="card shadow">
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POPST"></form>
            <input type="text" name="Nombre"  placeholder="Nombre"  class="form-control" requerid>
            <input type="text" name="Apellidos" placeholder="Apellidos" class="form-control" requerid>
            <input type="tel" name="Telefono" placeholder="Telefono" class="form-control" requerid>
            <input type="email" name="Email" placeholder="Email" class="form-control" requerid>
            <input type="date" name="Fecha" class="form-control" requerid>
            <input type="password" name="Password" class="form-control" placeholder="Password" requerid>
            <input type="submit" name="Registro" Value="Registrar" class="btn btn-success btn-sm"> 
        </div>
    </div>
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>