<?php require '../header.php'; ?>
<?php
if (isset($_REQUEST['mail'])) {
	echo 'お買い得情報のメールをお送りさせて頂きます。';
} else {
	echo 'お買い得情報のメールはお送りさせて頂きません。';
}
?>
<?php require '../footer.php'; ?>

<!--
<form action="check-output.php" method="post">
<p><input type="checkbox" name="mail">お買い得情報のメールを受け取る</p>
<p><input type="submit" value="確定"></p>
</form>

submitボタンを押すと
フォーム（checkbox）の状態がスクリプトに送信される
状況に応じてスクリプト実行
実行結果を表示

if (isset($_REQUEST['mail'])) {
この条件文がtrueなら
	echo 'お買い得情報のメールをお送りさせて頂きます。';
} else {
falseなら
	echo 'お買い得情報のメールはお送りさせて頂きません。';
}
inputのスクリプトでcheckboxにチェックを入れると
<input type="checkbox" name="mail">がtrueとして送信される。

if文で制御：制御構造という。
真偽値に応じて処理を分岐。

isset()関数は、指定された変数が設定されているかどうか確認。
（）内はリクエストパラメータ
変数が定義されているかどうかとは？
$_REQUEST['mail']に代入されているかどうか。されていたらtrue
checkboxにチェックを入れたら、on または　1が入力される。

-->