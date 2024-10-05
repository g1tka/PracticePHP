<?php require '../header.php'; ?>
<p>お名前のフリガナを入力してください。</p>
<form action="zenhan-kana-output.php" method="post">
<input type="text" name="furigana">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>

<!--
テキストボックスに日本語入力させる。
半角入力されても全角。
全角なら全角のまま。

mb_convert_kana関数
mb_convert_kana(文字列)

例えば二文字になってしまうﾋﾟもピ一文字になる。

-->