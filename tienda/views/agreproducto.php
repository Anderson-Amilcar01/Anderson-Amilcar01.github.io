<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="asset/css/agregar.css">
</head>
<body>
    <h1>Agregar Producto</h1>
    <form action="index.php?action=crear" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="codigo_barra">Código de Barra:</label>
        <input type="text" id="codigo_barra" name="codigo_barra" required>

        <label for="img">Imagen:</label>
        <input type="file" id="img" name="img" accept="image/*" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required>

        <button type="submit">Agregar Producto</button>
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>