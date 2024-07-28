<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>imagen</th>
                    <th>Nombre</th>
                    <th>codigo de barra</th>
                    <th>cantidad</th>
                    <th>precio unitario</th>
                    <th>categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                    <td>
                        <?php if ($usuario['img']): ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($usuario['img']); ?>" alt="Imagen" width="100" height="100"/>
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['codigo_barra']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['cantidad']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['precio']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['categoria']); ?></td>
                    <td>
                        <!-- Aquí puedes agregar botones o enlaces para editar o eliminar -->
                        <a href="index.php?action=eliminar&id=<?= $usuario['id'] ?>" onclick="return confirm('¿Estás seguro de querer eliminar este usuario?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?> <!-- Fin del bucle PHP -->
            </tbody>
        </table>
        <a href="index.php?action=crear" class="btn btn-agregar">Agregar Nuevo producto</a>
    </div>
</body>
</html>