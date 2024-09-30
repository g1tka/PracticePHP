<?php require '../header.php'; ?>
<?php
date_default_timezone_set('Japan');
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
?>
<?php require '../footer.php'; ?>

<!--
http://localhost/php/chapter5/date.php
関数の呼び出し１。
date関数を使って、現在の日時を指定した形式で表示する！
引数を指定して、関数を呼び出し
 date('Y/m/d H:i:s')
引数に合わせて関数を実行する。
実行結果を戻り値として呼び出し元に渡す
戻り値は2024/09/30 21:26:22
これをつかってecho~の処理を実行
これを表示する。

現在の日時を取得するには、タイムゾーンを指定する必要がある。
今回、タイムゾーン指定をコメントアウトしてみても問題なかった。
date_default_timezone_set('Japan')
'Y年m月d日 H時i分s秒'

-->