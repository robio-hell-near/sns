<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>掲示板</title>
<link rel="stylesheet" href="css/style2.css">
</head>

<body>
  
<?php
    
if(!empty($_POST["a"]) && !empty($_POST["b"])) {
$a = htmlspecialchars($_POST["a"], ENT_QUOTES);
$b = htmlspecialchars($_POST["b"], ENT_QUOTES);
    
$db = new PDO("mysql:host=localhost;dbname=keiji", "root", "root");
    
$db -> query("INSERT INTO tb1(no, name, messege, time)
             VALUES(NULL, '$a', '$b', NOW())");
   
print "<h1>コメント送信完了しました</h1>";
print "<p><a href=index.php>掲示板へ戻る</a></p>";
    
} else {
print "<h1>※フォームが入力されていません</h1>";
print "<p><a href=index.php>掲示板へ戻る</a></p>";    
}

?>  
    
</body>

</html>