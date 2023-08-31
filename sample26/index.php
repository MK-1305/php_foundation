<?php
$value = '変数に保存した値です';
setcookie('message', 'Cookieに保存した値です',
    time() + 60 * 60 * 24 * 14);
    // 60秒*60(1時間)*24（1日）*14 =二週間後の同じ時刻まで表示される※あまり長い期間保持するのはセキュリティ上よくない
?>

<!-- Cookieはページ遷移で破棄される変数を任意の有効期限付きで格納することができる -->
<!-- 個人情報は格納しない方がいい、パスワードは格納せずログイン名を格納することが多い -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson26</title>
</head>
<body>
    <a href="page02.php">2ページ目へ</a>
</body>
</html>