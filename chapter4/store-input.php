<?php require '../header.php'; ?>
<p>店舗を選択してください。</p>
<form action="store-output.php" method="post">
<select name="code">
<!-- <option value="100">新宿</option>
<option value="101">秋葉原</option>
<option value="102">上野</option>
<option value="200">横浜</option>
<option value="201">川崎</option>
<option value="300">札幌</option>
<option value="400">仙台</option>
<option value="500">名古屋</option>
<option value="600">京都</option>
<option value="700">博多</option> -->
<?php
$store=[
	'新宿'=>100, '秋葉原'=>101, '上野'=>102, '横浜'=>200, '川崎'=>201, 
	'札幌'=>300, '仙台'=>400, '名古屋'=>500, '京都'=>600, '博多'=>700
];
foreach ($store as $key=>$value) {
	echo '<option value="', $value, '">', $key, '</option>';
}
?>
</select>
<p><input type="submit" value="確定"></p>
</form>
<?php require '../footer.php'; ?>

<!--
http://localhost/php/chapter4/store-input.php

<option value="新宿">新宿</option>ではなく、(選択肢は「新宿」、送信後は新宿と表示)
<option value="100">新宿</option>（選択肢は「新宿」で、送信後は101と表示）

「新宿」も使いたい場合は？？？
→アウトプットの方で勉強ノート。

新宿とか店舗名の部分がキー、数字を値として記述した。
配列からキーを基に値を取り出す記述。
配列$sotreからキー$keyをもとに値$valueを取り出す。
-->