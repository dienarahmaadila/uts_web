
<?php  
session_start();
if(isset($_POST['login']))
{
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['user'] = 1;
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'script.php'; ?>
</head>
<body>
	 <div class="container">
        <h1>Masuk Ke Game</h1>
        <form action="" method="post">
            <input type="text" class="form-control mb-4" name="nama" required placeholder="Name">
            <input type="email" class="form-control mb-4" name="email" required placeholder="Email">
            <button type="submit" class="btn btn-success" name="login">Submit</button>
        </form>
        
    </div>
</body>
</html>