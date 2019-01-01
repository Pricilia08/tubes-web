<?php
	include('../include/config.php');
        $set = true;
        //tentukan variabel file yg diupload dan tipe file
        if (isset($_FILES['image'])) {
            $tipe_file  = $_FILES['image']['type'];
            $lokasi_file = $_FILES['image']['tmp_name'];
            $nama_file  = $_FILES['image']['name'];
            $save_file =move_uploaded_file($lokasi_file,"../img/$nama_file");
        }
        

        if(empty($lokasi_file)){
            $set=false;
        }
        else{
        //tentukan tipe file harus image 
        if ($tipe_file != "image/gif" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/jpg" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/png")
        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }
        else
        {
            isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
            chmod("../img/$nama_file", 0777);
        }
        else
        {
            echo "<script>alert('Upload image gagal !')</script>";
            $set =  false;
        }
    }
    if (isset($_POST['simpan']) && $set) {
        $judul_berita = $_POST['judul_berita'];
        $deskripsi_berita = $_POST['deskripsi_berita'];
        if ($nama_file == '') {
           echo "<script>alert('Masukan Gambar')</script>";
        }
        if ($judul_berita == '') {
          echo "<script>alert('masukan judul berita')</script>";
          exit();
        }
        if ($deskripsi_berita == '') {
          echo "<script>alert('masukan deskripsi berita')</script>";
          exit();
        }
		$sql = "insert into berita (judul_berita,deskripsi_berita,img_berita,tanggal) values ('$judul_berita','$deskripsi_berita','$nama_file',CURRENT_TIMESTAMP)";
		$hasil = mysqli_query($conn, $sql);
		if ($hasil){
            print "<meta http-equiv=\"refresh\"content=\"1;URL=index1.php?isi=view_berita\">";
		}else{
			echo "error".$sql;
		}
	}
?>