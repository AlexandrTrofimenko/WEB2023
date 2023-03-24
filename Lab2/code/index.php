<h3> Task 1 </h3>

<?php
$very_bad_unclear_name="15 chicken wings";
$order=& $very_bad_unclear_name;
$order.=" So yummy ";
echo "<br>Your order is: $very_bad_unclear_name";
?>

<h3> Task 2 </h3>
<?php
$int=5;
echo "$int";
echo "<br>";
$float=7.0;
echo "$float";
echo "<br>";
echo $int+$float;
echo "<br>";
$last_month=1187.23;
$this_month=1089.98;
echo abs($last_month-$this_month)
?>

<h3> Task 11</h3>
<?php
$num_languages=4;
$months=11;
$days=$months*16;
$days_per_language=$days/$num_languages;
echo "$days_per_language";
?>

<h3> Task 12</h3>
<?php
echo 8**2;
?>

<h3> Task 13</h3>
<?php
$my_num=8;
$answer=$my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer/=2;
$answer -=$my_num;
echo $answer;
?>

<h3> Task 14</h3>
<?php
$a=10;
$b=3;
echo $a%$b;
echo "<br>";
if ($a%$b==0) {
    echo 'Делится';}
    echo 'Делится с остатком ' ;
    echo $a%$b;

?>
 
 <p> pow and sqrt </p>

 <?php
 $st=2**10;
 echo $st;
 echo "<br>";
 echo sqrt(245);
 echo "<br>";
 $array=Array(4,2,5,19,13,0,10);
 $sum=0;
 foreach ($array as $value)
    $sum+=pow($value,2);
echo sqrt($sum);
 ?>


<p> round </p>
<?php
echo round(sqrt(379),0);
echo "<br>";
echo round(sqrt(379),1);
echo "<br>";
echo round(sqrt(379),2);
echo "<br>";
$sqrt_576=Array('floor','ceil');
$sqrt_576['floor']=floor(sqrt(576));
$sqrt_576['ceil']=ceil(sqrt(576));
?>

<p> min&max </p>
<?php
$max=max(4,-2,5,19,-130,0,10);
echo $max;
echo "<br>";
$min=min(4,-2,5,19,-130,0,10);
echo $min;
echo "<br>";
?>

<p> random </p>
<?php
echo rand(1,100);
$arr=Array();
for ($i=0;$i<10;$i++)
    $arr[$i]=rand();
?>

<p> | | </p>
<?php
$a=5;
$b=9;
echo abs($a-$b);
echo "<br>";
$mas=Array(1,2,-1,-2,3,-3);
for ($i=0;$i<count($mas);$i++)
    if($mas[$i]<0)
        $mas[$i]=abs($mas[$i]);
?>

<p> Общее </p>
<?php
$c=8;
$count=0;
$mas=array();
for($i=1;$i<$c;$i++)
{
    if ($c%$i==0)
    {
        $mas[$count]=$i;  
        $count++;
    }
}
echo $c;
echo "<br> Делители:";
foreach($mas as $value)
{
    echo "$value ";
}
$mas_2=array(1,2,3,4,5,6,7,8,9,10);
$sum=0;
$count_2=0;
foreach($mas_2 as $value)
{
    $sum+=$value;
    $count_2++;
    if($sum>10)
    {
        echo "<br>$count_2";
        break;
    } 
}
?>

<h3> Task 15</h3>
<?php
function printStringReturnNumber()
{
    echo "Значение: ";
    return rand(1,1000);
}
$my_num = printStringReturnNumber();
echo $my_num;
?>

<h3> Task 16</h3>
<?php
function increaseEnthusiasm($a)
{
    return $a .= "!";
}
$str='Я люблю Сашу';
echo increaseEnthusiasm($str);

function repeatThreeTimes($a)
{
    $b=$a;
    for($i=0;$i<2;$i++)
    {
        $b .= "<br>$a";
    }
    return "<br>$b";
}
echo repeatThreeTimes($str);
echo repeatThreeTimes(increaseEnthusiasm($str));

function cut($a, $d = 10)
{
    $b = "";
    for($i = 0; $i < $d; $i++)
        $b .= $a[$i];
    return $b;
}
echo "<br>";
echo cut(repeatThreeTimes($str), 18);

