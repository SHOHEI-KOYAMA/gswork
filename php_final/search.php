<?php
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
// $destination = $_POST["destination"];
$address = $_POST["address"];
$arrival = $_POST["arrival"];
$departure = $_POST["departure"];

$gender = $_POST["g1"];//mens or lady's
$purpose = $_POST["r1"];//business or Leisure
$size = $_POST["s1"]; // s,m,l,xl
$preference = $_POST["p1"];//new,used, either way

//0.外部ファイル読み込み
include("functions.php");
$pdo = db_con();

//1.  DB接続します

//２．データ登録SQL作成
if($preference == "either"){
    $stmt = $pdo->prepare("SELECT * FROM clothes_table WHERE mens_ladies = :gender AND situation = :purpose AND size = :size");
    $stmt->bindValue(":gender",$gender,PDO::PARAM_STR);
    $stmt->bindValue(":purpose",$purpose,PDO::PARAM_STR);
    $stmt->bindValue(":size",$size,PDO::PARAM_STR);
} else {
    $stmt = $pdo->prepare("SELECT * FROM clothes_table WHERE mens_ladies = :gender AND situation = :purpose AND size = :size AND new_or_used = :preference");
    $stmt->bindValue(":gender",$gender,PDO::PARAM_STR);
    $stmt->bindValue(":purpose",$purpose,PDO::PARAM_STR);
    $stmt->bindValue(":size",$size,PDO::PARAM_STR);
    $stmt->bindValue(":preference",$preference,PDO::PARAM_STR);
}
$status = $stmt->execute();

//３．データ表示
$view = [];
if($status==false){
  //execute（SQL実行時にエラーがある場合）
 qerror($stmt);
 
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_OBJ)){
    // $view[] = $result["id"];
    $view[] = json_encode($result);
    // $view[0]=$result[0]
      }
}
// $search_result = implode( ',', $view );
// echo $search_result;
// $datas = json_encode($view);
// echo $datas;

$html = ["tops"=>"","bottoms"=>""];
//$veiwはArrayの中にオブジェクトが入っている。
//$resultはオブジェクト型になる
$num_cloth = 0;
foreach ($view as $key => $result) {
  $num_cloth++;
  $data = json_decode($result,true);
  // print_r($data);
  if($data["category"] == "pants"){
    $html["bottoms"] .= '<img src="'.$data["file_info"].'" class="img-responsive">';
  } else {
    $html["tops"] .= '<img src="'.$data["file_info"].'" class="img-responsive">';
  }
}

$_SESSION["result"]=$html;

