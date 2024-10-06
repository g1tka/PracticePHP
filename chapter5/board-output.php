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
改行なく数字……。Unicodeで書いて保存している。



-->