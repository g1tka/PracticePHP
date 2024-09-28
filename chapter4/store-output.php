<?php require '../header.php'; ?>
<?php
// echo '店舗コードは', $_REQUEST['code'], 'です。';
$store=[
	'新宿'=>100, '秋葉原'=>101, '上野'=>102, '横浜'=>200, '川崎'=>201, 
	'札幌'=>300, '仙台'=>400, '名古屋'=>500, '京都'=>600, '博多'=>700
];
$code = $_REQUEST['code'];
$store_name = array_search($code, $store);
echo '店舗コードは', $code, 'です。店舗名は', $store_name, 'です。';
?>
<?php require '../footer.php'; ?>

<!--
echo '店舗コードは', $_REQUEST['code'], 'です。';だけだった。
"店舗名"店の店舗コードは'000'です。というように店舗名も書きたいな。

→$storeの配列をもう一度書く/定義する必要がある。
$code = $_REQUEST['code'];
$store_name = array_search($code, $store);
この2行はのちのち完結に書くため。

echo '店舗コードは', $code, 'です。店舗名は', $store_name, 'です。';

$store_nameを入れたかった。入れられた。
そのために必要だったこと、
array_search($code, $store);
配列$storeの中から、指定した値$codeを探し、
その値が最初に見つかったキーを返す。
もし見つからなければfalseを返す。if文にしてelseの場合店舗なしなど書いてもいいかも。
これにより、店舗コードに対応する店舗名を取得できる。

今回の勉強内容としては、
配列のキーと値という部分。
新宿とか店舗名の部分がキー、数字を値として記述した。
配列からキーを基に値を取り出す記述。
配列$sotreからキー$keyをもとに値$valueを取り出す。

-->