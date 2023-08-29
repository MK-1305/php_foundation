<!-- while繰り返し構文 -->
<?php
$i = 1; //初期化

while ($i < 20): //繰り返し条件
    echo $i . '日<br>';
    $i = $i + 1; //更新処理
endwhile;
// endwhileは一度処理をした後にまた最初に戻って条件と比べられる
?>