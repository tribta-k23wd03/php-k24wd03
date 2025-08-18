<?php

/**
 * ==============================
 * EXAMPLE: Sử dụng Class Circle
 * để tính chu vi và diện tích 
 * hình tròn
 * ==============================
 */
include_once "./Circle.php";

$radius = 5;

$area = Circle::area;
$perimeter = Circle::perimeter;

echo "Bán kính: $radius";
echo "Chu vi: ", $area;
echo "Diện tích: ", $perimeter;
