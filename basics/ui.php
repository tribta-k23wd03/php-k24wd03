<?php require_once "./database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Pet Manager</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Age</th>
            <th>Introduce</th>
        </tr>
        <?php foreach ($pets as $pet): ?>
            <tr>
                <td><?= $pet->name ?></td>
                <td class="<?= $pet->getTypeClass() ?>">
                    <?= $pet->getType() ?>
                </td>
                <td><?= $pet->age ?></td>
                <td><?= $pet->introduce() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>