<?php

declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ostad</title>
</head>

<body>
  <?php


  //php strict mode


  function playlist(): array
  {
    return ['Diced Pineapple', 'Formation', 'Thinking Out Loud'];
  }

  print_r(playlist());

  // echo age(90);

  echo "<br>";

  function sum(...$numbers)
  {
    echo array_sum($numbers);
  }
  sum(3, 2, 1, 6, 7, 8, 9);

  echo "<br>";

  function sum2(...$nums)
  {
    echo $nums[0];
  }
  sum(3, 4, 1, 2, "8", 0);

  echo "<br>";

  $bio = function ($fname, $lname, $gradu = "Engineering") {
    $fname = $fname;
    $lname = $lname;
    $gradu = $gradu;
    echo "Name : " . $fname . $lname . " And my graduation is : " . $gradu;
  };

  $bio("Md. ", "Parvaz");

  echo "<br>";

  function sum3($a, $b)
  {
    echo $a + $b;
  }

  function calculate($num1, $num2, $callback)
  {
    return $callback($num1, $num2);
  }

  $result = calculate(5, 3, 'sum3');

  echo "<br>";

  function isAdult(int $age): bool
  {
    return $age >= 18;
  }
  echo isAdult(11);
  echo "<br>";
  function sum4($num1, $num2): int|string
  {
    return $num1 + $num2;
  }
  echo sum4("33", "20")





  ?>
</body>

</html>

$veg = 'A, B, C, D, E';
$veg_arr = explode(', ',$veg);
print_r($veg_arr);

echo "\n";

$veg_str = join(', ', $veg_arr);
echo $veg_str;
