<?php require '../header.php'; ?>
<p>7桁の郵便番号をハイフンなしで入力してください。</p>
<form action="postcode-output.php" method="post">
<input type="text" name="postcode">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>

<!--
type="text"で好きな文字を入れられる。
しかしoutput.phpの方で判定する際に、半角数字のみ判定するようにしているので、
全角数字ではfalseになってしまう。
（正規表現の設定の仕方）

-->