<?php

$artno = $_POST['artno'];
$name = $_POST['name'];
$artname = $_POST['artname'];
// ファイルに書き込み

$data = $artno . "回答者：" . $name . "この作品は…" . $artname . "を描いたものです！" . "\n";

file_put_contents('data/data.txt' , $data, FILE_APPEND)
//文字作成

?>


<html>

<head>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Kaisei+Decol:wght@700&family=Potta+One&family=RocknRoll+One&family=VT323&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">

<meta charset="utf-8">
    <title>画伯ゲームにファイナルアンサーしました！</title>
</head>

<body>

<!-- jQueryのライブラリを読み込む -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScriptのコードを読み込む -->
<script src="js/gahaku.js"></script>
<div class="input2">
    <h1>あなたの答えを投稿しました！</h1>
    <h2>ゲームマスターの答え合わせを待ちましょう！</h2>

    <ul>
        <li><a href="read.php">ゲームマスター専用ボタン</a></li>
        <li><a href="input.php">画伯ゲームのお題を選びに戻る</a></li>
    </ul>
</div>

</body>

</html>
