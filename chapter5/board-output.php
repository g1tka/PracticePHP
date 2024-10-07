<?php require '../header.php'; ?>
<?php
$file='board.txt';
if (file_exists($file)) {
	$board=json_decode(file_get_contents($file));
}
$board[]=htmlspecialchars($_REQUEST['message']);
file_put_contents($file, json_encode($board));
foreach ($board as $message) {
	echo '<p>', $message, '</p><hr>';
}
?>
<?php require '../footer.php'; ?>

<!--
入力した順番に（戻って入力して…）一覧表示される。
どこに保存されているんだろう。DB

やっていること！
１．メッセージ一覧をファイルから読み込む
２．メッセージの一覧に新規メッセージを追加する
３．メッセージの一覧をファイルに書き込む
４．メッセージの一覧を表示する
JSON形式でメッセージをファイルに保存している。
JavaScript Object Notation
文字列配列を簡単に書き込み読み込みできるメリット。

PHPスクリプトと同じフォルダにあるboard.txtというテキストファイル。
これに、メッセージの一覧を保存している。
改行なく数字……。日本語は、Unicodeで書いて保存している。
英数字コメントはそのまま保存されていた。

if (file_exists($file)) {・・・
あればtrue なければfalse
$board=json_decode(file_get_contents($file));
file_get_contents($file)で取得する（関数）
この$fileに代入されたファイルがＪＳＯＮ形式で保存されている。
ＰＨＰで読めるようにするために
json_decode関数に渡す。
戻り値を$boardに渡してのちのち使えるようにする。

★ＪＳＯＮファイルの読み込み
１．存在確認
２．文字列の取得
３．文字列の変換

$board[]=htmlspecialchars($_REQUEST['message']);
やりたいことは、
$board[]=$_REQUEST['message']だが
悪意ある入力（クロスサイトスクリプティング）を防ぐため
htmlタグを無効にする関数を使った。

file_put_contents($file, json_encode($board));
file_put_contents(指定したファイル名、指定した文字列);
指定した文字列を指定したファイルに書き込む
※ない場合、新規にファイルを作成する。

メッセージの一覧を表示する
配列をループで表示
foreach ($board as $message) {
	echo '<p>', $message, '</p><hr>';
}
※hrタグは水平線で、区切るために使用。

復習）
foreach (配列 as 変数) {
　変数を使った処理；
}
配列から変数を取り出し、あれやこれや実行

-->