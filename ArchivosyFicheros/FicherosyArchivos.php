<?php

# INDEX 
# 1) Abrir archivos txt leer y cerrar
# 2) Escribir en un archivo
# 3) Copiar y renombrar y eliminar ficheros
# 4) Comprobar si existe un fichero
# 5) Crear directorios con permisos completos
# 6) Borrar Directorios
# 7) Crear archivos en directorio
# 8) Cargar archivos servidor por formulario



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Abrir archivos txt

# fopen ( el archivo, maneras de abrir el archivo (Lectura"r")(Ejecución"x")(Escritura"w")(leer y escribir"a+") )

$archivo = fopen("archivo.txt","r");

# Leer archivo
while (!feof($archivo)){ // hasta que no termine el archivo da vueltas
    $contenido = fgets($archivo);
    echo $contenido . "<br>";
}

# cerrar archivo

fclose($archivo);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Escribir en un archivo

$archivo = fopen("archivo.txt","a+");
# Escribir en un archivo
fwrite($archivo,"Soy un nuevo texto");


#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Copiar y renombrar y eliminar ficheros

#Copiar
copy('archivo.txt','Copia_archivo.txt') or die("Error al copiar");

# Renombrar
rename('Copia_archivo.txt', 'w.txt');

# Eliminar
unlink('w.txt') or die('Error al borrar');

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Comprobar si existe un fichero

if (file_exists('archivo.txt')){
    echo "el archivo existe";
}

#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) Crear directorios con permisos completos

if (!is_dir("mi_carpeta")) {
    mkdir("mi_carpeta",0777) or die("No es posible crear la carpeta");
}else{
    echo "ya existe la carpeta";
}


#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) Borrar Directorios

rmdir("mi_carpeta");


#----------------------------------------------------------------------------------------------------------------------------------------------
# 7) Crear archivos en directorio


if ($gestor = opendir('./mi_carpeta')){ // abrir el directorio
    while (false !== ($archivo = readdir($gestor))) { // mientras haya archivos dentro del directorio que vaya leiendo
        if($archivo != '.' && $archivo != '..') {
            echo $archivo ."<br>";
        }
    }
}
#----------------------------------------------------------------------------------------------------------------------------------------------
# 8) Cargar archivos servidor por formulario

?>

<h1>Subir archivos con PHP</h1>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo"/>
    <input type="submit" name="enviar"/>
</form>


<?php

# Procesar en archivo upload.php

$archivo = $_FILES['archivo'];
$nom_archivo = $archivo['name'];
$type_archivo = $archivo['type'];

if ($type_archivo == "image/jpeg" || $type_archivo == "image/jpg" || $type_archivo == "image/png" ) {
    if (!is_dir('imagenes')){
        mkdir('imagen',0777);
    }

    move_uploaded_file($archivo['tmp_name'],'images/' . $nom_archivo);
    header("Refresh: 5, URL=testing.php");
    echo "<h1> Todo correcto </h1>";

}else{
    header("Refresh: 5, URL=testing.php");
    echo "<h1> Sube una imagen valida en jpg o png </h1>";
}

#----------------------------------------------------------------------------------------------------------------------------------------------
