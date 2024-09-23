<?php require '../header.php'; ?>
<form action="price-output.php" method="post">
単価 <input type="text" name="price"> 円
×
個数 <input type="text" name="count"> 個
<input type="submit" value="計算">
</form>
<?php require '../footer.php'; ?>

<!--
require head :
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

type='text'で入力フォームを用意。
リクエストパラメータは、price, countで用意。
-->