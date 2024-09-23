<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['meal']) {
case '和食':
	echo '焼き魚、煮物、味噌汁、御飯、果物';
	break;
case '洋食':
	echo 'ジュース、オムレツ、ハッシュポテト、パン、コーヒー';
	break;
case '中華':
	echo '春巻、餃子、卵スープ、炒飯、杏仁豆腐';
	break;
}
echo 'をご提供いたします。';
?>
<?php require '../footer.php'; ?>

<!--
お食事を選択してください。
<form action="radio-output.php" method="post">
<p><input type="radio" name="meal" value="和食" checked>和食</p>
<p><input type="radio" name="meal" value="洋食">洋食</p>
<p><input type="radio" name="meal" value="中華">中華</p>
<p><input type="submit" value="確定"></p>
</form>
いずれかを選択して、submit。

switch文による条件分岐。
複数のcase文を並べることができる。
各case文の末尾はbreak文で処理終了。
case文は処理を終わったらその他case文へ行かず次へ。
switch()の()内（選択したラジオボタンのvalue）
に一致するcase文を実行。

-->