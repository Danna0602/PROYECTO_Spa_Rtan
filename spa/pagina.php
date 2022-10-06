<?php
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
if ($usuario != "proyecto"){
    echo "el usuario es incorrecto";
    header('Location: error.php');
}
else if ($usuario == "proyecto")
if($contra != "12345")
{
    echo "la contraseña es incorrecta";
    header('Location: error.php');
}
else
{}
?>


 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/galeria.css">
<title> SPA RTAP </title>
</head>

<body>
    <section class="content">
    <h1 class="title"> - NOVEDADES -<h1> 
        <div class="container">   
        <div class="circle">
            <a href="#">
                <div class="image">
                    <img src="imagenes/25.jpg" alt="GYM">
</div>
                    <div class="info">
                      <h3>GYM</h3>
                        <p> <a href="nose.php"> Click Aqui </a> </p>
        </a> 
    </div>
</div> 

<div class="circle">
            <a href="#">
                <div class="image">
                    <img src="imagenes/26.jpg" alt="SPA">
</div>
                    <div class="info">
                      <h3>SPA</h3>  
                        <p> <a href="spa.php"> Click Aqui </a> </p>
        </a> 
    </div>
</div> 
</div>
</section>
</body>

</html>



   