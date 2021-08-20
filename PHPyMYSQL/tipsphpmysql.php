<?php

# INDEX 
# 1) Conectar a MYsql desde php clasica
# 2) Consulta para configurar la codificación de caracteres
# 3) Mostrar datos
# 4) Insertar datos
# 5) Insertar usuario Nuevo
# 6) Tolerar comillas simples i dobles en consultas sql
# 7) Listar Entradas
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
# 5) Insertar usuario Nuevo

# Insert new user to DBB
$date = date('Y-m-d H:i:s');
$sql_insert = "INSERT INTO usuarios(fNombre,fApellidos,fEmail,fPassword,fFecha) VALUES('$name','$apellidos','$email','$password_segura', '$date')";
$guardar = mysqli_query($conexionDB,$sql_insert);



#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) Tolerar comillas simples i dobles en consultas sql

mysqli_real_escape_string($conecxionDB,$_POST['user']);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 7) Listar Entradas

function ObtenerEntradas($conexionDB){
    $sql_select = "SELECT * FROM entradas ORDER BY id ASC LIMIT 5";
    $entradas = mysqli_query($conexionDB,$sql_select);
    $resultado = array();

    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}

?>
<?php $entradas = ObtenerEntradas($conexionDB); ?>
        <div id="principal">
            <h1>Ultimas Entradas</h1>

            <?php while ($entrada = mysqli_fetch_assoc($entradas)): ?>
                <article class="entrada">
                    <h2><?=$entrada['fTitulo']?></h2>
                    <p><?=$entrada['fDesc']?></p>
                </article>
            <?php endwhile; ?>

        </div>

<?php


