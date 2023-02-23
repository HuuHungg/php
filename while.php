<!-- Vòng lặp while sẽ lặp với số lần không xác định trước. Có nghĩa là phải có điều kiện để thoát khỏi vòng lặp -->
<!-- Vòng lặp while sẽ bị treo nếu phần xử lý thoát vòng lặp bị sai hoặc không triệt để -->
<!-- Vòng lăp white có thể không chạy nếu không thoả mãn điều kiện -->

<?php 
// Biểu diễn vòng lặp for bằng vòng lặp while

$i = 1; //Gán giá trị ban đầu
while ($i<5) {
    echo 'Vòng lặp thứ: '.$i. '<br/>';
    $i++; // Xử lý điều kiện thoát vòng lặp 
}

// VD total
$n = 10;
$i = 1;
$total = 0; // Gia dinh = 0

while($i < $n) {
    $total += $i;
    $i++; 
}
echo 'Tong = ' .$total. '<br/>';

// VD2
$total = 0; //Giả định tổng = 0
$i = 2;
while(1/$i >= 0.0001) {
    $total += 1/$i;
    $i+=2;
}

echo 'Tổng = ' .$total;

echo '<br/>';
// Cũng giống như vòng lặp while vòng lặp do While sẽ lặp với số lần không xác định trước
// Vòng lặp while sẽ thực hiện các câu lệnh trước, rồi mới kiểm tra điều kiện dừng
// Vòng lặp while sẽ bị treo nếu không bao giờ thoẳ mã điều kiện dừng
// Vòng lặp do while luôn thực hiện ít nhất 1 câu lệnh (Kể cả không thoả mãn điều kiện)


$i = 1;
do {
     echo $i.'<br/>';
     $i++;
}while ($i <=5 );

// VD: Tính tổng S 

$total = 0;
$i = 2;
do {
    $total += 1/$i;
    $i+=2;

} while (1/$i >= 0.0001);
echo 'Tong = ' .$total. '<br/>';