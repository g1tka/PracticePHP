<?php require '../header.php'; ?>
<form action="check-output.php" method="post">
<p><input type="checkbox" name="mail">お買い得情報のメールを受け取る</p>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!--
head:
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="check-output.php" method="post">
</form>の間に画面の記述

<p><input type="checkbox" name="mail">お買い得情報のメールを受け取る</p>
<p><input type="submit" value="確定"></p>

チェックボックスはtype="checkbox"
その後続けて表示する文字
確定ボタンはtype="submit", valueで表示する文字

-->