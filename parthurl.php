<?php
// 4 lệnh: include, include_one, require, require_once dùng để import file php khác vào php đang chạy 
// Cú pháp chung: include 'path_to_php_file' hoặc include("path_to_php_file")

// include: import file khác, nếu import lỗi => Các câu lệnh bên dưới vẫn chạy
// include_once: Import file khác, chỉ import 1 lần, nếu import lỗi => Các câu lệnh bên duới vẫn chạy
// require: import file khác, nếu import lỗi => Các câu lệnh bên dưới sẽ dừng
// require_once: Import file khác, chỉ import  1 lần, nếu import lỗi => Các câu lệnh bên dưới sẽ dừng

//1.path file
$path_file = __FILE__; // Vị trí folder nằm trên sever
echo $path_file. '<br/>';

// 2. path dir: Dẫn đến thư mục
$path_dir = __DIR__;
echo $path_dir. '<br/>';