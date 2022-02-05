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
$f=fopen("chat.txt","at");
fwrite($f,$_GET["a"]);
fclose($f);
?>

</body>
</html>
