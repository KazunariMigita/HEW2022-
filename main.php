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

