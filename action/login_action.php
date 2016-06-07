<html>
	<link href="hover.css" rel="stylesheet" media="all">

<?php	
	//
	if(isset($_POST['nip'])) {
		require_once 'koneksi.php';			//menghubungkan ke database
		
		session_start();
		$nipInput = $_POST['nip']; 			//tangkap data yg di input dari form login input nip
		$passInput = $_POST['password']; 	//tangkap data yg di input dari form login input password
		
		//melakukan pengampilan data dari database untuk di cocokkan
		$query=mysql_query("SELECT * from guru WHERE NIP='$nipInput' AND Password='$passInput'"); 
		$password=mysql_num_rows($query);	//melakukan pencocokan

		if($password==TRUE){ 				// melakukan pemeriksaan kecocokan username dan password
			$_SESSION['nip'] = $nipInput;  	//jika cocok, buat session dengan nama sesuai dengan username
			header("location:../index.php");// dan alihkan ke index.php
		}
		else{   							//jika tidak tampilkan pesan gagal login
			
			?>
			<html><body><center>
				
				<h1>-= FORM LOGIN =-</h1>
				*Login failed*
				
				<form method="post" action="login_action.php">
                    <input type="text" autocomplete="off" placeholder="NIP" name="nip"><br/><br/>
                    <input type="password" autocomplete="off" placeholder="Password" name="password"><br/><br/>
                    <input type="submit" value="Login" >
                </form>
			</center></body></html>
			<?php
				

		}
	}

?>
</html>
