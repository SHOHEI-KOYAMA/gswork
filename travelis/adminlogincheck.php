<?php
session_start();
include("functions.php");
//入力チェック(受信確認処理追加)

if(
  !isset($_POST["lid"]) || $_POST["lid"]=="" ||
  !isset($_POST["lpw"]) || $_POST["lpw"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$lid  = $_POST["lid"];
$lpw = $_POST["lpw"];
$pdo = db_con();

//2. DB接続します(エラー処理追加)


//３．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid = :a2 && lpw = :a3");
$stmt->bindValue(':a2', $lid,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

$val = $stmt->fetch();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
 qerror($stmt);

}else if($val["id"] == ""){
  
  echo "ユーザIDとパスワードが一致しません。".'<a href="adminlogin.php">ログインページに戻る</a>';

} else if($val["kanri_flg"] != 1){
	echo "入力したユーザーには管理者権限がありません。".'<a href="adminlogin.php">ログインページに戻る</a>';

} else if($val["kanri_flg"] ==1){
  $_SESSION['userid'] = $lid;
  $_SESSION['kanri_flg'] = $val["kanri_flg"];

  //５．index.phpへリダイレクト
  header("Location: admin.php");
  exit;
}
?>
