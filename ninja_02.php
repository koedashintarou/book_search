<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>送受信</title>
</head>
<body>

<form>
<input type="text" name="a">
<input type="submit" value="送信するよ！">
</form>

<?php
print isset($_GET["a"])?$_GET["a"]."でござる":"何かしゃべって！";
?>
<img src="nin.gif">
</body>
</html>
