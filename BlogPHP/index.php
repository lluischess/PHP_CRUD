<!DOCTYPE html>
<html lang="en">
<head>
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

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php">
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <label for="pass">Password</label>
                    <input type="password" name="pass"/>

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="block-aside">
                <h3>Identificate</h3>
                <form action="register.php">
                    <label for="nom">Nombre</label>
                    <input type="text" name="nom"/>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos"/>
                    <label for="email">Email</label>
                    <input type="email" name="email"/>
                    <label for="pass">Password</label>
                    <input type="password" name="pass"/>

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>

        <div id="Caja-principal">
            <h1>Ultimas Entradas</h1>
            <article class="entrada">
                <h2>Titulo Entrada</h2>
                <p>Descripción</p>
            </article>
        </div>

    </div>
    
    <footer id="pie">
        <p>Desarrollado por Luis &copy 2021</p>
    </footer>
</body>
</html>