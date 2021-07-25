<?php
if (isset($_COOKIE['UnAño'])){
    echo "<h1>" . $_COOKIE['UnAño']. "</h1>";
 } else {
     echo "No existe la cookie";
  }