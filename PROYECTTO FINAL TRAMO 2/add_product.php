<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    $query = "INSERT INTO productos (nombre, precio, imagen) VALUES (:nombre, :precio, :imagen)";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':imagen', $imagen);

    if ($stmt->execute()) {
        header('Location: admin.html');
        exit;
    } else {
        echo "Error al agregar el producto.";
    }
}
?>