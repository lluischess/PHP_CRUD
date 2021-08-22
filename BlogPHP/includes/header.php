<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "includes/conexion.php"; ?>
    <?php require_once "includes/helpers.php"; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>


<header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog Dinamico PHP
            </a>
        </div>

        <?php $categorias = ObtenerCategorias($conexionDB); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php if (!empty($categorias)): ?>
                    <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['fNombre']?></a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <div id="contenedor">