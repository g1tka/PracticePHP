<?php require '../header.php'; ?>
<p>パスワードを入力してください。</p>
<p>（8文字以上で、英小文字、英大文字、数字を各1文字以上含むこと）</p>
<form action="password-output.php" method="post">
<input type="password" name="password">
<input type="submit" value="確定">
</form>
<?php require '../footer.php'; ?>

<!--
type="password"にすると、パスワード入力欄になる。
これは、入力した文字列が表示されなくなる特徴あり。

$password=$_REQUEST['password'];
if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,}$/', 
	$password)) {
	echo 'パスワード「', $password, '」を確認しました。';
} else {
	echo 'パスワード「', $password, '」は適切ではありません。';
}

正規表現が少し複雑。
(?=.*[a-z])英語小文字を含む
(?=.*[A-Z])英語大文字を含む
(?=.*[0-9])数字を含む
[a-zA-Z0-9]いずれか一文字ふくむ
{8,}直前の文字が8文字以上続く
-->