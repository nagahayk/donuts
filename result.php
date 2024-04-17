<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>選んだドーナツ</title>
 <link rel ="stylesheet" href="result.css">

      <!--google font-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h2>選んだドーナツ</h2>
<div class="d-contents">
<div class="d-content1">

<?php if(isset($str)){ ?>
  <div class="d-box">
  <img class="d-img" src="img/do_red.png" width="100" height="100px" alt="do_red" >
  </div>
  <?php } ?>

  <?php if(isset($whi)){ ?>
  <div class="d-box">
  <img class="d-img" src="img/do_white.png" width="100" height="100px"alt="do_white" >
  </div>
  <?php } ?>
  
  <?php if(isset($cho)){ ?>
  <div class="d-box">
  <img class="d-img" src="img/do_choco.png" width="100" height="100px"alt="do_choco" >
  </div>
  <?php } ?>
</div>

<div class="d-content2">

<?php if(isset($str)){ ?>
  <div class="d-text">
    <p>strawberry</p>
    <div class="sum_do">個数：<?= $str ?></div>
  </div>
  <?php } ?>

  <?php if(isset($whi)){ ?>
  <div class="d-text">
    <p>white</p>
    <div class="sum_do">個数：<?= $whi ?></div>
  </div>
  <?php } ?>

  <?php if(isset($cho)){ ?>
  <div class="d-text">
    <p>chocolate</p>
    <div class="sum_do">個数：<?= $cho ?></div>
  </div>
  <?php } ?>

  <div class="d-text">
    <div class="sumPrice">
      総個数：<?php print($num); ?>個<br>
      会計：<?php print($price); ?>円</div>
  </div>
</div>
</div> 
   
</body>
</html>