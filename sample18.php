<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);
// jsonはそのまま読み込めないので参照した後にdecodeが必要

foreach ($json->items as $item):
?>
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>