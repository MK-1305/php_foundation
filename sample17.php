<!-- 他のwebサイトの更新を表示するときにxmlもfeedを参照する -->
<?php
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item):
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?><br>
<?php
endforeach;
?>