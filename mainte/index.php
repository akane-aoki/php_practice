<!-- データベースのデータを表示する -->
<?php

require 'db_connection.php';

//ユーザー入力なし
// $sql = 'select * from contacts where id = 1';
// $stmt = $pdo->query($sql); //sql実行（ステートメント）

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり（SQLインジェクション）
$sql = 'select * from contacts where id = :id'; //:idは名前付きプレースホルダー、?はプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 1, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';


// トランザクション
$pdo->beginTransaction();

try{
//sql処理
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 1, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行

$pdo->commit();

}catch(PDOException $e){
  $pdo->rollback(); //更新のキャンセル
}