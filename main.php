<?php
//配列は、添え字を指定して、場所を特定する必要がある。
//また、一つ一つの箱のことを要素と言う。
$a[0] = 10;
$a[1] = 20;
$a[2] = 30;

//echo $a;
echo $a[0];
echo $a[1];
echo $a[2];
echo PHP_EOL;

//デバック用配列出力
print_r($a);
var_dump($a);
var_dump(1.5);
var_dump("a");
var_dump(true);

//配列は繰り返し構造と相性抜群！
for($i = 0; $i < 3; $i++){
    echo $a[$i];
}
echo PHP_EOL;

//やってみよう
//$a配列(要素数3)を、全て「0」で初期化。
//※確認はprint_rで

for($i = 0; $i < 3; $i++){
    $a[$i] = 0;
}
print_r($a);

//やってみよう
//① 0, 1, 2 で初期化！
//② 0, 10, 20 で初期化！
//③ 10, 20, 30 で初期化！

//①
for($i = 0; $i < 3; $i++){
    $a[$i] = $i;
}
print_r($a);

//②
for($i = 0; $i < 3; $i++){
    $a[$i] = $i * 10;
}
print_r($a);

//③ ver.1
for($i = 0; $i < 3; $i++){
    $a[$i] = $i * 10 + 10;
}
print_r($a);

//③ ver.2
for($i = 0; $i < 3; $i++){
    $a[$i] = ($i + 1) * 10;
}
print_r($a);

//要素数(配列長)を取得するにはcount関数
echo count($a);

for($i = 0; $i < count($a); $i++){
    echo $a[$i];
}
echo PHP_EOL;


