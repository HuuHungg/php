<?php

$number = 0 ;
switch ($number) {
    case 1:
        echo 'Hôm nay là chủ nhật';
    break;
    case 2:
        echo 'Hôm nay là thứ hai';
    break;
    case 3:
        echo 'Hôm nay là thứ ba';
    break;
    case 4:
        echo 'Hôm nay là thứ tư';
    break;
    case 5:
        echo 'Hôm nay là thứ năm';
    break;
    case 6:
        echo 'Hôm nay là thứ sáu';
    break;
    case 7:
        echo 'Hôm nay là thứ bảy';
    break;
    default:
        echo 'Không hợp lệ';
    break;
}

echo '<br/>';
$month = 2;
$year = 2021;

switch ($month) {
    case 2:
        if($year % 4 == 0) {
            echo 'Tháng '.$month.' có 29 ngày';
        }else {
            echo 'Tháng '.$month.' có 28 ngày';
        }
    break;

    case 4:
    case 6:
    case 9:
    case 11: 
        echo 'Tháng '.$month.' có 31 ngày';       
    break;

default:
    echo 'Tháng '.$month.' có 31 ngày';
    break;
}