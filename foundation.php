基礎知識

マニュアルの()は引数、[]はオプション、:の後ろが出力

検索するときは php「要素」「やりたいこと」

配列呼び出し方
1行の時に左から3番目なら$array(2)

$array_2 = [
	[‘赤’, ’青’, ‘黄’],
	[‘緑’, ‘紫’, ‘黒’]
];

紫を出力したい場合は
echo $array_2[1][1];
（上の列から数えた後、横の列を数える）


var_dumpをecho'<pre>'で挟むと出力が縦になり見やすくなる

%は割った余りをだす

== 一致
=== 型も一致(できるだけこっち)

!== 90 90ではない時

データが入ってるかどうか（asset, empty, is_null）
if(!empty($test)) {
	echo ‘変数は空です’
}
elseはあまり使わないように!を上手く使う

&& かつ
|| または

三項演算子
（if elseより記述量が少なくて済む）＊多用は可読性を下げるので注意！
$math = 80

$comment = $math > 80 ? ‘good’ : ‘not good’;

echo $comment

$mathが80より大きかったらgood、そうでなかったらnot goodを返す

foreach 

バリューのみ表示される
foreach($members as $member) {
	echo $member;
} 
複数形 as 単数形で書く（単数形の方は何でもいいが読みやすいように単数形にする）

キーとバリューそれぞれ表示
foreach($members as $key => $value) {
	echo $key . ‘は’ . $value . ‘です’;
}

多段階の配列を展開したい時はforeachの中にもう一つforeachを書く
foreach($members_2 as $member_1){
	foreach($member_1 as $member => $value)
	echo $member . ‘は’ . $value . ‘です’;
}

for（繰り返す数が決まっていたら）

for($i =  0; $i < 10; $I++){

	if($I === 5){
	brake; 5になったら処理を止める
	continue;　5を飛ばして処理する
	『あまり使わないようにする』
	}
	echo $i;
}

while （繰り返す数が決まっていなかったら）

$j = 0;
while($j < 5) {
	echo $j;
	$j++;
}

do{echo $j;}
while($j < 5);
do whileはほぼ使わない

ユーザー定義関数

function test(引数：インプット（処理に必要な値）) {
	処理

	return 戻り値：アウトプット
}

引数なし
戻り値なし

function test(){
	処理
	echo ‘テスト’;
}

test();

引数あり
戻り値なし

$comment = ‘コメント’;

Function getComment($string){
	echo $string;
}

getComment($comment);

引数なし
戻り値あり

function getNumberOfComment(){
	return 5;
}

$commentNumber = 8;
$commentNumber = getNumberOfComment();

echo $commentNumber;

引数2
戻り値あり

function sumPrice($int1, $int2) {
	$int3 = $int1 + $int2;
	return $int3;
}

$total = sumPrice(3,5);

echo $total;

組み込み関数（あらかじめ用意してある関数）

『文字列関数』

・文字列の長さ：strlen

$text = ‘abc’;

echo strlen($text);

日本語はマルチバイト（UTF-8：3~6バイト）なので
$text = ‘あいうえお’;

echo mb_strlen($text);

・文字列の置換：str_replace

$str = ‘文字列を置換します’;

echo str_replace(‘置換’, ‘ちかん’, $str);

文字列をちかんします（置換がひらがなになって出力される）

・指定文字列で分割：explode

$str_2 = ‘指定文字列で、分割します’;

explode(‘、’, $str_2);

配列で返ってくるのでvar_dunpで見る

・正規表現：preg_match

文字、数字、郵便番号、メアド（@が入ってるか）かどうかを確認する

$str_3 = ‘特定の文字列が含まれるかを確認する’;

echo preg_match(‘/文字列/’, $str_3);

数字で返ってくる

・指定文字列から文字列を取得する：substr

echo substr(abcd, 2);
acd（二番目を除いて出力される）

echo mb_substr(‘かきくけこ’, 2);
かくけこ

・配列に配列を追加する：array_push

$array = [‘りんご’, ‘みかん’];

array_push($array, ‘ぶどう’, ‘なし’);

var_dump($array);

・関数名の付け方

checkPostalCode()：camelCase
check_postal_code：snakeCase

・郵便番号かどうか判別する関数を作る

$postalCode = ‘123-4567’;

function checkPostalCode($str){
	$replaced = str_replace(‘-’, ‘’, $str);
	$length = strlen($replaced);

	if($length === 7){
		return true;
	}
		return false;
}

var_dump(checkPostalCode($postalCode));

・変数のスコープ（有効範囲）

$globalVariable = ‘グローバル変数です’;
//variableは変数という意味

function checkScope(){
	$localVariable = ‘ローカル変数です’;
	echo $localVariable;
}

echo $globalVariable;
echo $localVariable; //関数の中でしか使えないので出力できない

checkScope(); //関数を実行する事で関数ないの変数が使える

・ファイルの読み込み

require(); require_once(); エラー
include(); include_once(); 警告

・ディレクトリとファイルの絶対パスを表示

echo __DIR__;
echo __FILE__;