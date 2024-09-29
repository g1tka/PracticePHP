<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['genre'])) {

	foreach ($_REQUEST['genre'] as $item) {
		echo '<p>', $item, '</p>';
	}
	echo 'に関するお買い得情報をお送りさせて頂きます。';
}
else {
	echo '何も選択されていません。';
}
?>
<?php require '../footer.php'; ?>

<!--
$genre=['カメラ', 'パソコン', '時計', '家電', '書籍', '文房具', '食品'];
foreach ($genre as $item) {
	echo '<p>';
	echo '<input type="checkbox" name="genre[]" value="', $item, '">';
	echo $item;
	echo '</p>';
}

$_REQUEST['genre']でチェックされた配列genre（リクエストパラメータ）取得。
ただこれは配列になっている。チェックしたものの文字列だけ欲しい。
欲しいものはチェックボックスのvalue属性に設定した文字列。
テレビ
パソコン
というように、順に表示したい。<p>で囲ったわけ。
<p> $item </p>　こうしたいから、以下のように書く。
'<p>', $item, '</p>'

インプット画面について。
チェックボックスと選択肢となる文字列が書いてある。
チェックボックスのコードについて。
type="checkbox": この入力がチェックボックスであることを指定します。

name="genre[]": name属性にgenre[]を設定して、複数のチェックボックスが
選択された場合に配列として送信されることを示しています。

[]は配列であることを示す記法です。
value="', $item, '": 各チェックボックスのvalue属性に、
ループで取得した$item（商品ジャンルの名前）が設定されます。
これにより、チェックボックスが選択されたときに送信される値が決まります。
-->