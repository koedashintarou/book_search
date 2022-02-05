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



// ファイルを変数に格納
$filename = 'chat.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
 
  // ファイルを読み込んだ変数を出力
  print "<hr>";
  echo $txt.'<br>';
  
 
}
 
// fcloseでファイルを閉じる
fclose($fp);
?>

</body>
</html>
