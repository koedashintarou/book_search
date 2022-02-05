<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>チャット</title>
</head>
<body>
<p>何かしゃべって！</p>
<form>
<input type="text" name="a">
<input type="submit" value="送信するよ!">
</form>

<?php
if(isset($_GET["a"])){
 $f=fopen("chat.txt","at");
 $mozi=htmlspecialchars($_GET["a"],ENT_QUOTES);
 fwrite($f,$mozi."\n");
 fclose($f);
}

print "<pre>";
readfile("chat.txt");
print "</pre>";
?>

</body>
</html>
