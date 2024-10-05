<?php require '../header.php'; ?>
<?php
echo 'フリガナは「', mb_convert_kana($_REQUEST['furigana']), '」です。';
?>
<?php require '../footer.php'; ?>

<!--
<form action="zenhan-kana-output.php" method="post">
<input type="text" name="furigana">
<input type="submit" value="確定">
</form>

全角を半角にするのはオプションで可能
mb_convert_kana(文字列、オプション)
全角数字を半角数字に変換することができる。
オプション部分は"n"と記入する。
r：全角英字を半角に変換
R：半角英字を全角に変換
n：全角数字を半角に変換
N：半角数字を全角に変換
a：全角英数字を半角に変換
A：半角英数字を全角に変換
s：全角スペースを半角に変換
S：半角スペースを全角に変換
k：全角カタカナを半角カタカナに変換
K：半角カタカナを全角カタカナに変換
h：全角ひらがなを半角カタカナに変換
H：半角カタカナを全角ひらがなに変換
c：全角カタカナを全角ひらがなに変換
C：全角ひらがなを全角カタカナに変換
V：濁点付きの文字を1文字に変換。KやHと併用する。

-->