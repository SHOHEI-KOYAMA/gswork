<?php
include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["lid"]) || $_POST["lid"]=="" ||
  !isset($_POST["lpw"]) || $_POST["lpw"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$name   = $_POST["name"];
$lid  = $_POST["lid"];
$lpw = $_POST["lpw"];
$pdo = db_con();

//2. DB接続します(エラー処理追加)
// try {
//   $pdo = new PDO('mysql:dbname=shoheikoya_gs_db;charset=utf8;host=localhost','root','root');
// } catch (PDOException $e) {
//   exit('DbConnectError:'.$e->getMessage());
// }


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw, kanri_flg, life_flg)VALUES(NULL, :a1, :a2, :a3,0, 1)");
$stmt->bindValue(':a1', $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $lid,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
 qerror($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: login.php");
  exit;
}
?>
