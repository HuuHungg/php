<?php
$number = 1;
$check = $number > 0;

// Cấu trúc if 
if($check) {
    echo $number. ' Là số nguyên dương';
}

// Cấu trúc if else
echo '<br/>';
$number = 0;
if($number > 0) {
    echo $number. ' Là số nguyên dương';
}else {
    echo $number. ' Không phải số nguyên dương';
}

// Kết hợp nhiều câu lệnh IF ELSE

echo '</br>';
$number = 15;

if($number < 0) {
    echo $number. ' là số âm ';
}elseif($number==0) {
    echo $number. ' là số không';
}elseif ($number > 0 && $number <=5) {
    echo $number. ' là số nho';
}elseif ($number > 5 && $number <=10) {
    echo $number. 'Là số trung bình';
}elseif ($number > 10 && $number <=15) {
    echo $number. 'Là số lớn';
}else {
    echo $number. 'là số cực lớn';
}

echo '<br/>';
//Cấu trúc if else lồng nhau
$number = 9;
if($number > 0) { // Điều kiện cha
    if($number>=5) { // Điều kiện con
        echo 'Thoa man dieu kien con'; 
    }else{
        echo 'Khong thoa man dieu kien con';
    }
}else {
    echo 'Không thoả mãn điều kiện cha';
}