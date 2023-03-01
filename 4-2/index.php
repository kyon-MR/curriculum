<?php 
// セッション開始
require_once('getData.php');
$data = new getData();
$userdata = $data->getUserData();
$postdata = $data->getPostData()->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title>PHP</title>
</head>
<body>
  <div class="header">
    <img src="./img/1599315827_logo.png" alt="ロゴ" width="200" height="120">
    <div class="head1 hd_right">
      ようこそ<?php echo $userdata['last_name'].$userdata['first_name']?>さん
    </div>
    <div class="head2 hd_right">
    最終ログイン日<?php echo $userdata['last_login']?>:
    </div>
  </div>
  <table>
    <tr>
      <th>記事ID</th>
      <th>タイトル</th>
      <th>カテゴリ</th>
      <th>本文</th>
      <th>投稿日</th>
    </tr>
    <?php
      foreach($postdata as $post){
    ?>
      <tr>
      <td><?php echo $post['id']?></td>
      <td><?php echo $post['title']?></td>
      <td><?php if($post['category_no'] === 1) {
        echo '食事';
      } else if($post['category_no'] === 2) {
        echo '旅行';
      } else {
        echo 'その他';
      } ?> </td>
      <td><?php echo $post['comment']?></td>
      <td><?php echo $post['created']?></td>
      </tr>
      <?php } ?>
  </table>
  <div class="footer">
    Y&I Group, Inc.
  </div>
</body>
</html>