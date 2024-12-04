<?php
include 'db.php';

$query = "SELECT * FROM productos";
$stmt = $conn->query($query);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= htmlspecialchars($product['nombre']) ?></td>
            <td>$<?= number_format($product['precio'], 2) ?></td>
            <td>
                <a href="edit-product.php?id=<?= $product['id'] ?>">Editar</a>
              <