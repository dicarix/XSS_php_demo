<?php
header("X-XSS-Protection: 0");
?>
<?php
$value = 'password123';
setcookie("ContrasenaDeAlgo", $value);
?>
<html>
<head>
    <title>XSS</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <?php include('bower_includes.html') ?>
</head>
<body>
<div class="row">
    <div class="jumbotron text-center">
        <h1>Seguridad informatica</h1>
        <h2>Ejemplo de XSS</h2>
    </div>
</div>
<form method="get" action="xss.php">
    <div class="row text-center">
        <div class="col-md-12">
            <input type="text" name="vulnerabilidad">
            <input type="submit" value="Enviar">
        </div>

    </div>
</form>
</body>
</html>