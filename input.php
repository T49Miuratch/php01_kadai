<html>

<head>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Darumadrop+One&family=Dela+Gothic+One&family=Kaisei+Decol:wght@700&family=Potta+One&family=RocknRoll+One&family=VT323&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">

<meta charset="utf-8">
    <title>画伯ゲーム</title>
</head>

<body>

<!-- jQueryのライブラリを読み込む -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScriptのコードを読み込む -->
<script src="js/gahaku.js"></script>


<div class="title">画伯ゲーム</div>
<div class="subtitle">do you have an art mind?</div>

<div class="intro">君はアートの心を持っているか？　アートの心があれば、なにを描いたか一目瞭然。さあ皆で一斉に答えを書こう。ゲームマスターはその答えをそっと確認しよう。全員一致でごほうび。一人でも間違えれば、罰ゲームが待っているぞ！</div>

<div class="input_base">

    <form action="write.php" method="post">
        プルダウンから作品を選ぼう！
        <select name="artno" class="input2" id="selectPhoto">
        <option value="art00" selected="selected">画伯ゲームスタート</option>
        <option value="art01">作品①</option>
        <option value="art02">作品②</option>
        <option value="art03">作品③</option>
        <option value="art04">作品④</option>
        <option value="art05">作品⑤</option>
        <option value="art06">作品⑥</option>
        <option value="art07">作品⑦</option>
        <option value="art08">作品⑧</option>
        <option value="art09">作品⑨</option>
        <option value="art10">作品⑩</option>
        </select>

<ul>
    <li id="art00">
    <img src="img/gahaku_img-00.png" alt="とてもかわいい鳥">
    <p>SEIICHI TANABE GAHAKU</p>
    </li>
    <li id="art01">
    <img src="img/gahaku_img-01.png" alt="とてもかわいい鳥">
    <p>■ヒント：レジェンド</p>
    </li>
    <li id="art02">
    <img src="img/gahaku_img-02.png" alt="つくね">
    <p>■ヒント：絶世の美女</p>
    </li>
    <li id="art03">
    <img src="img/gahaku_img-03.png" alt="ウルトラかわいい鳥">
    <p>■ヒント：同じ名前の町がある</p>
    </li>
    <li id="art04">
    <img src="img/gahaku_img-04.png" alt="ネギ塩レバー">
    <p>■ヒント：◯のつっぱり</p>
    </li>
    <li id="art05">
    <img src="img/gahaku_img-05.png" alt="とてもかわいい鳥">
    <p>■ヒント：いい声のナレがつく</p>
    </li>
    <li id="art06">
    <img src="img/gahaku_img-06.png" alt="とてもかわいい鳥">
    <p>■ヒント：ゆるキャラ</p>
    </li>
    <li id="art07">
    <img src="img/gahaku_img-07.png" alt="つくね">
    <p>■ヒント：だいすき日本刀</p>
    </li>
    <li id="art08">
    <img src="img/gahaku_img-08.png" alt="ウルトラかわいい鳥">
    <p>■ヒント：あのストーリーのあいつ</p>
    </li>
    <li id="art09">
    <img src="img/gahaku_img-09.png" alt="ネギ塩レバー">
    <p>■ヒント：えもんにベッタリ</p>
    </li>
    <li id="art10">
    <img src="img/gahaku_img-10.png" alt="ネギ塩レバー">
    <p>■ヒント：毒入り危険</p>
    </li>
</ul>

        <p>お答え: <input type="text" class="input1" size="35" name="artname"></p>
        <p>お名前: <input type="text" class="input1" size="15" name="name"><input type="submit" class="submit_button" value="送信"></p>

    </form>

</div>

<div id="footer"> FUJIMANI PUBLISHING CO.,LTD.</div>

</body>

</html>
