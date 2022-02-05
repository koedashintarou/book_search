<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>基本</title>
</head>
<body>

<?php
print "Hello World";
print "<p>ジャンケンしよ！</p>";
$a=rand(1,3);
if($a==1){
print "<img src= 'gu.gif'>";
}elseif($a==2){
print "<img src='choki.gif'>";
}else{
print "<img src='pa.gif'>";
}
?>

</body>
</html>
