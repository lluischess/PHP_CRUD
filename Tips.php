<?php
#----------------------------------------------------------------------------------------------------------------------------------------------
# utilizar ? en caso contrario 
#isset = es nulo?
#empty = esta vacio?
# Ejemplo 1  despues del ? se pone la otra condicion
$action = isset($_POST['action']) ? $_POST['action'] : '';

# Ejemplo 2 
$campo = empty($_POST['action']) ?  $_POST['action'] : '';

#----------------------------------------------------------------------------------------------------------------------------------------------







































?>