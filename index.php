<?php 
	$str = $_POST['contrasenna'];
	$palabra = $_POST['palabra'];
	$encriptada = $_POST['encriptacion'];

	if (md5($palabra) === $encriptada) {
	    $resultado = 'Son correctas';
	}else{
		$resultado = 'No son correctas';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MD5 - PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   	<div class="jumbotron text-center">
        <h1>Encriptacion de MD5</h1>
   	</div>
   	<form method="post" class="container">
	    <div class="col-sm-8 col-sm-offset-2 text-center">
	        <div class="form-group">
	            Palabra: <input type="text" name="contrasenna" class="form-control input-lg text-center" />
	   		</div>
	        <div class="form-group">
	           	<button class="btn btn-primary btn-lg" type="submit">Encriptar</button>
	        </div> 
	    </div>
   	</form>
   	<div class="col-lg-12 text-center">
        <p>
        	<strong>Palabra: </strong>
        	<?php
			echo ($str);
			?>
       	</p>
    </div>
    <div class="col-lg-12 text-center">
        <p>
        	<strong>Encriptacion con MD5: </strong>
        	<?php
			echo md5($str);
			?>
       	</p>
       	<p>Página para desencriptar MD5: <a href="http://www.md5online.org/md5-decrypt.html">LINK</a></p>
    </div>

    <div class="jumbotron text-center">
        <h1>Comparación de MD5</h1>
   	</div>

    <form method="post" class="container">
	    <div class="col-sm-8 col-sm-offset-2 text-center">
	        <div class="form-group">
	            Palabra: <input type="text" name="palabra" class="form-control input-lg text-center" />
	   		</div>
	   		<div class="form-group">
	            Encriptacion de MD5: <input type="text" name="encriptacion" class="form-control input-lg text-center" />
	   		</div>
	        <div class="form-group">
	           	<button class="btn btn-primary btn-lg" type="submit">Comparar</button>
	        </div> 
	    </div>
   	</form>

   	<div class="col-lg-12 text-center">
        <p>
        	<strong>Palabra: </strong>
        	<?php
			echo ($palabra);
			?>
       	</p>
       	<p>
        	<strong>Encriptacion: </strong>
        	<?php
			echo ($encriptada);
			?>
       	</p>
    </div>

   	<div class="col-lg-12 text-center">
        <p>
        	<strong>Resultado de comparación: </strong>
        	<?php
			echo $resultado;
			?>
       	</p>
    </div>
</body>
</html>
