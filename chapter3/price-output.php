<?php require '../header.php'; ?>
<?php
// echo $_REQUEST['price'], '円×';
// echo $_REQUEST['count'], '個＝';
// echo $_REQUEST['price']*$_REQUEST['count'], '円';
$price=$_REQUEST['price'];
$count=$_REQUEST['count'];
echo $price, '円×';
echo $count, '個=';
echo $price*$count, '円';
?>
<?php require '../footer.php'; ?>

<!--
入力フォーム：
<form action="price-output.php" method="post">
単価 <input type="text" name="price"> 円
×
個数 <input type="text" name="count"> 個
<input type="submit" value="計算">
</form>

$_REQUEST['price']*$_REQUEST['count']
が計算部分。

* + - / % 「演算子」という。
&& || == != も演算子
= も代入する演算子。
++ -- 1を加算、1を減算する演算子　**これは累乗

変数：
頭に$を付ける。1文字目は英字または_アンダースコア。
2文字目以降は英字数字＿いずれか。大文字小文字区別。

$_REQUESTは定義済みの変数であり、定義しなおし、上書き不可。
他にPHPで定義済みの変数は…
$_GET, $_POST, $_POST, $_FILES, $_SESSION, $_COOKIE
これは一部。

配列：
キーと値を複数まとめて格納できる機能。

$priceか$countに数値以外が入力された場合、
計算が行えない。→エラー。
＊入力された内容が数値かどうか判定する仕掛けが必要。

C:\xampp\htdocs\php>
-->