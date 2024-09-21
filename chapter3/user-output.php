<?php require '../header.php'; ?>
<?php
// echo 'ようこそ、', $_REQUEST['user'], 'さん。';
if (isset($_REQUEST['user'])) {
    echo 'ようこそ、', htmlspecialchars($_REQUEST['user']), 'さん。'; 
}
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

http://localhost/php/chapter3/user-output.php
ここに直接アクセスした場合以下のように表示される（エラー）。
ようこそ、
Warning: Undefined array key "user" in C:\xampp\htdocs\php\chapter3\user-output.php on line 3
さん。

入力しなかった場合でif文を作成し対応する。
if (isset($_REQUEST['user'])) {
  ここに実行したいコード
}
※isset() 変数が定義されているかどうかを調べる変数

もう一つ懸念。
入力フォームに<h1>なまえ</h1>というようにHTMLタグを入力された場合。
h1タグが反映され大きい文字で表示される。困ります。
無効にするには。

echo 'ようこそ、', htmlspecialchars($_REQUEST['user]), 'さん。';

※htmlspecialchars() 特別な働きをする文字について無効にする。
ユーザーが入力した文字を表示したり保存したりする際に安全性を高める。

-->