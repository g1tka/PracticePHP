<?php
echo 'Welcome';
print 'to';
echo 'PHP';
?>
<!--
実行というのが、Apacheを実行している前提で…
Chromeなどブラウザで開く。
URLはhttp://localhost/php/chapter3/welcome.php
 
＜?php から ?＞で挟んだ部分がPHP。

'' を基本使う。""は特別な文字エスケープシーケンスと変数展開のとき。
；は文の終わりを示す。

Rubyのputsは改行するけれどPHPのechoは改行スペース無いのね。

試しに''を付けなかった場合実行（して更新）するとエラー。
Welcometo
Fatal error: Uncaught Error: Undefined constant "PHP" 
in C:\xampp\htdocs\php\chapter3\welcome.php:4
Stack trace: #0 {main} 
thrown in C:\xampp\htdocs\php\chapter3\welcome.php on line 4
「PHP」という定数が定義されていないよ。
4行目だ！と言っています。わかりやすい。
文字列を出力する、ではなく、定数を出力する、を指示。
定数探しに行ってくれたが、無い！と。

PHPとHTML混在すると別だが、PHPのみのとき。
スクリプト終末の?＞は省略できる。する、とのこと。！

echo と似ているものに printがある。
echoは複数の文字列、数値などを結合して出力する機能があるため書くこと多いかも。

-->
<?php
echo <<<END
Welcome
to
PHP
END;
?>

<!-- 
これはヒアドキュメント構文。
複数行の文字列を表現するための構文。 
echo, printと組み合わせる。＜＜＜のあとの記号（END）が文字列の終わりを表す。
ただechoを3行書いているのと同じで、改行はされない。
しかし、スペースはできる！！！
-->

<?= 'こんにちは' ?>
<!-- echoタグ。スクリプトでechoを１つだけ含む場合などにつかえる記法。 -->


