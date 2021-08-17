<?php

# INDEX 
# 1) Conectar a MYsql desde php clasica
# 2) Consulta para configurar la codificación de caracteres
# 3) Mostrar datos
# 4) Insertar datos
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
# 3) Mostrar datos

$notas = mysqli_query($conecxion,"SELECT * FROM notas");

#$notas = mysqli_fetch_assoc($notas);

while($nota = mysqli_fetch_assoc($notas)) {
    var_dump($nota);
    echo $nota['Titulo'] . "<br>";
    echo $nota['Descripcion']. "<br>";
    echo $nota['Color']. "<br>";

}

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Insertar datos

$insert_sql = "INSERT INTO notas(Titulo,Descripcion,Color) VALUES('Nota desde PHP','descripcion de la nota php', 'naranja')";

$insert = mysqli_query($conecxion,$insert_sql);

if($insert){
    echo "Datos insertados correctamente";
}else{
    echo "Error: " . mysqli_error($conecxion);
}

#----------------------------------------------------------------------------------------------------------------------------------------------





#----------------------------------------------------------------------------------------------------------------------------------------------




#----------------------------------------------------------------------------------------------------------------------------------------------
