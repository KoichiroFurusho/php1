<?php
// POSTを受け取る


$name = $_POST['name'];
$mail = $_POST['mail'];


if(isset($_POST["fruits"])) {
    // セレクトボックスで選択された値を受け取る
    $fruit = $_POST["fruits"];
  }

// POSTの場合はパスワードも送ってみる。

function h($str)
{
    return htmlspecialchars($str,ENT_QUOTES);
}


// ファイルに書き込み

$time = date('Y-m-d H:i:s');

$file =fopen('./data/data.txt','a');
fwrite($file,$time.'/'.$name.'/'.$mail .'/'.$fruit."\n");
fclose($file);


//文字作成


?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p>data/data.txt を確認しましょう！</p>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
