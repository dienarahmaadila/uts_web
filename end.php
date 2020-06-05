<?php  
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}
include 'koneksi.php';
$db = new dbObj();

$db->inputData($_SESSION['nama'],$_SESSION['email'],$_SESSION['skor'])
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'script.php'; ?>
</head>
<body>
	<div class="container pt-4">
        <h1>Hello <?php echo $_SESSION['nama'] ?>,  Permainan sudah selesai!</h1>
        <h1>Skor : <?php echo $_SESSION['skor'] ?></h1>
        <a href="game.php" class="btn btn-success">Main Lagi</a>
        <a href="index.php" class="btn btn-danger">Keluar</a>
    </div>
</body>
</html>