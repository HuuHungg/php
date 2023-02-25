<?php
// Các hàm xử lý chuỗi

// 1.addcslashes($str, $char_list): Hàm này sẽ thêm dấu escape (\) phía trước những kí tự trong chuỗi $str mà ta liệt kê ở $char_list
$str = "Trung tam dao tao lap trinh Unicode";
$str2 = " I am studing English";
// Xử lý chuỗi
// 1. Thêm ký tự escape (\) vào trước các kí tự mong muốn
// addclashes ($str, $litsChar)
$str = addcslashes($str, 'Ult');
echo $str;

echo '<br/>';
$str2 = addcslashes($str2, 'E');
echo $str2;

echo '<br/>';

// 2. addslashes($str): Hàm này sẽ thêm escape(\) phía trước các ký tự ",', 

$str3 = "I am eat rice 'width' my family";
$str3 = addslashes($str3);
echo $str3;

echo '<br/>';


// 3. stripcslashes loại bỏ tất cả các ký tự có trong chuỗi
$str4 = "I am eat rice 'width' my family";
$str4 = addslashes($str4);

echo $str4;
echo '<br/>';
$str4 = stripcslashes($str4);
echo $str4;

echo '<br/>';
//4. Chuyển chuỗi thành mảng explode 
$str5 = "Trung tâm unicode";
$arr = explode (' ', $str5);

print_r($arr);


echo '<br/>';
// 5. Chuyển mảng thành chuỗi implode
$str6 = implode(' - ', $arr);
echo $str6;


