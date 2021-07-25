<?php

if (isset($_COOKIE['UnAño'])) {
    setcookie("UnAño",'',time()-100); # Caduca la cookie
    unset($_COOKIE['UnAño']);
 }
 header('Location:ver_cookies.php');