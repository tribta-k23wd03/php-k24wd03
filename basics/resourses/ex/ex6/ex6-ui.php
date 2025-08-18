<?php
include "ex6.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6-Product List</title>
</head>

<body>
    <h2>Product List</h2>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['name'] ?></td>
                <td <?php if ($p['price'] > 1_000_000) echo 'style="background:yellow"'; ?>>
                    <?= number_format($p['price'], 0, ',', '.') ?>
                </td>
                <td><?= $p['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>