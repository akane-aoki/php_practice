<?php

if(!empty($_POST)){
//スーパーグローバル変数
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}

?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>

<body>
<form method="post" action="input.php">
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ

<input type="submit" value="送信">

</form>

</body>
</html>