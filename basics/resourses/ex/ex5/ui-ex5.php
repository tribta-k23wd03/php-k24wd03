<?php include "ex5.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Score List</title>
</head>

<body>
    <h2>Student Score List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>YOB</th>
            <th>UI</th>
            <th>UX</th>
            <th>JS</th>
            <th>AVG</th>
        </tr>
        <?php foreach ($students as $s): ?>
            <tr>
                <td><?= $s["id"] ?></td>
                <td><?= $s["name"] ?></td>
                <td><?= $s["year"] ?></td>
                <td><?= $s["scores"]["UI"] ?></td>
                <td><?= $s["scores"]["UX"] ?></td>
                <td><?= $s["scores"]["JS"] ?></td>
                <td><?= $s["avg"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>