<?php
// function printStatus(string $status)
// {
//     switch ($status) {
//         case 'Pending':
//             echo "Đơn hàng đang chờ duyệt.\n";
//             break;
//         case 'Paid':
//             echo "Đơn hàng đã thanh toán.\n";
//             break;
//         case 'Cancelled':
//             echo "Đơn hàng đã hủy.\n";
//             break;
//     }
// }
// printStatus("PENDING");

enum OderStatus
{
    case Pending;
    case Paid;
    case Cancelled;
}

function printStatus(OderStatus $status)
{
    switch ($status) {
        case OderStatus::Pending:
            echo "Đơn hàng đang chờ duyệt.\n";
            break;
        case OderStatus::Paid:
            echo "Đơn hàng đã thanh toán.\n";
            break;
        case OderStatus::Cancelled:
            echo "Đơn hàng đã hủy.\n";
            break;
    }
}


$status = OderStatus::Pending;
printStatus($status);
