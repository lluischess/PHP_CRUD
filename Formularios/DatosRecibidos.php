<?php

# 4 Recibir datos del formulario

if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    echo "<h2>" . $_POST['titulo'] . "</h2>";
    echo "<br>" . $_POST['descripcion'];
 }