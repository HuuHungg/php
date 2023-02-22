<?php 

echo 'Bài 6 <br/>';
$n = 5;
for($row = 1; $row <=$n; $row++) {
    for($col = 1;  $col <=$row; $col++) {
        if($col < $row) {
            echo '* ';
        }else {
            echo '*';
        }
    }
    echo '<br/>';
}

echo 'Bài 7 <br/>';
// Bài 7
$n = 5;
for($row = 1; $row <= $n; $row++) {
    for($col = 1; $col <= $row; $col++) {
        echo '* ';
    }
    echo '<br/>';
}

for ($row = $n; $row >= 1; $row--) {
    for($col = 1; $col <= $row; $col++) {
        echo '* ';
    }
    echo '<br/>';
}

echo "Bài 8 <br/>"; 
$n = 5;
for($row = 1; $row <=$n; $row++) {
    for($col = 1; $col<=$row; $col++) {
            $count++;
            if($col<$row) {
                echo $count.' ';
            }else {
                echo $count;
            }
          
    }
    echo '<br/>';
}