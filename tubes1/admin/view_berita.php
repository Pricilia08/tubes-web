                                    <?php

                                        include("../include/config.php");
                                        if (isset($_GET['pageno'])) {
                                            $pageno = $_GET['pageno'];
                                        } else {
                                            $pageno = 1;
                                        }
                                        $no_of_records_per_page = 5;
                                        $offset = ($pageno-1) * $no_of_records_per_page;
                                        $total_pages_sql = "SELECT COUNT(*) FROM berita";
                                        $result = mysqli_query($conn,$total_pages_sql);
                                        $total_rows = mysqli_fetch_array($result)[0];
                                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                                        $sql = "SELECT * FROM berita order by id_berita LIMIT $offset, $no_of_records_per_page";
                                        $res_data = mysqli_query($conn,$sql);
                                        $no = 1;
                                        while($row = mysqli_fetch_array($res_data)){

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
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li><a href="?pageno=1">First</a></li>
                                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                    </li>
                                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                    </li>
                                    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                </ul>
                            </div>
                        </div>