<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <div>
        <h3>Hi <?php echo htmlspecialchars($_POST["name"]) ?> !!!</h3>
        <p>You are <?php echo $_POST["age"] ?> years old.</p>
    </div>
</body>
</html>