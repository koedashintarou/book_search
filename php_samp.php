<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>PHPファイルを確認する</title>
</head>
<body>

世界に1人　かけがえのないあなた<br>
<?php
$br= getenv("HTTP_USER_AGENT");
if (stristr($br , "Edge")) {
    print("あなたのブラウザはEdgeですね");
} elseif (stristr($br , "Chrome")) {
    print("あなたのブラウザはGoogle Chromeですね");
} elseif (stristr($br , "Firefox")) {
    print("あなたのブラウザはFirefoxですね");
} elseif (stristr($br , "Safari")) {
    print("あなたのブラウザはSafariですね");
} else {
    print("あなたのブラウザは知りません");
}
?>
</body>
</html>
