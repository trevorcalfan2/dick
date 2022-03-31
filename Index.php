<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    
</head>
<body>
    
    <!--FORMULARIO---->
    <form class="form"  id="api_form">
        
        <!--TITULO------------------------>
        <h1 class="titulo">Realizar Consulta</h1>
        
        <!--CAJAS-DE-ENTRADA-DE-DATOS------------------------------------------------>
        <input class="cajas" type="text" placeholder="DNI" required maxlength="8" name="dni" id ="dni">
        
        
        <!--BOTON-DE-CONSULTAR-------------------------->
        <center>
	<button  class="btng" value="Consultar" id ="consultar">Consultar</button>
    
        </center>
        
    </form>
    <div class = "container">
        <table class="table" style="margin-top: 30px;margin-left: auto;margin-right: auto; " >
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" >DNI</th>
                        <th scope="col">Nombre</th>
			<th scope="col">Apellido Paterno</th>
                        <th scope="col" >Apellido Materno</th>
                        

                    </tr>
                </thead>
                <tbody>
                <tr>                <td > <input type="text" readonly class="form-control-plaintext" id ="numeroDocumento"></input></td>
                                    <td > <input type="text" readonly class="form-control-plaintext" id ="nombres"></input></td>
                                    <td > <input type="text" readonly class="form-control-plaintext" id ="apellidoPaterno"></input></td>
                                    <td > <input type="text" readonly class="form-control-plaintext" id ="apellidoMaterno"></input></td>
                </tr>
                
                </tbody>
        </table>


       
    <div>


<script>
  $('#consultar').click(function(){
        dni=$('#dni').val();
        $.ajax({
           url:'controller.php',
           type:'post',
           data: 'dni='+dni,
           dataType:'json',
           success:function(r){
            if(r.numeroDocumento==dni){
                $('#numeroDocumento').val(r.numeroDocumento);
                $('#apellidoPaterno').val(r.apellidoPaterno);
                $('#apellidoMaterno').val(r.apellidoMaterno);
                $('#nombres').val(r.nombres);
            }else{
                alert(r.error);
            }
            console.log(r)
           }
        });
    });



    </script>
</body>
</html>