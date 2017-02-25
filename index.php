<?php
echo "Домашнее задание №1" . "<br><br>";

echo "Задание #1" . "<br>";
$name = "Павел";
$age = 32;
echo '"' . "Меня зовут: " . $name . '"' . "<br>";
echo '"' . "Мне " . $age . " года" . '"' ."<br>";
echo '“!|\/’”' . "\\" ."<br><br>";

     echo "Задание #2" . "<br>";
     $all_pic = 80;
     $fl_pic = 23;
     $pen_pic = 40;
     echo "Условие задачи:" . "<br>";
     echo "На школьной выставке  " . $all_pic . " рисунков." . "<br>";
     echo $fl_pic . " из них выполнены фломастерами, " . $pen_pic . " карандашами, а остальные — красками." . "<br>";
     echo "Сколько рисунков выполнено красками на школьной выставке?" . "<br>";
     echo "Решение:" . "<br>";
	 $a=$all_pic-$fl_pic-$pen_pic;
     echo $all_pic . "-" . $fl_pic . "-" . $pen_pic . "=" . $a . " рисунков" . "<br>";
     echo "Ответ:" . $a . " рисунков" . "<br><br>";

          echo "Задание #3" . "<br>";
          define("GREETING", "Welcome to Loft!");
          echo GREETING . "<br><br>"; // не совсем понятен смысл этого задания //

 echo "Задание #4" . "<br>";
$age4 = 70;
if (18 <= $age4 and $age4<= 65) { echo "Вам   еще работать   и   работать." . "<br><br>"; }
elseif ($age4 >= 65) { echo "Вам   пора   на   пенсию" . "<br><br>"; }
    elseif ($age4 <= 17) { echo "Вам   ещё   рано   работать" . "<br><br>"; }
        else { echo "Неизвестный   возраст" . "<br><br>"; } //не ясно к чему применимо

        echo "Задание #5" . "<br>";
        $day  = 5;
switch ($day) {
    case 1<=$day and $day<=5:
        echo "Это   рабочий   день" . "<br><br>";
        break;
    case 6<=$day and $day<=7:
        echo "Это   выходной   день" . "<br><br>";
        break;
    default:
        echo "Неизвестный   день" . "<br><br>";
}

echo "Задание #6" . "<br>";
$bmw = array("X5", "120", "5", "2015");
echo " CAR bmw " . "<br>" . $bmw[0] . " - " . $bmw[1] . " - " . $bmw[2] . " - " . $bmw[3] . "<br>";
$toyota = array("RAV4", "110", "5", "2016");
echo " CAR toyota " . "<br>" . $toyota[0] . " - " . $toyota[1] . " - " . $toyota[2] . " - " . $toyota[3] . "<br>";
$opel = array("Astra", "100", "5", "2010");
echo " CAR opel " . "<br>" . $opel[0] . " - " . $opel[1] . " - " . $opel[2] . " - " . $opel[3] . "<br><br>";
// не ясно, как объединить три массива в один многомерный массив и потом вывести//
// $supercars = array ($bmw , $toyota , $opel); - так чтоли?//

echo "Задание #7" . "<br>";
echo "<table><tr>";
for ($i = 1; $i<=10; $i++) {
    for ($j = 1; $j<=10; $j++)
        if ($i%2==0 and $j%2==0) {echo "<td>" . "(" . ($i*$j) . ")" . "</td>";}
            elseif ($i%2!=0 and $j%2!=0) {echo "<td>" . "[" . ($i*$j) . "]" . "</td>";}
                else echo "<td>" . ($i*$j) . "</td>";
if ($i != 10) echo "</tr><tr>";
};
echo "</tr></table>" . "<br><br>";

echo "Задание #8" . "<br>";
$str = "push your arrow through the air";
echo $str . "<br>";
$str1 = array("push", "your", "arrow", "through", "the", "air");
echo $str1[0] . "_" . $str1[1] . "_" . $str1[2] . "_" . $str1[3] . "_" . $str1[4] . "_" . $str1[5] . "<br>";
$arrlength = count($str1);
$x = 0;
                            while($x < $arrlength) {
                            echo $str1[$x] . "_";
                            $x++;
                            }
?>