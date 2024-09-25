<?php require '../header.php'; ?>
<?php
switch ($_REQUEST['seat']) {
case '指定席':
	echo '追加料金は1200円です。';
	break;
case 'グリーン席':
	echo '追加料金は2500円です。';
	break;
default:
	echo '追加料金はありません。';
	break;
}
?>
<?php require '../footer.php'; ?>

<!--
switch文とdefault
ラジオボタンと同じ？
case/case/caseではなく
case/case/default
if/elsif/elseに似ているね。
default:それ以外～ただし、defaultにもbreak;をつける！

-->