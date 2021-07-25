<?php
# Ejercicio 4: crear array con contenido de una tabla:
# ACCION AVENTURA DEPORTES
#  GTA    AVATAR    FIFA
# MAFIA   GODOF      PES
# PROTO   CRASH     GOLF

$tabla = array(
    'Accion' => array('GTA','Avatar','Fifa'),
    'Aventura' => array('Mafia','GODOF','PES'),
    'Deportes' => array('PROTO','Crash','GOLF')
);

$categorias = array_keys($tabla);

    ?>
    <table border="1">
        <tr>
            <?php foreach($categorias as $categoria): ?>
                <th><?=$categoria;?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <td><?php echo $tabla['Accion'][0]; ?></td>
            <td><?php echo $tabla['Aventura'][0]; ?></td>
            <td><?php echo $tabla['Deportes'][0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $tabla['Accion'][1]; ?></td>
            <td><?php echo $tabla['Aventura'][1]; ?></td>
            <td><?php echo $tabla['Deportes'][1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $tabla['Accion'][2]; ?></td>
            <td><?php echo $tabla['Aventura'][2]; ?></td>
            <td><?php echo $tabla['Deportes'][2]; ?></td>
        </tr>
    </table>