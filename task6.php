<?php

// 初項a 公差d 項数n が与えられたとき、長さnの等差数列を出力せよ。
// [実行結果例]
// a = 2, d = 3, n = 10 のとき
// 2 5 8 11 14 17 20 23 26 29
$a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_INT);
$d = filter_input(INPUT_POST, 'd', FILTER_VALIDATE_INT);
$n = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);
$errors = array();

// $a = $_POST['a'];
// $d = $_POST['d'];
// $n = $_POST['n'];

// var_dump($a);
// var_dump($d);
// var_dump($n);

if (is_numeric($a)&is_numeric($d)&is_numeric($n))
{
  for ($i=$a; $i<=$a+$d*$n-$d; $i=$i+$d)
  {
    echo $i . " ";
  }
}
else
{
  $errors['n'] = '※a、d、nにはそれぞれ数字を入力してください';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>等差数列</title>
  </head>
  <body>
  <p1><br>各欄に数字を入力してください</p1>
    <form action="" method="post">
    <!-- a,d,nに数字を入れた時にNotice: Undefined index: n in /var/www/html/Task/task6/task6.php on line 43 が表示される-->
    <?php if ($errors['n']) : ?>
      <?php echo htmlspecialchars($errors['n'], ENT_QUOTES, "UTF-8"); ?><br>
    <?php endif; ?>
      a: <input type="text" name="a">
      d: <input type="text" name="d">
      n: <input type="text" name="n">
      <input type="submit" value="送信">
    </form>
  </body>
</html>
