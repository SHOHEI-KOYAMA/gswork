<?php
session_start();

// 取ってきたobjectデータから、表示するdiv要素を生成
$data = $_POST["result"];
$html = ["tops"=>"","bottoms"=>""];

foreach ($data as $result) {
	if($result["category"] == "pants"){
		$html["bottoms"] .= '<img src="'.$result["file_info"].'" class="img-responsive">';
	} else {
		$html["tops"] .= '<img src="'.$result["file_info"].'" class="img-responsive">';
	}
}

$datas = json_encode($html);

$_SESSION["result"]=$datas;
echo $datas;

?>