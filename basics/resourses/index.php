<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basics</title>
</head>

<body>
    <!-- <?php echo "Hi, I am PHP scripts!." ?> -->
    <!-- <?php phpinfo() ?> -->
     
    <?php if (str_contains($_SERVER['HTTP_USER_AGENT'], "Chrome")) { ?>

        <h1>"Chrome"</h1>

    <?php } else { ?>

        <h1>"NOT Chrome"</h1>
        
    <?php } ?>


</body>

</html>