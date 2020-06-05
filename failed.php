<?php  
session_start();

if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'script.php'; ?>
</head>
<body>
	 <div class="container pt-4">
        <h1>Hello <?php echo $_SESSION['nama'] ?>,  sayang jawaban anda salah, Tetap semangat!!!</h1>
        <h1>Lives : <?php echo $_SESSION['life'] ?> | Skor : <?php echo $_SESSION['skor'] ?></h1>
        <a href="game.php" class="btn btn-info">Lanjutkan</a>
    </div>
</body>
</html>