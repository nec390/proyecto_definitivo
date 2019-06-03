<?php
  //conexion al servidor
  $conectar=mysql_connect('databases.000webhost.com','id9804684_dental','dental123');
  //verificar conexion con servidor
  if(!$conectar){
    echo "No se pudo conectar con el servidor";
  }else{
      $base=mysql_select_db('id9804684_dental');
      if (!$base) {
        echo "No se encontro la base de datos";
      }//else
    }//else
  //obtener variables
  $apellido=$_POST['apellido'];
  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];
  $fecha=$_POST['fecha'];
  //sentencia mysql
  $sql="INSERT INTO datoscita VALUES('$apellido',
                                  '$nombre',
                                  '$edad',
                                  '$telefono',
                                  '$email',
                                  '$fecha')";
  //ejecutar sentencia mysql
  $ejecutar=mysql_query($sql);
  //verificar la sentencia
  if (!$ejecutar) {
    echo "Hubo un error al ingresar los datos";
  }else{
    echo "Se cargaron<br><a href='index.html'>Volver a pagina de inicio</a>";
  }
?>
