<?php require '../header.php'; ?>
<p>お名前を入力してください。</p>
<form action="user-output.php" method="post">
<input type="text" name="user">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>

<!--
http://localhost/php/chapter3/user-input.php 
上のurlで入力すると、ようこそ○○さん。と表示される。 
"require" は部分テンプレート/パーシャルを呼び出すイメージ。
rubyではrenderだったなあ。

headerで呼び出しているのは
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP Sample Programs</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

footerで呼び出しているのは
</body>
</html>

入力フォームである。受け取ったら、出力用スクリプトへ。
出力用スクリプトへ送ったら、出力ページで結果を表示。
※user-output.php

フォームについて
<form action="user-output.php" method="post">
<input type="text" name="user">これがテキストボックス。
<input type="submit" value="確定">これがボタン。
</form>
nameは属性。コントロールを識別するための名前を設定する。
type属性をsubmitと書くだけでWebサーバーにフォームの内容を送信する。
value属性に設定した値がビューで表示される。

 -->
