<?php
/** 共通で使うものを別ファイルにしておきましょう。*/

//DB接続関数（PDO）
function db_con(){
	try {
	//github上げる用
	$pdo = new PDO('mysql:dbname=shoheikoya_gs_db;host=mysql543.db.sakura.ne.jp;charset=utf8','shoheikoya','koya7toho');

	} catch (PDOException $e) {
	  exit('データベースに接続できませんでした。'.$e->getMessage());
	}
	return $pdo;
}


//SQL処理エラー

function qerror($stmt){
	 $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}


/**
* XSS
* @Param:  $str(string) 表示する文字列
* @Return: (string)     サニタイジングした文字列
*/
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}


?>
