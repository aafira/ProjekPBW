<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "mahasiswa";
	
	//create connection
	$conn = mysqli_connect($servername, $username, $password, $db);
	
	//check connection
	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	else{
		$nim = $_GET['nim'];
		$nama = $_GET['nama'];
		$alamat = $_GET['alamat'];
		
		$sql = "INSERT INTO mahasiswa (NIM, Nama, Alamat) VALUES ('$nim','$nama','$alamat')";
		
		if($conn -> query($sql)){
			echo "Data berhasil dimasukkan.";
		}
		else{
			echo "FAILED!!";
		}
		$conn->close();
	}	
	

	
	
	
	
	
	
	
	
	
	
	
	