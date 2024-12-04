<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die('Producto no encontrado');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    $query = "UPDATE productos SET nombre = :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':imagen', $imagen);

    if ($stmt->execute()) {
        header('Location: admin.html');
        exit;
    } else {
        echo "Error al actualizar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Editar Producto</h1>
    </header>
    <main>
        <form action="edit_product.php" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($product['nombre']) ?>" required>
            <br>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?= htmlspecialchars($product['precio']) ?>" required>
            <br>
            <label for="imagen">Imagen (nombre de archivo):</label>
            <input type="text" id="imagen" name="imagen" value="<?= htmlspecialchars($product['imagen']) ?>" required>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    </main>
</body>
</html>