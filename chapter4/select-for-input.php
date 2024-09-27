<?php require '../header.php'; ?>
<p>購入数を選択してください。</p>
<form action="select-for-output.php" method="post">
<select name="count">
<?php
for ($i=0; $i<10; $i++) {
    echo '<option value="', $i, '">', $i, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!--
selectボックスの選択肢は自由席～と同じくoptionタグで用意。
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
でもよいが……スクリプトで作成しよう。
?php
for ($i=0; $i<10; $i++) {
    echo '<option value="', $i, '">', $i, '</option>';
}
?
これで全く同じく0から9までの選択肢を表示できた。

forループ：
指定した処理を指定した回数だけ繰り返したい。
条件分岐と同様にこれもまた制御構造のひとつである。

変数$i=0にまずする。
選択肢一つ目は$i=0の通り0である。
変数$i=0に+1をする。$i=1になる。
選択肢の2つ目は$i=1の通り1である。
・・・
選択肢の10個目は$i=9の通り9である。
変数$i=9に+1をする。$i=10になる。
$i=10になったので処理を実行せずに終了する。

for (開始処理; 条件式; 更新処理) {
  繰り返し処理
}
for ($i=0; $i<10; $i++) {
    echo '<option value="', $i, '">', $i, '</option>';
}

< > <= >= == !=
比較演算子

$i++の++インクリメント演算子。後ろに＋１
--はデクリメント演算子。後ろに―1つける。

whileの場合？
開始処理（無くてもよい）
while (条件式) {
    繰り返し処理;
    更新処理;（無くてもよい）
}

$i=0;
while ($i<10) {
    echo '<option value="', $i, '">', $i, '</option>';
    $i++;
}

開始処理、更新処理が不要ならwhileでよい。
必要ならおのずとfor文がつかわさる。

-->