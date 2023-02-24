<?php
// Chuỗi là gì?
// Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
$exStr = "Học lập trình PHP";
var_dump($exStr);
echo '<br/>';
$exStr = 'Học lập trình PHP';
var_dump($exStr);
echo '<br/>';
$exHtml = '<p> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgzGrcjSVZGqzsfggmfCklBXpqBSG":> Unicode </a> </p>';


const _EX_HTML = '<h3> Học lập trình PHP </h3>';
echo _EX_HTML;
echo '<br/>';


// Nguyên tắc làm việc với chuỗi

$exHtml = 'Trung tâm đào tạo "Unicode" Hà Nôi';
echo $exHtml;

echo '<br/>';
$exHtml = '<p> <a href="https://mail.google.com/mail/u/0/#inbox/FMfcgzGrcjSVZGqzsfggmfCklBXpqBSG":> Unicode </a> </p>';
echo $exHtml;
echo '<br/>';


// Nối chuỗi
// Để nối chuỗi trong PHP, chúng ta sẽ dùng dấu (.)

$selectHTML = '<select name="category">';
for ($i = 2000; $i <= 2023; $i++) {
    $selectHTML .= '<option value="'.$i.'" > Năm '.$i.' </option>';
}
$selectHTML .= '</select>';

echo $selectHTML;