<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}else{
	$nama = $_SESSION['nama'];
    $_SESSION['skor'] = 0;
    $_SESSION['life'] = 5;
}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'script.php'; ?>
</head>
<body>
	<div class="container">
        <h1 class="display-1">Hello, <?php echo $nama; ?></h1>
        <h1 class="display-5">Selamat datang di Game ini</h1>
        <a href="game.php" class="btn btn-success">Mulai</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <hr>
        <h2>Hall of Fame</h2>
        <table class='table table-striped table-dark'>
            <thead>
                <tr>
                    <td>Rank</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Skor</td>
                </tr>
            </thead>
            <tbody>
            	
            <?php  
            	include 'koneksi.php';
           		$db = new dbObj();
            	$query = mysqli_query($db->con, "SELECT * FROM hof ORDER BY skor desc limit 10");
            	$number = 1;
           		while ($row = mysqli_fetch_array($query)) { 
          		?>
            		<tr class="bg-primary">
            			<td><?php echo $number; ?></td>
            			<td><?php echo $row['nama']; ?></td>
            			<td><?php echo $row['email']; ?></td>
            			<td><?php echo $row['skor']; ?></td>
            		</tr>
            			
            	<?php $number++;} ?>
            </tbody>
        </table>
    </div>

</body>
</html>