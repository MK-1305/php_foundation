<?php
$file = $_FILES['picture'];
// var_dump($file);(指定した変数に関する構造的な情報を返す)

if ($file['type'] === 'image/gif' || 
        $file['type'] === 'image/jpeg') {
    $path = 'images/' . $file['name'];
    $success = move_uploaded_file($file['tmp_name'], $path);
    // 送信した時はtmpフォルダの中に格納されるのでmove_uploaded_fileでnameに移動させる

    if ($success) {
        echo '成功しました';
    } else {
        echo '失敗しました';
    }
} else {
    echo 'ファイル形式が不正です';
}

?>