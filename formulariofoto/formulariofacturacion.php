<?php

include("conexion.php");//Invocamos un archivo que conecta la base de datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
</head>
<body>
    <header>
        <center>Actualización de Clientes con PHP y MySQL</center>
    </header>
    <!--Aqui comienza el codigo de php-->
    <?php
        //Variables necesarias para buscar un registro
        $nito="";
        $nombre="";
        $direccion="";
        $telefono="";
        $fechaingreso="";
        $cupocredito="";
        $foto="";

        if(isset($_POST['btn1']))
        {
            //bus es buscar
            $btn=$_POST['btn1'];
            $nitoccbus=$_POST['txtnitoccbus'];
            if($btn=="Buscar")
            {
              $res= $MySQLiconexion->query("select * from tblcliente where nitocc='$nitoccbus'");  
              while($result=$res->fetch_array())
              {
                  $nitocc=$result[0];
                  $nombre=$result[1];
                  $direccion=$result[2];
                  $telefono=$result[3];
                  $fechaingreso=$result[4];
                  $cupocredito=$result[5];
                  $foto=$result[6];
              }
            }
            if($btn=="Guardar")
            {
                //Creando las variables que se neceistan para guardar la informacion
                $nitocc=$_POST['txtnitocc'];
                $nombre=$_POST['txtnombre'];
                $direccion=$_POST['txtdireccion'];
                $telefono=$_POST['txttelefono'];
                $fechaingreso=$_POST['txtfechaingreso'];
                $cupocredito=$_POST['txtcupocredito'];
                //Manejo de la foto, para guardarla
                $nombre_foto=$_FILES['foto']['name'];//Nombre de la foto
                $ruta=$_FILES['foto']['tmp_name'];//ruta del archivo
                $foto='fotos/'.$nombre_foto;//ruta y nombre del archivo
                copy($ruta,$foto);//Guardamos el archivo en una ruta especifica
                //Como comprabamos que ese Nit o la Cedula no se duplique
                $sqlbuscar="SELECT nitocc FROM tblcliente WHERE nitocc='$nitocc' ORDER BY nitocc";//Aqui tenemos los registros que estan en el campo NitoCc
                if($result=mysqli_query($MySQLiconexion,$sqlbuscar))
                {
                    $nroregistros=mysqli_num_rows($result);
                    if($nroregistros>0)
                    {
                        echo"<script>alert('El Nit o la Cedula ingresada ya existe!!!')</script>";
                    }
                    else
                    {
                        $SQL= $MySQLiconexion->query("insert into tblcliente (nitocc,nombre,direccion,telefono,fechaingreso,cupocredito,foto) values ('$nitocc','$nombre','$direccion','$telefono','$fechaingreso','$cupocredito','$foto') ");
                        if(!$SQL)
                        {
                            echo $MySQLiconexion->error;
                        }
                        else
                        {
                            echo "<script>alert('Se insertó correctamente')</script>";
                        }
                    }
                }
            }
            if($btn=="Actualizar"){
                $nitocc=$_POST['txtnitocc'];
                $nombre=$_POST['txtnombre'];
                $direccion=$_POST['txtdireccion'];
                $telefono=$_POST['txttelefono'];
                $fechaingreso=$_POST['txtfechaingreso'];
                $cupocredito=$_POST['txtcupocredito'];
                //manejo de la foto, para guardarla
                $nombre_foto=$_FILES['foto']['name'];//Nombre de la foto
                $ruta=$_FILES['foto']['tmp_name'];//ruta del archivo
                $foto='fotos/'.$nombre_foto;//ruta y nombre del archivo
                copy($ruta,$foto);
                $SQL = $MySQLiconexion->query("update tblcliente set nombre='$nombre', direccion='$direccion', telefono='$telefono', fechaingreso='$fechaingreso', cupocredito='$cupocredito', foto='$foto' where nitocc='$nitocc'");
                if(!$SQL)
                {
                    echo $MySQLiconexion->error;
                }
                else
                {
                    echo "<script>alert('Se actualizo correctamente el registro');</script>";
                }

            }
            // eliminar
            if($btn=="Eliminar")
            {
                $nitocc=$_POST['txtnitocc'];
                $SQL = $MySQLiconexion->query("delete from tblcliente where nitocc='$nitocc'");
            
            if(!$SQL)
            {
                echo $MySQLiconexion->error;
            }
            else{
                echo"<script>alert('Se elimino correctamente el registro');</script>";
            }
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data" name="fe">
        <center>
            <table border='0'>
                <tr>
                    <td>Buscar</td>
                    <td><input type="text" name="txtnitoccbus"></td>
                    <td><input type="submit" name="btn1" value="Buscar"></td>
                </tr>
            </table>
            <table border='0'>  
                <tr>
                    <td>Nit o Cedula</td>
                    <td><input type="number" name= "txtnitocc" value="<?php echo $nitocc ?>" id="Nuevo"></td>
                    
                </tr>
                <tr>
                    <td>Nombre del cliente</td>
                    <td><input type="text" name="txtnombre" value="<?php echo $nombre ?>"></td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="txtdireccion" value="<?php echo $direccion ?>"></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input type="tel" name="txttelefono" value="<?php echo $telefono ?>"></td>
                </tr>
                <tr>
                    <td>fechaingreso</td>
                    <td><input type="date" name="txtfechaingreso" value="<?php echo $fechaingreso ?>"></td>
                </tr>
                <tr>
                    <td>Cupo del credito</td>
                    <td><input type="number" name="txtcupocredito" value="<?php echo $cupocredito ?>"></td>
                </tr>
                <tr>
                    <td>Subir foto</td>
                    <td><input type="file" name="foto" id=""></td>
                </tr>
                <tr>
                    <td>Imagen</td>
                    <td><img src="<?php echo $foto ?>" alt="" width="50" height="50"></td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" value="Actualizar" name="btn1">
                        <input type="submit" value="Guardar" name="btn1">
                        <input type="submit" value="Eliminar" name="btn1">
                        
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" value="Listar" name="btn1">
                        <input type="reset" value="Borrar" name="btn1">
                        <input type="button" name="btn1" value="Nuevo"
                        onclick="document.getElementById('Nuevo').focus();">
                        

                     </td>
                </tr>


            </table>
        </center>
    </form>
    <?php

    if(isset($_POST['btn1'])){
        $btn = $_POST['btn1'];
        if($btn == 'Listar'){
            echo "
            <center>
            <table border = '2'>
            <tr>
            <th> Nit o Cedula</th>
            <th> Nombre del cliente </th>
            <th> Direccion </th>
            <th> Telefono </th>
            <th> Fecha de Ingreso </th>
            <th> cupo de credito </th>
            <th>Foto</th>
            </tr>
            ";
            $res=$MySQLiconexion->query("select * from tblcliente");
            while($result=$res->fetch_array()){
                $nitocc =$result[0];
                $nombre = $result[1];
                $direccion = $result[2];
                $telefono = $result[3];
                date_default_timezone_set('America/Bogotá');
                $fechaingreso=date("D-M-Y", strtotime($result[4]));
                $cupocredito = $result[5];
                $foto = $result[6];

                echo"
                <tr>
                    <td> $nitocc </td>
                    <td>$nombre </td>
                    <td>$direccion </td>
                    <td>$telefono </td>
                    <td>$fechaingreso </td>
                    <td> $cupocredito</td>
                    <td><img src='$foto' width='20%' heigth='20%'> </td>
                <tr/>
                ";
            }
            echo "";
        }
    }
    ?>
   
</body>
</html>