<link rel="stylesheet" href="styles.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$number = [80, 22, 20, 21];
$langueage = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"]; 
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$correctAns1 = 80;
$correctAns2 = "HTML";
$correctAns3 = "select";

?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach($number as $value) {?>
  <input type="radio" name="Ans1" value="<?php echo $value; ?>"><?php echo $value; ?>
  <?php } ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($langueage as $lgValue) {?>
  <input type="radio" name="Ans2" value="<?php echo $lgValue; ?>"><?php echo $lgValue; ?>
  <?php } ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($command as $cdValue) {?>
  <input type="radio" name="Ans3" value="<?php echo $cdValue; ?>"><?php echo $cdValue; ?>
  <?php } ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type="hidden" name="name" value="<?php echo $my_name; ?>"><?php echo $my_name; ?>
  <input type="hidden" name="correctAns1" value="<?php echo $correctAns1; ?>"><?php echo $correctAns1; ?>
  <input type="hidden" name="correctAns2" value="<?php echo $correctAns2; ?>"><?php echo $correctAns2; ?>
  <input type="hidden" name="correctAns3" value="<?php echo $correctAns3; ?>"><?php echo $correctAns3; ?>
  <br>
  <input type="submit" value="回答する">
  </form>