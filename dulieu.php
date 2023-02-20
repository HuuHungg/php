<?php
// 1. Kiểu số nguyên (Int)
// Khai báo Kiểu số nguyên
$age = 30;
// var_dump($age)
// Ép kiểu
$age = (int)$age;

// Kiểm tra kiểu số nguyên 
// $check = is_int($age);
$check = is_integer($age);

// 2. Kiểu boolean (logic) 
$check = 2;
$check = (bool)$check; 
// $checkBool = is_bool($check);
var_dump($check);

echo '<br/>';

// 3. Kiểu số thực (float)
$fee = 10;
// Ép kiểu
$fee = (float)$fee;
var_dump ($fee);
echo '<br/>';
// Kiểm tra xem có phải số thực hay không
var_dump(is_float($fee));

echo '<br/>';
// 4. Kiểu dữ liệu chuỗi (string)
$mesage = '毎日ITを勉強してる頑張りましょう';
$checkString = is_string($mesage);
var_dump($mesage);
echo '<br/>';
var_dump($checkString);

// Ép kiểu sang string
echo '<br/>';
$message2 = 10;
$message2 = (string)$message2;
$checkString2 = is_string($message2);
var_dump($message2);
echo '<br/>';
var_dump ($checkString2);

echo '<br/>';
// 5. Kiểu mảng (array)
// Khai báo: $ten_bien = array();
// Ép kiểu mảng: (array)$ten_bien;
// Kiểm tra kiểu mảng: is_array($ten_bien)

$carArr = ['Javascipt', 'PHP', 'Ruby'];
$carArr = (array)$carArr;
var_dump($carArr);
$checkArr = is_array($carArr);
echo '<br/>';
var_dump($checkArr);

// 6. Kiểu dữ liệu Null
// Hàm kiểm tra của null; is_null($ten bien)
// khi mà ép kiểu sang int thì nó sẽ trả về 0 vd: $total = (int)$total => 0
// Khi mà ép kiểu sang String thì nó sẽ trả về rỗng vd: $total = (string)$total => ""
// Khi mà ép kiểu sang Boolean thì nó sẽ trả về False vd: $total = (boolean)$total => false

echo '<br/>';   

$total = null;
$total = (string)$total;
var_dump($total);
echo '<br/>';
// Kiểm tra xem có phải biến null không
$checkNull = is_null($total);
var_dump($checkNull);

//7. Kiểu đối tượng Object
echo '<br/>';
$dataCustomer = [
    'Hoang An'
];
$dataCustomer = (object)$dataCustomer; //Ép kiểu
$checkObject = is_object($dataCustomer);
var_dump($dataCustomer);
echo '<br/>';
var_dump($checkObject); 
echo '<br/>';


$customerObject = new StdClass();
$customerObject -> age = 30;
var_dump($customerObject);


// 8. Kiểu dữ liệu RESOURCE
// Kiểu dữ liệu đặc biệt, nó lưu trữ tham chiếu đến các hàm - tài nguyên bên ngoài PHP: file, curl, database
// Kiểm tra resourcre($ten_bien)

// echo '</br>';
// $curl = curl_init();
// $checkType  = get_resource_type($curl);
// var_dump($curl);
// echo '<br/>';
// var_dump($checkType);
