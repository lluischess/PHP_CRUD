<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$entrada_actual = conseguirEntrada($conexionDB, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1><?=$entrada_actual['fTitulo']?></h1>
	
	<a href="categoria.php?id=<?=$entrada_actual['fCategoria_id']?>">
		<h2><?=$entrada_actual['categoria']?></h2>
	</a>
	<h4><?=$entrada_actual['fFecha']?></h4>
	<p>
		<?=$entrada_actual['fDesc']?>
	</p>
	
	<?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['fUsuario_id']): ?>
		<br/>	
		<!-- <a href="editar-entrada.php?id" class="boton boton-verde">Editar entrada</a> -->

		<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="boton">Eliminar entrada</a>
	<?php endif; ?>
	
</div> <!--fin principal-->
			
<?php require_once 'includes/footer.php'; ?>