<?php
$random = rand(0, 1);
if ($random === 0) {
    echo 'あたりです';
} else {
    echo 'ハズレです';
}
?>
<!-- rand（最小値、最大値）で乱数を出力する -->
<!-- ABテストでどちらのバナーがよくクリックされるかを調べる時などにも使う -->