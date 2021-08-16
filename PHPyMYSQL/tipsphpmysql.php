<?php

# INDEX 
# 1) Conectar a MYsql desde php clasica
# 2) Consulta para configurar la codificación de caracteres
# 3) Consulta para mostrar datos
# 4) 
# 5) 
# 6) 
# 7) 
# 8) 
# 9) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Conectar a MYsql desde php clasica

$conecxion = mysqli_connect("localhost","root","","phpmysql");

# comprobar conexion:

if(mysqli_connect_errno($conecxion)) {
    echo "la conexion a fallado" . mysqli_connect_errno($conecxion);
}else{
    echo "conexion realizada correctamente";
}


#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Consulta para configurar la codificación de caracteres

mysqli_query($conecxion,"SET NAMES ''Utf8");

#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Consulta para mostrar datos

$notas = mysqli_query($conecxion,"SELECT * FROM notas");

#$notas = mysqli_fetch_assoc($notas);

while($nota = mysqli_fetch_assoc($notas)) {
    var_dump($nota);
}