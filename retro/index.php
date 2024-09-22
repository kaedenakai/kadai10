<?php
//0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ホーム</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <?=$_SESSION["name"]?>さん、こんにちは！
      <?php if($_SESSION["kanri_flg"]=="1"){ ?>
        <a class="navbar-brand" href="user.php">ユーザー登録</a>
        <a class="navbar-brand" href="user_select.php">ユーザー一覧</a>
      <?php } ?>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

    <h3>レトロスペクティブ大全</h3>
    <ul>
    <li><a href="touroku.php">振り返り手法を記録する</a></li>
    <li><a href="select.php">振り返り手法を参照する</a></li>
    </ul>
</body>
</html>
