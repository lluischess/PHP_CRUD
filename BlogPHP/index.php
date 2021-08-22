    <?php include "includes/header.php"; ?>
        
    <?php include "includes/sidebar.php"; ?>

    <?php $entradas = ObtenerUltimasEntradas($conexionDB); ?>
        <div id="principal">
            <h1>Ultimas Entradas</h1>
            <?php if (!empty($entradas)): ?>
            <?php while ($entrada = mysqli_fetch_assoc($entradas)): ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?=$entrada['id']?>">
                        <h2><?=$entrada['fTitulo']?></h2>
                    </a>
                    <span class="fecha"><?=$entrada['categoria']. " | " . $entrada['fFecha']?></span>
                    <p><?=substr($entrada['fDesc'],0,200). "..."?></p>
                </article>
            <?php endwhile; 
                  endif; ?>


        </div>

    </div>
    
    <?php include "includes/footer.php"; ?>
