<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conexion a la bd</title>
</head>
<body>
    <?php

        //PERMITE CONECTARSE CON EL SERVIDOR LOCAL MEDIANTE EL ROOT
        $cn=mysqli_connect('localhost', 'root', '');
        
        //SELECCIONA LA BASE DE DATOS DE LA CONEXION AL SERVIDOR LOCAL 
        $bd=mysqli_select_db($cn, "bdvehiculos");

        //VERIFICAR EL ESTADO DE LA CONEXION
        if(($cn==true) && ($bd==true)) {
            echo "Conexión Satisfactoria";
        
        }else{
            echo("error");

            //PERMITE CERRAR LA CONEXION
            mysqli_close($cn);
        }
    ?>

</body>
</html>

    

