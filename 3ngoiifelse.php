<?php

$number = 10;

// if ($number == 10) {
//     echo 'Bạn đủ tuổi';
// }else {
//     echo 'Bạn không đủ tuổi';

// }

// echo '<br/>';
// //1. Toán tử 3 ngôi
// // echo $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi';

// $printStr = $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi';
// var_dump($printStr);

// // Cú pháp
// // biểu thức điều kiện? kết quả đúng : kết quả sai
// // Lưu ý
// // Toán tử 3 ngôi phải gắn với 1 biểu thức (Gán, echo)
// // Luôn luôn phải có kết quả sai (nếu không muốn hiển thị thì để là false, null, '')

// $printStr = $number = 10 ? "Ban du tuoi" : null;
// echo $printStr;

// echo '<br/>';

// Cú pháp thay thế câu lệnh if

if($number == 10) {
    ?>
            <h3>Tiêu đề 1</h3>
            <h4>Tiêu đề 2</h4>
            <p> Nội dung đoạn văn </p>
    <?php 
}else {
    ?>
        <p> Không hợp lệ </p>
    <?php
}

// Cú pháp thay thế if

if($number == 10): 
?>
            <h3>Tiêu đề 3</h3>
            <h4>Tiêu đề 4</h4>
            <p> Nội dung đoạn văn </p>
<?php
else:
?>
    <p>Khong hop le</p>

<?php
endif;

