<html>
<body>
<head>
<title></title>
</head>
<?php
$mail =('cenalalex123@gmail.com');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$message = "
MENSAJE DE CONTACTO
Nombre:".$nombre."
Email: ".$email."
Mensaje:".$mensaje."
";
   (mail($mail,"NUEVO MENSAJE DE PRUEBA ",$message))
?>
  <script>alert("tu mensaje ha sido enviado");</script>
  <script type="text/javascript">
      window.local="index.html";
    </script>
 </body>
 </html> 