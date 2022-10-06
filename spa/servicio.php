<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title> Formulario de atencion  </title>
<meta name="viewport" content="width=divice-width, user-scalable=no,initial-scale=1.0,
maximum-scale=1.0, minimum-scale=1.0"></head>
<link rel="stylesheet" href="css/manchi.css">
</head>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title> Menu de navegacion con listas  </title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body> 
<img src="imagenes/SPA3.jpg "width="120" height="60" align="left">
    <ul class="menu">
        <li> <a href="km.php"> Inicio </a></li>
        <li> <a href="servicio.php"> Atencion al cliente </a></li>
        <li> <a href="acerca.php"> Acerca de  </a></li>
        <li> <a href="contac.php"> Contactos </a></li>
<body>
    <div class="contenedor">
        <form action="" class="form">
            <div class="form-header">
                <h1 class="form-title">C<span>ontacto</span></h1>
</div>
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

        <label for="direccion" class="form-label">Direccion:</label>
        <input type="text" class="form-input" id="direccion" placeholder="Escriba su direccion">

        <label for="correo" class="form-label">Correo Eletronico:</label>
        <input type="email" class="form-input" id="correo" placeholder="Escriba su correo">

        <label for="mensaje" class="form-label">Mensaje:</label>
        <textarea id="mensaje" class="form-textarea" placeholder="Escriba su mensaje">
</textarea>

        <input type="submit" class="btn-submit" value="ENVIAR">
</form>
