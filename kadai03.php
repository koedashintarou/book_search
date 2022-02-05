<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>基本</title>
</head>
<body>

<?php
print "Hello World";
print "<p>ジャンケンをしよ！</p>";

$a = rand(1,3);
if($a==1){
  print "<img src = 'gu.gif'>";
  print "グーだよ！パーの人が勝ち。";
} elseif($a==2){
  print "<img src = 'choki.gif'>";
  print "チョキだよ！グーの人が勝ち。";
} else {
  print "<img src = 'pa.gif'>";
  print "パーだよ！チョキの人が勝ち。";
}


?>



</body>
</html>
