<?php
$number = $_POST['number'];
?>

<p><?php echo date("Y/m/d", time()); ?>の運勢は</p>
<p>選ばれた数字は<?php echo mt_rand(1, 9); ?>です</p>
<p>
  <?php   
  if ($number === 0) {
    echo "凶";
  } else if ($number >= 1 && $number <= 3) {
    echo "小吉";
  } else if ($number >= 4 && $number <= 6) {
    echo "中吉";
  } else if ($number >= 7 && $number <= 8) {
    echo "吉";
  } else {
    echo "大吉";
  }
  ?>
</p>