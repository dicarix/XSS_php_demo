<?php
header("X-XSS-Protection: 0");
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
<form>
    <div class="row text-center">
        <div class="col-md-12">
            <span id="content"><?php echo 'Has escrito:'.$_GET['vulnerabilidad']; ?></span>
        </div>
    </div>
</form>
</body>
</html>