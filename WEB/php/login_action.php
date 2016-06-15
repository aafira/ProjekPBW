<?php	
	//Pengecekan user sesuai database
	if(isset($_POST['nip'])) {
		require_once 'koneksi.php';			//menghubungkan ke database
		
		session_start();
		$nipInput = $_POST['nip']; 			//tangkap data yg di input dari form login input nip
		$passInput = $_POST['password']; 	//tangkap data yg di input dari form login input password
		//$status = mysql_query("SELECT Keterangan from guru WHERE NIP='$nipInput' ");
		
		//melakukan pengampilan data dari database untuk di cocokkan
		$query=mysql_query("SELECT * from guru WHERE NIP='$nipInput' AND Password='$passInput'"); 
		$password=mysql_num_rows($query);	//melakukan pencocokan

		if($password==TRUE){ 				// melakukan pemeriksaan kecocokan username dan password
			$_SESSION['nip'] = $nipInput;  	//jika cocok, buat session dengan nama sesuai dengan username
		
		
		function CheckKey($query)
		{
		   $ketemu=mysql_query($query);
		   if(mysql_num_rows($ketemu)>0) 
		   {
			 return true;
		   }
		   else
		   {
			 return false;
		   }
		}
		

			//$nis="001"; //contoh
			if(CheckKey("SELECT Keterangan from guru WHERE Keterangan='Guru' AND NIP='$nipInput'")==true){
				
			//if($status == "Guru"){
					
				header("location:../index.php");// dan alihkan ke index.php
			}
			else if (CheckKey("SELECT Keterangan from guru WHERE Keterangan='Administrasi' AND NIP='$nipInput'")==true){
			//else if($status == "Administrasi" || $status === "Kepala Sekolah"){
				header("location:../index-adm.php");// dan alihkan ke index-adm.php 
			}
			else echo "Status gak jelas";
		}
	}

?>
