<?php session_start() ?>
<h4>Регулярные выражения</h4>
<?php 

$str = 'ahb acb aeb aeeb adcb axeb';
$reg = '!a[a-z]{2}b!';
$dop = array();

$count=preg_match_all($reg,$str,$dop);
echo "Найдено строк:{$count}<br>";
var_dump($dop);

$str2='a1b2c3';
$reg2='![1-9]!';
echo '<br>';
echo preg_replace_callback($reg2, 'cube', $str2);
 	function cube($matches)
	{
		$result = pow($matches[0], 3); 
		return $result;
	}

?>

<h4>Форма. Сессии и Куки</h4>

 <?php
if (!empty($_REQUEST['text'])) {
    $str = $_REQUEST['text'];
    $strLen = strlen($str);
    $wordsCount = count(explode(' ', $str));
    echo 'В тексте '.$wordsCount.' слов, '.$strLen.' символов ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="" method="get">
            <textarea name="text" placeholder=""></textarea>
            <br>
            <input type="submit">
        </form>
        <br><br>
        <form action = "" method="GET">

            <label for = "name" >Введите ваше имя</label>
            <input name = "name">

            <br>
            <label for = "surname" >Введите вашу фамилию </label>
            <input name = "surname">

            <br>
            <label for = "age" >Укажите свой возраст </label>
            <input name = "age"> 

            <br>
            <input type="submit" value = "Сохранить">
            <br>
            <label for = "name1" >Введите ваше имя</label>
            <input type = "name1" name = "name1" >

            <br>
            <label for = "surname1" >Введите вашу фамилию </label>
            <input type = "surname1" name = "surname1" >

            <br>
            <label for = "age1" >Укажите свой возраст </label>
            <input type = "age1" name = "age1" > 
            <br>
            <label for = "money1" >Укажите свою зарплату </label>
            <input type = "money1" name = "money1" > 
            <br>
            <label for = "smth1" >Укажите ещё чего - нибудь </label>
            <input type = "smth1" name = "smth1" > 
            <br>
            <input type="submit" value = "Сохранить">
        </form>
    </body>
</html>
<?php
	
	if (!empty($_GET)) {
		$_SESSION['name'] = $_GET['name'];
		$_SESSION['surname'] = $_GET['surname'];
        $_SESSION['age'] = $_GET['age'];
        $_SESSION['name1'] = $_GET['name1'];
        $_SESSION['surname1'] = $_GET['surname1'];
        $_SESSION['age1'] = $_GET['age1'];
        $_SESSION['money1'] = $_GET['money1'];
        $_SESSION['smth1'] = $_GET['smth1'];

	}
?>
