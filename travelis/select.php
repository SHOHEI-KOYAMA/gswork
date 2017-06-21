<?php
$name = $_POST["name"];
$email = $_POST["email"];
// $destination = $_POST["destination"];
$address = $_POST["address"];
$arrival = $_POST["arrival"];
$departure = $_POST["departure"];

$purpose = $_POST["r1"];//business or Leisure
$size = $_POST["s1"]; // s,m,l,xl
$preference = $_POST["p1"];//new,used, either way
//0.外部ファイル読み込み
include("functions.php");
$pdo = db_con();

//1.  DB接続します

//２．データ登録SQL作成
if($preference == "either"){
    $stmt = $pdo->prepare("SELECT * FROM clothes_table WHERE situation = :purpose AND size = :size");
    $stmt->bindValue(":purpose",$purpose,PDO::PARAM_STR);
    $stmt->bindValue(":size",$size,PDO::PARAM_STR);
} else {
    $stmt = $pdo->prepare("SELECT * FROM clothes_table WHERE situation = :purpose AND size = :size AND new_or_used = :preference");
    $stmt->bindValue(":purpose",$purpose,PDO::PARAM_STR);
    $stmt->bindValue(":size",$size,PDO::PARAM_STR);
    $stmt->bindValue(":preference",$preference,PDO::PARAM_STR);
}
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
 qerror($stmt);
 
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= $result["category"];
  }
}

echo $view;
// header("Location: index.php");
  exit;
?>