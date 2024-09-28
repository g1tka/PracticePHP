<?php require '../header.php'; ?>
<p>商品の色を選択してください。</p>
<form action="select-foreach-output.php" method="post">
<select name="color">
<?php
// $color=['ホワイト', 'ブルー', 'レッド', 'イエロー', 'ブラック'];
$color=array('ホワイト', 'ブルー', 'レッド', 'イエロー', 'ブラック');
foreach ($color as $c) {
	echo '<option value="', $c, '">', $c, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!--
それぞれにoption value=""と設定するのではなく、スクリプトで選択肢を作る。
複数、それがたっくさんだと、大変（時間、労力）＋ミス可能性up

まず　配列　で選択肢の一覧を作成。
$color=['ホワイト', 'ブルー', 'レッド', 'イエロー', 'ブラック'];

$color=[
	'ホワイト',
	'ブルー',
	'レッド',
	'イエロー',
	'ブラック'
];　　　　　という書き方でもよい。

$color=array('ホワイト', 'ブルー', 'レッド', 'イエロー', 'ブラック');
という書き方でもよい。これを短縮したのが上の[]の記述だ。

では、foreachループ。配列から一つづつ取り出して、選択肢を作成。

foreach ($color as $c) {
	echo '<option value="', $c, '">', $c, '</option>';
}

$colorという配列から、１つとって$cに代入する。
まず選択肢１として変数$c=値A（$colorという配列の1つ目の値A）を表示。
$colorという配列から、２つめをとって$cに代入する。
選択肢２として、変数$c=値Bを表示。
・・・
配列の値すべて終わったら終了。

配列as変数{
変数の選択肢
｝

-->