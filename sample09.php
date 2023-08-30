<?php
date_default_timezone_set('Asia/Tokyo');

$hello = 'こんにちは';
echo $hello . '<br>';
echo '$hello<br>';
echo "$hello<br>";
// "は’と違い少し緩く、囲んだ中に変数があると変数も展開するようになっている
echo '1+1<br>';
echo "1+1<br>";
echo 1+1 . '<br>';
// 計算式やファンクションは展開できない（あくまで変数だけ）


for ($i=0; $i<366; $i++):
    $time = strtotime("+$i day");
    $day = date('n/j(D)', $time);
    echo $day . '<br>';
endfor;
?>