/*$arr=array(1,2,3,4,5,6,7,8,9,10);
function recursiveOutput($a)
{
    echo $a[0]."<br>";
    array_slice($a, 0, 1);
    if(count($a) > 0)
        return recursiveOutput($a);
} 
recursiveOutput($arr);*/

$num = 58;
function sumNum($a)
{
    $arr = str_split($a, 1);
    $result = array_sum($arr);
    if($result > 9)
        return sumNum($result);
    else
        return $result;
}

echo "<br>";
echo sumNum($num);
?>

<h3> Task 17</h3>
<?php
$mas=array();
$d = 8;
for($i = 0; $i < $d; $i++)
{
    $mas[$i] = "";
    for($j = 0; $j < $i+1; $j++)
    {
        $mas[$i] .= "x";
    }
}
for($i = 0; $i < count($mas); $i++)
    echo $mas[$i] . "<br>";



function arrayFill($a,$b)
{
    $arr = array();
    for($i = 0; $i < $b; $i++)
    {
        $arr[$i] = "";
        $arr[$i] .= $a;
    }
    return $arr;
}
$arr = arrayFill('x',5);
for($i = 0; $i < count($arr); $i++)
{
    echo $arr[$i] . " ";
}

$arr2 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
for($i = 0; $i < count($arr2); $i++)
{
    $sum += array_sum($arr2[$i]);
}
echo $sum . "<br>";


$arr4 = array();
$count1 = 0;
for($i = 0; $i < 3; $i++)
{
    $arr3_help = array();
    for($j = 0; $j < 3; $j++)
    {
        $arr3_help[$j] = ++$count1;
        echo $arr3_help[$j] . "<br>";
    }
    $arr4[$i] = $arr3_help;
}


$arr4 = [2,5,3,9];
$result = $arr4[0] * $arr4[1] + $arr4[2] * $arr4[3];
echo $result . "<br>";


$user = array(
    'name' => 'Alexander', 
    'surname' => 'Trofimenko', 
    'patronymic' => 'Romanovich');
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "<br>", "<br>";


$date =array (
    'year' => '2023', 
    'month'=>'3' , 
    'day'=>'24');
echo $date['year'],'-',$date['month'], "-",$date['day'], "<br>", "<br>";


$arr4 = ['a', 'b', 'c', 'd', 'e'];
echo count($arr4) . "<br>";

echo end($arr4), " ",prev($arr4);
?>

<h2>
    Задание 18
</h2>

<?php
function one($a, $b)
{
    if($a + $b > 10)
        return true;
    else
        return false;
}


function two($a, $b)
{
    if($a === $b)
        return true;
    else
        return false;
}


$test = rand(0,1);
if(!$test)
    echo "верно <br>";


echo "<br>";
$age = rand (1, 200);
echo $age, " ";
if ($age > 99 || $age < 10){
    if ($age >99)
        echo'Число больше 99';
     else
        echo 'Число меньше 10';
}
else
{
  $arr = str_split($age, 1);
  $c = array_sum($arr);
  if ($c <= 9)
    echo 'Cумма цифр однозначна';
  else
    echo 'Cумма цифр двузначна';
}


$arr5 = [14,36,25];
if(count($arr5) == 3)
    echo "<br>" . array_sum($arr5);
?>

<h2>
    Задание 19
</h2>

<?php
$c = 'x';
$r = 1;
while ($r<=20)
{
  echo $c, "<br>";
  $c = $c.'x';
  $r +=1;
}
?>

<h2>
    Задание 20
</h2>

<?php
$arr6 = [6,34,26,12,84,4,24];
$result = array_sum($arr6) / count($arr6);
echo "<br>" . $result;


echo "<br>" . array_sum(range(1, 100));

echo "<br>";

$arr7 = [8,35,49,94,62,22];
function sq($a)
{
    return sq($a);
}
$arr7 = array_map('sqrt', $arr7);
foreach($arr7 as $v)
    echo $v . "<br>";


$arr8 = array_combine(range('a', 'z'), range(1, 26));
$c = 1;
while($c <= 26)
{
    echo key($arr8) . "<br>" . current($arr8) . "<br>";
    next($arr8);
    $c++;
}  


$a = "1234567890";
$arr9 = str_split($a, 2);
echo array_sum($arr9);
?>
