<?php  
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}

$jawaban = $_POST['jawaban'];

if(isset($_POST['btnAns'])){
    if($jawaban == $_SESSION['hasil']){
        $_SESSION['skor'] += 10;
        header('Location: success.php');
    }else{
        $_SESSION['skor'] -= 2;
        $_SESSION['life'] -= 1;
        header('Location: failed.php');
    }
}
?>