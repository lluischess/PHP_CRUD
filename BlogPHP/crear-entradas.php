<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear entrada</h1>
	<p>
		Añadir nuevas entradas al blog.
	</p>
	<br />
	<form action="guardar-entrada.php" method="POST">
		<label for="titulo">Titulo de la Entrada:</label>
		<input type="text" name="titulo" />
		<?php echo isset($_SESSION['errores_entrada']) ? MostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

		<label for="desc">Descripción:</label>
		<input type="text" name="desc" />
		<?php echo isset($_SESSION['errores_entrada']) ? MostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

		<label for="categoria">Categoria</label>
		<select name="categoria">
			<?php $categorias = ObtenerCategorias($conexionDB);
			if (!empty($categorias)) :
				while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
					<option value="<?=$categoria['id']?>"><?=$categoria['fNombre']?></option>
			<?php endwhile;
			endif; ?>
			<?php echo isset($_SESSION['errores_entrada']) ? MostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
			<input type="submit" value="Guardar" />
	</form>
	<?php isset($_SESSION['errores']) ? LimpiarError() : ''; ?>

</div>
<!--fin principal-->

<?php require_once 'includes/footer.php'; ?>