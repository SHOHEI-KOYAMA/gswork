<?php
// $text = $_POST['text'];
// echo("saerch.phpスタート");
require_once("phpQuery-onefile.php");
$keyword = $_POST['keyword'];

$url_from_peatix = "http://peatix.com/search?q=".$keyword."&country=JP&l.ll=35.6427%2C139.7677&l.text=Tokyo&p=1&size=10&v=3.4&dr=";

$html = file_get_contents($url_from_peatix);
$events_html = phpQuery::newDocument($html);

// $jsonData = [];
// $events_html['.event-search-results'] ->find('.event-list');

foreach ($events_html['.event-list__medium']->find('.event-thumb') as $event){

  $event_html = pq($event)->html();
	$jsonData[] = ['event' => $event_html];

}

$url_from_letsenjoytokyo = "http://www.enjoytokyo.jp/search/event/?ename=".$keyword;

$html = file_get_contents($url_from_letsenjoytokyo);
$events_html = phpQuery::newDocument($html);

// $jsonData = [];
// $events_html['.event-search-results'] ->find('.event-list');

foreach ($events_html['#result_list01']->find('li') as $event){
  // imgタグの各srcに、http://www.enjoytokyo.jp/を追加したい。
  pq('script')->remove();
  // pq('img')->remove();
  $origin_src = pq($event)->find('img')->attr('src');
  $fixed_src = 'http://www.enjoytokyo.jp/'.$origin_src;
  pq($event)->find('img')->attr('src', $fixed_src);

  $origin_src = pq($event)->find('a')->attr('href');
  $fixed_src = 'http://www.enjoytokyo.jp'.$origin_src;
  pq($event)->find('a')->attr('href', $fixed_src);
  pq($event)->find('a')->attr('target', 'blank');
  pq('.clfix')->remove();
  pq('.rl_shop_access')->remove();

  
  $event_html = pq($event)->html();
  $jsonData[] = ['event' => $event_html];
}


// foreach ($area2['#areaShopList']->find('article') as $shop){

//   // echo($shop);
//   //店名
//   $shopname = pq($shop)->html();
//   //タイトル
//   // $h1 = pq($shop)->find('h1')->text();
//   //配列に格納
//   // $jsonData[] = ['title' => $h1, 'date' => $shopname];
// 	$jsonData[] = ['shopname' => $shopname];
// }

// foreach ($area3['#areaShopList']->find('article') as $shop){

//   // echo($shop);
//   //店名
//   $shopname = pq($shop)->html();
//   //タイトル
//   // $h1 = pq($shop)->find('h1')->text();
//   //配列に格納
//   // $jsonData[] = ['title' => $h1, 'date' => $shopname];
// 	$jsonData[] = ['shopname' => $shopname];
// }

 
//json を出力
header("Content-Type:application/json; charset=utf-8");
echo json_encode($jsonData, JSON_UNESCAPED_UNICODE);


?>
