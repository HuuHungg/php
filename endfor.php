<?php

// Cú pháp thay thế for 

for($i = 1; $i <= 5; $i++) {
    echo $i.'<br/>';
}
echo '<br/>';
// Thay Thế for
for($i = 1; $i <= 10; $i++):
echo $i.'<br/>';

endfor;




// 4/ Cú pháp thay thế while

$i = 1;
while ($i <= 6) {
    echo $i.'<br/>';
    $i++;
}

// Thay the while

$i = 1;
while ($i < 10):
echo $i.'<br/>';
$i++;
endwhile;

// 5. Cú pháp thay thế forEach
$dataArr = [
    'item1',
    'item2'
];

foreach($dataArr as $item) {
    echo $item.'<br/>';
}

// Thay Thế 
foreach ($dataArr as $item):
echo $item.'<br/>';
endforeach;