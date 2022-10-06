<html>
<br> <br> <br> <p> <br> <br> <br> <br> <p>
<link rel="stylesheet" href="css/xd.css">
<table width="100%" border="1" cellspacing="0" cellspacing="10">
<tr>


<body background="imagenes/22.jpg"></body>

<table width="100%" border="1" cellspacing="0" cellspacing="0">
<body>
<font size="10" face="comic sans ms">
<marquee> <span id="highlight"> REGUISTRARSE. </marquee>
<script>

    var text = " "
    var speed = 80 //velocidad de movimiento


    if (document.all || document.getElementById ){
        document. write('<span id="highlight">' + text + '</span>')
        var storetext = document.getElementById ? document.getElementById("highlight") : document.all.highlight
    } else
    document.write(text)
var hex = new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r = 1
var g = 1
var b = 1
var seq = 1

function changetext(){
    rainbow = "#" + hex[r] + hex[g] + hex[b]
    storetext.style.color = rainbow
}

function change() {
    if (seq == 6) {
        b--
        if (b == 0)
            seq = 1
    }
    if (seq == 5) {
        r++
        if (r == 12)
            seq = 6
    }
    if (seq == 4) {
        g--
        if (g == 0)
            seq = 5
    }
    if (seq == 3) {
        b++
        if (b == 12)
            seq = 4
    }
    if (seq == 2) {
        r--
        if (r == 0)
            seq = 3
    }
    if (seq == 1) {
        g++
        if (g == 12)
            seq = 2
    }
    changetext()
}

function starteffect(){
    if (document.all || document.getElementById)
    flash = setInterval ("change()",speed)
}
starteffect()


</script>
</font
</td> </font> </table>
<form name="registro" method="post" action="validacion.php">
<table width="100%" border="1" cellspacing="0" cellspacing="0">
<tr>
<font size="+1" color="black" face="cursiva"> 
<p> <center>
Nombre del usuario:<input type="text" name="nombre" size="35" maxlength="100"> <br></br> 
Correo Eletronico: <input type="text" value="@" name="correo" size="40" maxlength="100"> <br> </br>
Contraseña: <input type="password" name="contra"/> <br></br>
Repetir contraseña: <input type="password" name="contra2"/> <br></br> 
Nombre: <input type="text" name="nombredos" size="35" maxlength="100"> <br></br> 
apellido: <input type="text" name="apellido" size="35" maxlength="100">     <br></br>    
<td><div align="center">
                    <input type="submit" value="enviar formulario">
                    </div></td>              
 </td> </font></center>