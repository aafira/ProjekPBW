
<html>
    <head>
        <title>Ubah Nilai</title>
    </head>
    <body>
	<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "proyek_pbw";

    $conn = mysqli_connect($servername, $username, $password, $db);
  
		    $nis = $_GET['NIS'];
            echo $nis;
            $sql = "SELECT UTS, UAS, NilaiAkhir FROM nilai WHERE NIS='$nis'";
            //$hasil = $conn->query($sql);
            //$baris = $hasil->fetch_assoc();					
	  ?>								
        
		   <form action="edittable.php?NIS=<?php echo $nis; ?>" method="post">
           <input type= "text" name="UTS" placeholder="Nilai UTS"><br><br>
           <input type= "text" name="UAS" placeholder="Nilai UAS"><br><br>
		   <input type= "text" name="NilaiAkhir" placeholder="Nilai Akhir"><br><br>
           <button type="submit">Ubah Data</button><br>
        </form>
        
     <?php
            if(isset($_POST['UTS'])){
                
                $uts = $_POST['UTS'];
                $uas = $_POST['UAS'];
				$final = $_POST['NilaiAkhir'];
                
               // $sql = "INSERT INTO pengguna VALUES('$nim', '$nama', '$tl', '$pass', '$email')";
				$sql = "UPDATE nilai SET UTS='$uts', UAS='$uas', NilaiAkhir='$final' WHERE NIS='$nis'";
				
				if( $conn->query($sql) ){
                    echo 'Data berhasil disimpan';
                }else{
                    echo 'Error : ' . $conn->error;
                }
            }
        ?>
    </body>
</html>

