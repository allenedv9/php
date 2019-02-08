<h1>Listado de Estudiantes</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
    </tr>
<?php foreach ($estudiante as $estu){ ?>
    <tr>
        <td><?php echo $estu['nombre'] ?></td>
        <td><?php echo $estu['apellido'] ?></td>
        <td><?php echo $estu['telefono'] ?></td>
        <td>
            <form action="index.php?id=<?php echo $estu['id_estudiante'] ?>" method="post">
                <input type="submit" value="Borrar" name="borrar">
                <input type="submit" value="Modificar" name="modificar">
            </form>
        </td>
    </tr>
<?php } ?>

</table>
