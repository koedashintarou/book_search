<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>チャット</title>
</head>
<body>

<form>
<p>何かしゃべって！</p>
<input type="text" name="a">
   <select name= "feeling">
      <option value = "最高">最高</option>
      <option value = "いいね">いいね</option>
      <option value = "まあまあ">まあまあ</option>
      <option value = "よくない">よくない</option>
      <option value = "最悪">最悪</option>
    </select>
<input type="submit" value="送信">
</form>


<?php
if(isset($_GET["a"])){
 $f=fopen("chat.txt","at");
 $mozi=htmlspecialchars($_GET["a"],ENT_QUOTES);
 $txt = $_GET["a"] . "(気分は" . $_GET["feeling"] . "）<br>" .date("Y-m-d H:i:s");
 fwrite($f,$txt."\n");
 fclose($f);
}

if(isset($_POST["feeling"])) {
  // セレクトボックスで選択された値を受け取る
  $feeling = $_POST["feeling"];
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
  echo $txt;
  // echo "(気分は".$feeling.')<br>';
  // echo date('Y-m-d H:i:s');
}
// fcloseでファイルを閉じる
fclose($fp);
?>

</body>
</html>
