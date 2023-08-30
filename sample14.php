<!-- 数字の書式を整えたいときにsprintf()を使う -->
<?php
$date = sprintf('%04d.%02d.%02d', 2022, 8, 30);
echo $date;
?>