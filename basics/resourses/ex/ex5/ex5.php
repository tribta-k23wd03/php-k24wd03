<?php
// Bài tập 5:
// - Viết chương trình:
// - Tạo một mảng kết hợp (associative array) lưu thông tin sinh viên gồm: id, name, year,
// scores (trong đó scores là một mảng con gồm các điểm UI, UX, JS).
// - Tính điểm trung bình của sinh viên và thêm vào mảng với key là avg.
// - In ra toàn bộ thông tin sinh viên dạng bảng (table), mỗi thông tin 1 dòng (gồm cả điểm
// trung bình).

$students = [
    [
        "id" => "STD0001",
        "name" => "Tiên Tiên",
        "year" => "2006",
        "scores" => [
            "UI" => "99",
            "UX" => "50",
            "JS" => "50",
        ]
    ],
    [
        "id" => "STD0002",
        "name" => "Mỹ Tiên",
        "year" => "2007",
        "scores" => [
            "UI" => "59",
            "UX" => "40",
            "JS" => "24",
        ]
    ],
    [
        "id" => "STD0003",
        "name" => "Tiên Nữ",
        "year" => "2008",
        "scores" => [
            "UI" => "99",
            "UX" => "69",
            "JS" => "49",
        ]
    ],
];

// NOTE: // Average Scores 

foreach ($students as $i => $student) {
    $total = array_sum($student["scores"]);
    $count = count($student["scores"]); // ??? 3
    // 1.23232323 = 2 => 1.23
    $avg = round($total / $count, 2);
    $students[$i]["avg"] = $avg;

    // echo $students[$i]["avg"] . "\n";
}
