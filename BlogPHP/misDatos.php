<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

<div id="principal">
    <h1>Mis Datos</h1>

    <?php if(isset($_SESSION['completado'])): ?>
		<div class="alerta alerta-exito">
			<?=$_SESSION['completado']?>
		</div>
	<?php elseif(isset($_SESSION['errores']['general'])): ?>
		<div class="alerta alerta-error">
			<?=$_SESSION['errores']['general']?>
		</div>
	<?php endif; ?>
		
	<form action="actualizar-usuario.php" method="POST"> 
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=$_SESSION['usuario']['fNombre']; ?>"/>
		<?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'nombre') : ''; ?>

		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" value="<?=$_SESSION['usuario']['fApellidos']; ?>"/>
		<?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

		<label for="email">Email</label>
		<input type="email" name="email" value="<?=$_SESSION['usuario']['fEmail']; ?>"/>
		<?php echo isset($_SESSION['errores']) ? MostrarError($_SESSION['errores'], 'email') : ''; ?>

		<input type="submit" name="submit" value="Actualizar" />
	</form>
	<?php LimpiarError(); ?>

</div>

<?php require_once 'includes/footer.php'; ?>