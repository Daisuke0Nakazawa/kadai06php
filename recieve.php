
<?php
$pitcher = $_POST['pitcher'];
$catcher = $_POST['catcher'];
$first = $_POST['first'];
$second = $_POST['second'];
$short = $_POST['short'];
$third = $_POST['third'];
$left = $_POST['left'];
$center = $_POST['center'];
$right = $_POST['right'];
?>
<html>

    <head>
        <meta charset="utf-8">
        <title>POST（受信）</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="menber">
            <p class="pitcherposi"><?= $pitcher ?></p>
            <p class="catcherposi"><?= $catcher ?></p>
            <p class="firstposi"><?= $first ?></p>
            <p class="secondposi"><?= $second ?></p>
            <p class="thirdposi"><?= $third ?></p>
            <p class="shortposi"><?= $short ?></p>
            <p class="leftposi"><?= $left ?></p>
            <p class="centerposi"><?= $center ?></p>
            <p class="rightposi"><?= $right ?></p>
        
        </div>
        
        <ul>
            <li><a href="index.php">投票へ戻る</a></li>
        </ul>
    </body>

</html>
