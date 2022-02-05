<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="">
    <label>数字１:
    <input type="string" name="a">
    </label><br>
  <label>数字2:
    <input type="string" name="b">
    </label><br>
    <input type="submit" value="処理">
  </form>

  <?php

print isset($_GET["a"])?"数字１は".$_GET["a"]:"";
print "<br>";


print isset($_GET["b"])?"数字２は".$_GET["b"]:"";
print "<br>";

$sum = $_GET['a'] + $_GET['b'];

 print isset($_GET["a"]) && isset($_GET["b"])?"数字１＋数字２は".$sum."です":"";
 print "<br>";

 $minus = $_GET['a'] - $_GET['b'];
 print isset($_GET["a"]) && isset($_GET["b"])?"数字１-数字２は".$minus."です":"";
 print "<br>";

 $time = $_GET['a'] * $_GET['b'];
 print isset($_GET["a"]) && isset($_GET["b"])?"数字１×数字２は".$time."です":"";
 print "<br>";

 $divided = $_GET['a'] / $_GET['b'];
 print isset($_GET["a"]) && isset($_GET["b"])?"数字１÷数字２は".$divided."です":"";
 print "<br>";

 if ($_GET['a']  % 2 == 0) {
  //偶数の場合の処理
print '数字１は偶数です';
} else {
  //奇数の場合の処理
  print '数字１は奇数です';
}

print "<br>";

if ($_GET['b']  % 2 == 0) {
  //偶数の場合の処理
print '数字2は偶数です';
} else {
  //奇数の場合の処理
  print '数字2は奇数です';
}
  ?>


</body>
</html>