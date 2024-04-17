<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    
    <!--拡大できないようにするレスポンシブ-->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Dot.Donut</title>
    <link rel ="stylesheet" href="home.css">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--ページ内リンク-->
    <script src="js/jump.js"></script>
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="header-list">
        <header>
            <nav>
            <ul>
                <li><a href="index.html" class="btnlist">dot.donuts</a></li>
                <li><a href="#products" class="btnlist">products</a></li>
                <li><a href="#event" class="btnlist">event</a></li>
                <li><a href="online.php" class="btnlist"><div class="online">online shop</div></a></li>
                <li><a href="#about" class="btnlist">pickup</a></li>
                <li><a href="#store" class="btnlist">store</a></li>
            </ul>
            </nav>
        </header>
</div>
    <?php if(isset($warning)){ ?>
    <div class="warning"><p><?= $warning ?></p></div>
    <?php } ?>
    <form method="POST" action="sum.php">
        <div class="online-shop" id="online shop">
            <h2>online shop</h2>
            <div class="d-contents">
                <div class="d-box">
                <img class="d-img" src="img/do_red.png" width="300" height="300px" alt="do_red" >
                <div class="d-text"><p>strawberry</p></div>
                <div class="price"><p>180円</p></div>
                <input id="number" type="number" min="0" name="str">
                </div>
                <div class="d-box">
                <img class="d-img" src="img/do_white.png" width="300" height="300px"alt="do_white" >
                <div class="d-text"><p>white</p></div>
                <div class="price"><p>200円</p></div>
                <input id="number" type="number" min="0" name="whi">
                </div>
                <div class="d-box">
                <img class="d-img" src="img/do_choco.png" width="300" height="300px"alt="do_choco" >
                <div class="d-text"><p>chocolate</p></div>
                <div class="price"><p>190円</p></div>
                <input id="number" type="number" min="0" name="cho"><br>
                <input id="cal" type="submit" value="購入">
                </div><br>
            </div>     
    <form>

    </div>
</body>
</html>