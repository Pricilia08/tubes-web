                                    <?php  
                                        include("../include/config.php");
                                        $cari = $_POST['cari'];
                                        $sql = "select * from berita where judul_berita like '%".$cari."%'";
                                        $hasil = mysqli_query($conn,$sql);
                                        $no = 1;
                                        while($row=mysqli_fetch_array($hasil)) 
                                        {    
                                            $berita_id =$row[0];
                                            $judul_berita=$row[1];  
                                            $deskripsi_berita=$row[2]; 
                                            $image= '../img/'.$row[3]; 
                                            $tanggal_berita=$row[4]; 
                                    ?>
                                    <tr>
                                        <td><?php echo $no++  ?></td>  
                                        <td><?php echo $judul_berita;  ?></td>
                                        <td><?php echo substr($deskripsi_berita, 0,30); echo "...."; ?></td>
                                        <td><img src="<?php echo $image;?>"></td>
                                        <td><?php echo $tanggal_berita;  ?></td>
                                        <td>
                                            <a href="edit_berita.php?id=<?php echo $berita_id ?>">
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <a href="delete_berita.php?del=<?php echo $berita_id ?>">
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>