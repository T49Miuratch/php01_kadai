<?php

//ファイルを読み込む

$data = file_get_contents('data/data.txt');

//読みこんだファイルをブラウザに表示する
echo nl2br($data);

?>