<?php
// Bài tập 6:
// - Viết một file PHP hiển thị danh sách 3 sản phẩm (tên, giá, mô tả) theo bảng.
// - Sử dụng HTML và PHP lồng nhau, khai báo mảng sản phẩm bằng PHP, sinh bảng bằng vòng
// lặp.
// - Trong bảng, nếu giá sản phẩm trên 1 triệu, thì nền ô giá tiền đổi thành màu vàng (dùng
// thuộc tính inline style).
$products = [
    ['name' => 'Alienware Laptop 2025', 'price' => 500_000, 'description' => 'Ram 128Gbs'],
    ['name' => 'Alienware Laptop 2026', 'price' => 100_000_000, 'description' => 'Ram 256Gbs'],
    ['name' => 'Alienware Laptop 2027', 'price' => 2_000_000, 'description' => 'Ram 512Gbs']
];
