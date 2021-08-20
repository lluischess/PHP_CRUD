<?php

# INDEX 
# 1) Sesiones
# 2) Iniciar una sessión
# 3) Cerrar Sesione
# 4) Cookies
# 5) Cookie Basica
# 6) Cookie con Expiración
# 7) Mostrar Cookies
# 8) Borrar Cookies
# 9) Comprobar que la session no exista
# 10)
# 11)
# 12) 
# 13) 
# 14) 
# 15) 




#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Sesiones

# Que es: Almacenar y presistir datos del usuario mientras que esta en un sitio web hasta que cierra sesión o cierra el navegador.
# Una sessión puede almacenar muchos datos, que se almacenan en el servidor web.


#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Iniciar una sessión

# Iniciar sessión 
session_start();

# Variable local
$variable_normal = "Soy texto";

# Variable de sessión se puede usar en cualquier paguina del dominio
$_SESSION['variable_persistente'] = "Hola soy una sessión activa";

echo $variable_normal . "<br>";
echo $_SESSION['variable_persistente'];


#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Cerrar Sesione

session_destroy();

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Cookies

# Es un fichero que Guardan datos en el navegador del cliente y en el servidor web. Utiles para inicio de sesion o valores temporales de un usuario.

# Sintaxis
setcookie("nombreCookie","Valor en Texto", $Caducidad, $ruta, $dominio);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) Cookie Basica

setcookie("MiCookie","Cookie Basica");

#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) Cookie con Expiración

$micookie = setcookie("UnAño","Cookie 365 dias", time()+(60*60*24*365));
var_dump($micookie);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 7) Mostrar Cookies
?> <a href="ver_cookies.php">Ver cookies</a> <?php 

# $_COOKIE es un array associativo, variable super global y accesible desde cualquier php

if (isset($_COOKIE['UnAño'])){
    echo "<h1>" . $_COOKIE['UnAño']. "</h1>";
 } else {
     echo "No existe la cookie";
  }
#----------------------------------------------------------------------------------------------------------------------------------------------
# 8) Borrar Cookies
# Antes de borrar una cookie hay que caducar una cookie si no no se puede eliminar 

?> <a href="borrar_cookies.php">Ver cookies</a> <?php 

if (isset($_COOKIE['UnAño'])) {
    setcookie("UnAño",'',time()-100); # Caduca la cookie
    unset($_COOKIE['UnAño']);
 }
# despues redireccionar a otra paginan

header('Location:ver_cookies.php');

#----------------------------------------------------------------------------------------------------------------------------------------------
# 9) Comprobar que la session no exista

if (!isset($_SESSION)){
    session_start();
}