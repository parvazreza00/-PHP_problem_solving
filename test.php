<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Document</title>
 <style>
   /*Add your css here  */
   /* task 1 */
    .paragraph{
        font-size:25px;
        color:blue;
        text-transform:uppercase;
    }
   /*Add your css here  */
 </style>
  </head>
  <body>
 <p class="paragraph">I am a Laravel Developer</p>

 <?php
//  task 2
$num1 = 55;
$num2 = 75;
$sum = $num1 + $num2;
printf( "Sum of %d and %d is = %d", $num1, $num2, $sum );

echo "<br>";

// task 3
$age = 30;
$result = ( $age >= 18 && $age < 65 ) ? "Eligible" : "Not Eligible";
echo $result;

?>
  </body>
</html>