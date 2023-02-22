<?php

$startIndex = 1;
$endIndex = 10;

$resultEvent = null; //Số chẵn
$resultOdd = null; //Số lẻ

$eventCount = 0; //Đếm số chẵn
$oddCount = 0; //Đếm số lẻ

for ($index = $startIndex; $index <= $endIndex; $index++) {
    if($index % 2 == 0) {
        //echo $index. 'là số chẵn <br/>'
        $resultEvent.=$index.' ';
        $eventCount++;
    }else {
        //echo $index. 'Là số lẻ <br/>'
        $resultOdd.=$index.' ';
        $oddCount++;
    }
}


if ($eventCount > 0) {
    echo 'Tim thay '.$eventCount.' so chan: ' .$resultEvent. '<br/>';  
}else {
    echo 'Khong Tim Thay so chan <br/>';
}

if($oddCount > 0) {
    echo 'Tim thay '.$oddCount.' So le: ' .$resultOdd. '<br/>';
}else  {
    echo 'Khong tim thay so le <br/>';
}


// Bài 2 Tính giai thừa của 1 số và hiển thị kết quả

echo '<br/>';

$n = 10;
if($n>0) {
    //Xử lý tính giai thừa
    $result = 1; // Gia dinh = 1
    for($index = 1; $index <=$n; $index++) {
        $result*=$index;
    }
    echo $n.'!='.$result.'<br/>';
}else {
    echo $n.'Khong hop le <br/>';
}


// Bài 3 Kiểm tra một số có phải là số nguyên tố hay không và hiển thị kết quả
// Input: Số nguyên n
// Output: Thông báo số N có phải số nguyên tố hay không?
// Số nguyên tố:
// Lớn hơn 1
// Chỉ chia hết cho 1 và chính nó
// Giải thuật
// - Kiểm tra số N xem có lớn hơn 1 không
// - Nếu số N lớn hơn 1:
// + Dùng vòng lặp chạy từ 2 đến N-1
// + Kiểm tra trong phạm vi từ 2 đến N-1 có chia hế cho số nào không
// Nếu có chia hết => không phải số nguyên tố
// Nếu không chia hết => Kết luận là số nguyên tố
// Nếu số N nhỏ hơn hoặc bằng 1 => Thông báo không phải số nguyên tố

$n = 5; // Số cần kiểm tra
if($n > 1) {
    $check = true; // Gán cờ kiểm tra số nguyên tố (Giả định n là số nguyên tố)
    for($index = 2; $index < $n; $index++) {
        if($n % $index == 0) {
            $check = false;
        }
    }
    
    if($check) { //if ($chek==true)
        echo $n.' là số nguyên tố';
    }else {
        echo $n.' Không phải là số nguyên tố';
    }

}else {
    echo $n.'Khong phai la so nguyen to';
}

// Bài 4 In bảng cửu chương
?>
<table width= "100%" border="1" >
            <?php 
            for($i = 1; $i <=10; $i++) { 
                    if($i==1 || $i==6) {
                        echo '<tr>';
                    }

                    echo '<td>';
                    for ($j = 1; $j <= 10; $j++) {
                        echo $i.' x '.$j.' = '.$i*$j.' <br>';
                    }
                    echo '</td>';

                    if ($i==5 || $i==10) {
                        echo '</tr>';
                    }    
                }
            ?>
    </tr>
    </tr>
</table>

