<?php
// break" Thoát khỏi vòng lặp chưa kết thúc
// Continue: Nhăy qua vòng lặp kế tiếp
// die và exit Dừng cả chương trình phía dưới
// Sự khác nhau giữa die và exit
// exit: Nguồn gốc từ ngôn ngữ lập trình C++
// die: Ngồn gốc từ ngôn ngữ lập trình Perl
// Thường dùng để debug 



for ($i = 1;$i <= 10; $i++) {
    echo $i. '<br/>';
    if($i == 5) {
        break; // Thoát khỏi vòng lặp khi thoả mãn điều kiện
    }
    
}

for ($i = 1; $i <= 10; $i++) {
    if($i==5) continue; // Bỏ qua vòng lặp
    echo $i. '<br/>';
}

// die('Ket thuc');

echo '<p>Học lập trình PHP</p>';
?>

<p>ITを勉強してる</p>