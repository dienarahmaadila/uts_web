<?php  
session_start();

if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}

if($_SESSION['life'] != 0){
    
    $a = rand(1,20);
    $b = rand(1,20);
    
    $_SESSION['hasil'] = $a + $b;
}else{
    header('Location: end.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'script.php'; ?>
</head>
<body>
	<div class="container pt-4">
        <h1>Hello <?php echo $_SESSION['nama']  ?>, Semangat You Can Do The Best!!!</h1>
        <h1>Lives : <?php echo $_SESSION['life'] ?> | Skor : <?php echo $_SESSION['skor']  ?></h1>
        <h2>Berapakah hasil dari: </h2>
        <h2 class="display-4"><?php echo $a; echo '+'; echo $b ?></h2>
        <form action="cek.php" method="post">
            <input type="text" name="jawaban" class="form-control mb-3" placeholder="Jawaban" autocomplete="off">
            <button type="submit" class="btn btn-success" name="btnAns">Jawab</button>
        </form>
    </div>
</body>
</html>