<?php
$age = 36;

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
    echo $age . '歳です';
} else {
    echo '※数字で入力してください';
}
?>

<!-- is_numericは変数が数字または数値形式の文字列かどうかを調べる(bool値) -->
<!-- mb_convert_kanaのnは全角数字を半角にコンバートする -->