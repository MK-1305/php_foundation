<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample20</title>
</head>
<body>
    <?php if (!empty($_POST['my_name'])): ?>
        <p>ようこそ<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES); ?>さん！</p>
    <?php endif; ?>
</body>
</html>

<!-- getで受け取るときはGETを、postで受け取る時にはPOSTを使い分ける。（getかどうかわからない時や後で変更されるかもしれない場合はREQUESTを使う） -->