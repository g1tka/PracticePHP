<?php require '../header.php'; ?>
<?php
// echo rand();
// echo rand(). PHP_EOL;
// echo getrandmax();
echo rand(1,6);
echo '<img alt="image" src="item', rand(0,2), '.png">';

?>
<?php require '../footer.php'; ?>

<!--
http://localhost/php/chapter5/rand.php
を開くと、そのたびランダムな数が表示される。
0以上最大以下。
最大？getrandmax()で取得すると
2147483647(パソコンのスペック？環境による)
しかし、rand(0, 1000000000)のように指定すればでてくるらしい。
偶数だけ！！！
rand(1,5)*2
rand(1,5)*2-1もしくはrand(0,4)*2+1とすれば奇数だけ！！！

echo rand(1,6);
最小値１、最大値６
基本的にはrand()は整数を返す関数です。

echo '<img alt="image" src="item', rand(0,2), '.png">';
画像ファイルをスクリプトと同じフォルダに保存している。
画像ファイル名は、item0.pngのように、0,1,2と連番で数字登録。
画像型式は.png
0から2までの乱数が生成され、対応した画像が表示される。

一つ表示のしかたは、
echo '<img alt="image" src="item0.png">';
この0の部分を乱数で生成。
-->