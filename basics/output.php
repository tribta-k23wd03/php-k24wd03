<?php
$item = $_POST['item'] ?? null;
if ($item !== null) {
    if (isset($_COOKIE["count"])) {
        $count = $_COOKIE["count"] + 1;
    } else {
        $count = 1;
    }
    setcookie("count", $count, time() + 5);
    setcookie("Cart[$count]", $item, time() + 5);

    echo "$item added!<br/>";
}

if (!empty($_COOKIE["Cart"])) {
    echo "Cart:<br/>";
    foreach ($_COOKIE["count"] as $i => $prod) {
        echo "Item $i: " . $prod . "<br/>";
    }
}