// echo $datas;
// header("Location: index.php");
  // exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>トップページ</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formdesign.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <!-- main contents -->
    <div id="main">
      <!-- Navigation -->
      <?php include (dirname(__FILE__).'/navbar.php'); ?>
      <!-- /Navigation -->
      <div class="wrapper-main">
        <div class="search-set wrapper text-center" style="margin: 0; background:white;">
          <form class="form-wrapper" method="post" action="search.php">
            <input type="hidden" name="name" value="<?=$name?>">
            <input type="hidden" name="email" value="<?=$email?>">
            <div class="term">
              <fieldset>
              <h3>The Address You Stay</h3>
              <input type="text" name="address"　value="<?php print($address)?>">
              <div class="schedule">
                <input class="date" type="date" name="arrival">
                <h3>To</h3>
                <input class="date" type="date" name="departure">
              </div>
              </fieldset>
              <p class="open-pref" style="margin:0px;padding:5px;" data-toggle="collapse" data-target=".pref-set"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></p>
            </div>
            <div class="pref-set collapse">
              <fieldset>
                <h3>Purpose to stay</h3>
                <div class="row cf">
                  <div class=" col">
                    <input type="radio" name="r1" id="r1" checked="" value="Leisure">
                    <label for="r1">
                      <h4>Leisure</h4>
                    </label>
                  </div>
                  <div class=" col">
                    <input type="radio" name="r1" id="r2" value="business"><label for="r2">
                      <h4>Business</h4>
                    </label>
                  </div>
                  <!-- <div class=" col">
                    <input type="radio" name="r1" id="r3"><label for="r3">
                      <h4>Both</h4>
                    </label>
                  </div> -->
                </div>
                <div class="schedule">
                  <div class="small-pref">
                    <h3>Gender</h3>
                    <div class="row cf">
                      <div class="col">
                        <input type="radio" name="g1" id="g1" value="mens">
                        <label for="g1">
                          <h4>Men's</h4>
                        </label>
                      </div>
                      <div class=" col">
                        <input type="radio" name="g1" id="g2" value="ladys" checked="">
                        <label for="g2">
                          <h4>Ledy's</h4>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="small-pref">
                    <h3>Clothes Size</h3>
                    <div class="row cf">
                      <div class=" col">
                        <input type="radio" name="s1" id="s1" value="s">
                        <label for="s1">
                          <h4>S</h4>
                        </label>
                      </div>
                      <div class=" col">
                        <input type="radio" name="s1" id="s2" value="m" checked="">
                        <label for="s2">
                          <h4>M</h4>
                        </label>
                      </div>
                      <div class=" col">
                        <input type="radio" name="s1" id="s3" value="l">
                        <label for="s3">
                          <h4>L</h4>
                        </label>
                      </div>
                      <div class=" col">
                        <input type="radio" name="s1" id="s4" value="xl">
                        <label for="s4">
                          <h4>XL</h4>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="schedule">
                  
                </div>
                <h3>Preference of Clothes Type</h3>
                <div class="row cf mid-pref">
                  <div class="four col">
                    <input type="radio" name="p1" id="p3" value="new">
                    <label for="p3">
                      <h4>New<br>(Just like you bought)</h4>
                    </label>
                  </div>
                  <div class="four col">
                    <input type="radio" name="p1" id="p4" value="used">
                    <label for="p4">
                      <h4>Used<br>(Eco, not expensive, clean)</h4>
                    </label>
                  </div>
                  <div class="four col">
                    <input type="radio" name="p1" id="p5" value="either" checked="">
                    <label for="p5">
                      <h4>Either Way<br>(custmized based on the our stock)</h4>
                    </label>
                  </div>
                </div>
                <input id="update-button" type="submit" value="UPDATE" name="UPDATE">
              </fieldset>
            </div>
          </form>
        </div>
        <div id="result">
          <!-- TOPS SECTION -->
          <div class="panel panel-default reserve-panel" style="margin-bottom:0px;border-radius: 0px;">
            <div class="panel-heading">TOPS For <span class="">7</span>days</div>
              <div id="tops-section" class="panel-body">
                <?=$html["tops"]?>
              </div>
          <!-- /TOPS SECTION -->
          <!-- BOTTOMS SECTION -->
            <div class="panel-heading">BOTTOMS For <span class="">7</span>days</div>
            <div class="panel-body">
              <div id="bottoms-section" class="panel-body">
                <?=$html["bottoms"]?>
              </div>
            </div>
          <!--/BOTTOMS SECTION -->
          <!-- OTHERS SECTION -->
            <div class="panel-heading">OTHER Items recommended for you</div>
            <div class="panel-body">
              <p>...</p>
            </div>
        <!-- OTHERS SECTION -->
          </div>
          <div class="reserve">
            <form method="post" action="reserve.php">
              <input type="hidden" name="num_cloth" value="<?=$num_cloth?>">
              <input type="hidden" name="name" value="<?=$name?>">
              <input type="hidden" name="email" value="<?=$email?>">
              <input type="hidden" name="address" value="<?=$address?>">
              <input type="hidden" name="arrival" value="<?=$arrival?>">
              <input type="hidden" name="departure" value="<?=$departure?>">
              <input type="submit" value="RESERVE THESE" id="reserve_button">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /main contents -->
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <script src="js/form.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>  
    </body>
</html>





