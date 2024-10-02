<?php require '../header.php'; ?>
<?php
$postcode=$_REQUEST['postcode'];
if (preg_match('/^[0-9]{7}$/', $postcode)) {
	echo '郵便番号', $postcode, 'を確認しました。';
} else {
	echo $postcode, 'は適切な郵便番号ではありません。';
}
?>
<?php require '../footer.php'; ?>

<!--
preg_match('/^[0-9]{7}$/', $postcode)
これは半角数字に対して判定する。全角数字に対してはfalseとなる。

今回学んでいるのは
正規表現とpreg_match関数

preg_match関数は指定したパターンに入力文字列がマッチすればtrue
しなければfalse
preg_match(パターン, 入力文字列)

正規表現
^　行頭　～　$ 行末
[0-9]　0から9までの数字1文字
{7} 直前の文字（0~9までの数字）が7文字続く
これを、'/　と　/'　で囲って渡す。

postcodeに対して
if (preg_match('/^[0-9]{3}-[0-9]{4}$/', &postcode))
にしておくと、3桁-4桁でハイフン有が、trueとなる。

-->