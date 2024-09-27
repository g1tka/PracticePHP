<?php require '../header.php'; ?>
<?php
echo $_REQUEST['count'], '個の商品をカートに追加しました。';
?>
<?php require '../footer.php'; ?>

<!--
http://localhost/php/chapter4/select-for-input.php

セレクトボックスから選択させる方式のフォーム！
<form action="select-for-output.php" method="post">
<select name="count">
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
</select>
<p><input type="submit" value="確定"></p>
</form>


-->