<?php
session_start();
if( isset($_SESSION['userid']) != "") {
  // ログイン済みの場合はリダイレクト
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ログインページ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>ログインページ</h1>
                <form method="post" action="logincheck.php">
                  <div class="jumbotron">
                   <fieldset>
                   <!--  <legend>フリーアンケート</legend> -->
                     <label>ユーザーID:<input type="text" name="lid" autofocus required></label><br>
                     <label>パスワード:<input type="password" name="lpw" required></label><br>
                     <input type="submit" value="送信">
                    </fieldset>
                  </div>
                </form>
                <dl>
                    <dd><a href="registration.php">新規会員登録はこちら</a></dd>
                    <dd><a href="adminlogin.php">管理者ログインはこちら</a></dd>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
