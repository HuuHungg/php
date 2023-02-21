<!-- Toán tử và biểu thức trong PHP -->
<!-- Biểu thức tập hợp các toán tử và toán hạng -->
<!-- Toán tử: Các phép toán: công, trừ, nhân, chia, so sánh, lấy phần dư,... -->

<!-- Toán tử gán: =, +=, -=, *=, /=, %=, .= -->
<!-- Toán tử số học: +,-,*,/,%.**,++,-- -->
<!-- Toán tư só sánh: >,<,>=,<=,==,===,!= -->
<!-- Toán tử lý luận: &&, ||, !(Độ ưu tiên NOT => AND => OR) -->

<?php
// Toán tử +=
$a = 10;
$a += 10;
$a += 20;
echo $a;
echo '<br/>';

// Toán tử -=
$a = 20;
$a -= 5;
echo $a;
echo '<br/>';

// Toán tử *=
$a = 10;
$a *=20;
echo $a;
echo '<br/>';

// Toán tử /=
$a = 10;
$a /= 2;
echo $a;
echo '<br/>';

// Toán tử %=
$a = 10;
$a %= 6;
echo $a;
echo '<br/>';

// Toán tử .=
$a = 6;
$a .= 4;
echo $a;
echo '<br/>'; //Kết quả là 64

// Toán tử so sánh trả về kiểu dữ liệu true hoăc false kiểu dữ liệu boolean
// Toán tử >,<,>=,<=
$a = 10;
$b = 5;
$check = $a > $b;
var_dump($check);
echo '<br/>';

// Toán tử == (Chỉ so sánh giá trị)
$a = 10;
$b = '10';
$check = $a==$b;
var_dump($check);
echo '<br/>'; // Kết quả là true

// Toán tử === (So sánh cả giá trị và kiểu dữ liệu)
$a = 10;
$b = '10';
$check = $a===$b;
var_dump($check);
echo '<br/>'; // Kết quả là false

// Toán tử khác (!=, !==)
$a = 10;
$b = 10.0;
$check = $a !== $b;
var_dump ($check);
echo '<br/>';

// Toán tử quan hệ
// Toán tử và (&&) (Chỉ đúng khi tất cả đều đúng)
//  Một biểu thức con sai => Cả biểu thức sai

$a = 10;
$b = 15;
$c = 20;
$check = $a>=10 && ($b>=15 && $c>=20);
var_dump($check);
echo '<br/>';

// Toán tử (||) 
// Một trong các biểu thức con đúng thì cả biểu thức đúng
// Cả biểu thức sai khi tất cả biểu thức con sai
$a = 10;
$b = 15;
$check = $a >= 10 || $b <= 0;
var_dump($check);
echo '<br/>';

// Toán tử phủ định (!)
$a = true;
$check = !$a;
var_dump($check);
echo '<br/>';

// Độ ưu tiên NOT => AND => OR


