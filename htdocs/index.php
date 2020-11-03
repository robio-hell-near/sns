<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>掲示板</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
    
<header>

<h1>掲示板</h1>
    
</header>
    
<warapper>
    
<main>

<form action="kanryou.php" method="post">
<p>名前(必須)</p>
<input type="text" name="a">
<p>コメント(必須)</p>
<textarea name="b"></textarea>
<input type="submit" value="送信">
<br><br>
</form>

<div id="dai"><h3>コメント一覧</h3></div>
<br>

<?php
    
$db = new PDO("mysql:host=localhost;dbname=keiji", "root", "root");
    
$n = $db -> query("SELECT * FROM tb ORDER BY no DESC");
while($i = $n -> fetch()) {
    print "{$i['no']}: {$i['name']} {$i['time']}<br>"
        .nl2br($i['messege'])."<hr>";
}
    
?>  

</main>
    
<side>

<h3>管理人:チック君</h3>    
    <div class="imgm"><img src="img/denken.jpg"></div>
<p>低学歴とヘルニアで人生ハードモード☑　ICTと電子工作とブログやりつつ4コマ漫画作成予定で人生のラビリンスに迷い込み中☑　都知事がストライクゾーン☑</p>
    
<h3>電検三種ブログ</h3>
<div class="img"><a href="https://denkenmusic.com" target="_blank" rel="noopener"><img src="img/denken.jpg"></a></div>
    
<h3>特命工作員R</h3>
<div class="img"><a href="https://mission-ro.com" target="_blank" rel="noopener"><img src="img/mission.jpg"></a></div>
    
</side>
    
</warapper>    

<footer>
    
<p>チック君.com</p>    

</footer>
    
</body>

</html>