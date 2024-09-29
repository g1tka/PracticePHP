<?php require '../header.php'; ?>
<p>ご興味のある商品ジャンルを全て選んでください。</p>
<form action="checks-output.php" method="post">
<?php
$genre=['カメラ', 'パソコン', '時計', '家電', '書籍', '文房具', '食品'];
foreach ($genre as $item) {
	echo '<p>';
	echo '<input type="checkbox" name="genre[]" value="', $item, '">';
	echo $item;
	echo '</p>';
}
?>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!--
input の type="checkbox"でチェックボックス。
name="genre"の配列設置
value(値)="カメラとかパソコンとか"
複数設置したい
foreachループを使って、配列使って、複数設置
foreach ($genre as $item)
foreach (配列　as  値（前回はキー）)
$itemはジャンルから値を取り出す変数として定義

チェックボックスと選択肢となる文字列が書いてある。
チェックボックスのコードについて。
type="checkbox": この入力がチェックボックスであることを指定します。
name="genre[]": name属性にgenre[]を設定して、複数のチェックボックスが
選択された場合に配列として送信されることを示しています。
[]は配列であることを示す記法です。
※配列genreが存在しない場合の場合分けが必要。
value="', $item, '": 各チェックボックスのvalue属性に、
ループで取得した$item（商品ジャンルの名前）が設定されます。
これにより、チェックボックスが選択されたときに送信される値が決まります。

echo '<input type="checkbox" name="genre[]" value="', $item, '">';
-->