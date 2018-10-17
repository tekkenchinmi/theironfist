<!DOCTYPE html>
<html>
<head>
  <title>Self Services Library System</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="form-title">
    
  </div>
  <div class="container">
  <?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span> Mohon cek kembali Username dan Password Anda !!</div>";
			}
		}
		?>
  <h3>Administrator Login</h3>
    <form action="login.php" method="post">
      <input type="text" name="username" placeholder="Masukkan Username" required/>
      <input type="password" name="password" placeholder="Masukkan Password" required/>
      <input type="submit" name="Submit" value="LOGIN"/>
    </form>
  </div>
</body>

</html>
