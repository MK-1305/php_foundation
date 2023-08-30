<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 0): ?>
    <p>※ 営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>

<?php
$s = 'acc';
if ($s): //$s !== ''
    echo '$sには文字が入っています';
endif;
?>

<?php
$x = 0; //$x !== 0:
if ($x):
    echo '$xは0ではありません';
endif;

// 代入する値が''なら文字列、何もなければ数字で認識されtrueかfalseで返す

$x = 10;
if (!$x): //$x === 0
    echo '$xは0です';
endif;

