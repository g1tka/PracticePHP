<?php require '../header.php'; ?>
<?php
echo 'ようこそ、', $_REQUEST['user'], 'さん。';
?>
<?php require '../footer.php'; ?>

<!--
<form action="user-output.php" method="post">
<input type="text" name="user">
<input type="submit" value="確定">
</form>
入力フォームから入力された情報が
action属性で指定した"user-output.php"にpostメソッドで送信される。
内容はtextでname属性でuserというパラメータが付与されている。

echo 'ようこそ、', $_REQUEST['user'], 'さん。';
で表示している。
リクエストパラメータとして送信されたフォームの内容を受け取る。
同時にいくつか送信してもわかるように、区別している。
それがリクエストパラメータ名であるuserの部分。

$_REQUEST['user']これでよびだしできるが、
$_REQUESTが変数のようなもの（変数の一種といえる。）つまり箱。
echoで表示。
つなげて表示するために'', '', ''と連結して表示している。

-->