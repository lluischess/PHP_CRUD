<?php require_once 'includes/helpers.php'; ?>
<aside id="sidebar">
    <?php if (isset($_SESSION['usuario'])) : ?>
    <div id="usuario-logueado" class="bloque">
        <h3>Bienvenido <?=$_SESSION['usuario']['fNombre']. " " .$_SESSION['usuario']['fApellidos'] ?></h3>
        <h3><?=$_SESSION['usuario']['fEmail'] ?></h3>
        <a href="crear-entradas.php" class="boton boton-verde">Crear Entrada</a>
        <a href="crear-categoria.php" class="boton">Crear Categoria</a>
        <a href="misDatos.php" class="boton boton-naranja">Modificar Perfil</a>
        <a href="logout.php" class="boton boton-rojo">Cerrar Session</a>
    </div>
    <?php else: ?>
    <div id="login" class="bloque">
    <?php if (isset($_SESSION['errores']['login'])) : ?>
            <div class="alerta alerta-error">
                <?php echo $_SESSION['errores']['login']; ?>
            </div>
        <?php endif; ?>
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />
            <label for="pass">Password</label>
            <input type="password" name="pass" />

            <input type="submit" name="submitlogin" value="Entrar">
        </form>
    </div>
    

    <div id="register" class="block-aside">

        <?php if (isset($_SESSION['errores'])) : ?>
            <?php //echo var_dump($_SESSION['errores']);
            ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?php echo $_SESSION['completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class="alerta alerta-error">
                <?php echo $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>

        <h3>Registrate</h3>
        <form action="register.php" method="POST">
            <label for="nom">Nombre</label>
            <input type="text" name="nom" />
            <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
            <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'email') : ''; ?>
            <label for="pass">Password</label>
            <input type="password" name="pass" />
            <?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'password') : ''; ?>

            <input type="submit" name="submitregistro" value="Registrar">
        </form>
        <?php endif; ?>
        <?php isset($_SESSION['errores']) ? LimpiarError() : ''; ?>
    </div>
</aside>