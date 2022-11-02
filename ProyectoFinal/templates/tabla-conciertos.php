<?php

$query = "SELECT * FROM conciertos";
$resultadoConsulta = mysqli_query($db, $query);
?>
<table class="tabla table-responsive-md">
    <!-- table-responsive-md -->
    <thead>
        <th>Fecha</th>
        <th>Pais</th>
        <th>Lugar</th>
    </thead>
    <tbody>
        <!--Mostrar resultados -->
        <?php while ($concierto = mysqli_fetch_assoc($resultadoConsulta)) : ?>
            <tr class="tr">
                <td><?php echo $concierto['con_fecha'] ?></td>
                <td><?php echo $concierto['con_pais'] ?></td>
                <td><?php echo $concierto['con_lugar'] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>