<?php 

  for ($sum=1; $sum <= 100; $sum++) {
    if ($sum%3 === 0 && $sum%5 === 0) {
      echo "FizzBuzz!!";
      echo '<br>';
    } elseif ($sum%3 === 0) {
      echo "Fizz!";
      echo '<br>';
    } elseif ($sum%5 === 0) {
      echo "Buzz!";
      echo '<br>';
    } else {
      echo $sum;
      echo '<br>';
    }
  }


?>