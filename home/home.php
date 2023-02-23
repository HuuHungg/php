<?php
    
$path_dir = __DIR__.'/../includes';
// $path_dir = '../includes';

//Import header.php
include $path_dir.'/header.php';
include_once $path_dir.'/header.php';

//Import content.php
include $path_dir.'/content.php';
echo '日本語が難しいですが頑張りましょう。でも毎日四時間ぐらい頑張ってください';

//Import footer.php
include($path_dir.'/footer.php');

echo '<br/>'; // Đối với require

//Import header.php
require $path_dir.'/header.php';
// require_once $path_dir.'/header.php';

//Import content.php
require $path_dir.'/content.php';
echo '日本語が難しいですが頑張りましょう。でも毎日四時間ぐらい頑張ってください';

//Import footer.php
require ($path_dir.'/footer.php');

// include, include_one => Nếu lỗi chương trình bên dưới vẫn chạy
// require, require_one => Nếu lỗi chương trình bên dưới sẽ dừng
