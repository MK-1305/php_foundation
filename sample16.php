<?php
$news = file_get_contents('data/news.txt');
echo $news;

//ファイルの追記
$news = $news . "<br>追加のニュースです";
$success = file_put_contents('data/news.txt', $news);

if ($success !== false) {
    echo 'ニュースの追加が完了しました';
} else {
    echo 'ニュースの追加に失敗しました';
}

// readfile('data/news.txt');
?>

<!-- ただ表示させたい時はreadfile、参照するファイルを使って何かしたい時はfile_get_contentsを使う -->