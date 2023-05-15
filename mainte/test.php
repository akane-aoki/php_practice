<?php
// パスワードを記録したファイルの場所
// echo __FILE__;
// /Applications/MAMP/htdocs/php_test/mainte/test.php

// echo '<br>';

// パスワード（暗号化）
// echo password_hash('password123', PASSWORD_BCRYPT);

$contactFile = '.contact.dat';

// // ファイル丸ごと読み込み
// $fileContents = file_get_contents($contactFile);

// // echo $fileContents;

// // ファイルに書き込み（上書き）
// // file_put_contents($contactFile, 'テストです');

// $addText = 'テストです' . "\n";

// // ファイルに書き込み（追記）
// file_put_contents($contactFile, $addText, FILE_APPEND);

// // 配列をコンマごとに区切って表示する
// $allData = file($contactFile);

// foreach($allData as $lineData){
//   $lines = explode(',', $lineData);
//   echo $lines[0]. '<br>';
//   echo $lines[1]. '<br>';
//   echo $lines[2]. '<br>';
// }

$contents = fopen($contactFile, 'a+');
$addText = '1行追加' . "\n";
fwrite($contents, $addText);
fclose($contents);

?>