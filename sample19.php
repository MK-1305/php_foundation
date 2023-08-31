<?php
$json_sample = [
    "title" => "JSONサンプル",
    "items" => [
        "りんご",
        "みかん"
    ]
];

$json = json_encode($json_sample);
echo $json;
file_put_contents('json_sample.json', $json);
?>

<!-- encodeはコード化、decodeはコード化を解除するという意味 -->