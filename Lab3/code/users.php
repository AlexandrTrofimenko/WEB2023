<?php session_start();
	if (!empty($_SESSION)) {
		echo $_SESSION['name']."<br>";
        echo $_SESSION['surname']."<br>";
        echo $_SESSION['age']."<br>";

	}
    if(isset($_SESSION['name1']) && isset($_SESSION['surname1']) && isset($_SESSION['age1']) && isset($_SESSION['money1']) &&isset($_SESSION['smth1'])) {
        $_allinfo = array($_SESSION['name1'],$_SESSION['surname1'],$_SESSION['age1'],$_SESSION['money1'],$_SESSION['smth1']);
        foreach($_allinfo as $i) {
            echo "<li>".$i."</li>" ;
        
        }
    }
    session_destroy();
?>
