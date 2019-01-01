<?php
if ($_GET['isi']=='delete_berita') {
	echo '
	 include("delete_berita.php")
	 ';
}else if ($_GET['isi']=='search_berita') {
	echo '
           <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form action="index1.php?isi=search_berita" method="post" class="sr-input-func">
                                                <input type="text" name="cari" placeholder="Search..." class="search-int form-control">
                                                <a name="submit"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index1.php?isi=view_berita">Berita /</a>
                                            </li>
                                            <li><span class="bread-blod">View Berita</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Berita List</h4>
                            <div class="add-product">
                                <a href="index1.php?isi=tambah_berita">Add Berita</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Deskripsi</th>
                                        <th>Image</th>
                                        <th>Tanggal & Waktu</th>
                                        <th>Setting</th>
                                    </tr>
                                    ';?>
                                    <?php
                                    	include("search_berita.php");
                                    ?>
                                    <?php echo'
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	';
}else if ($_GET['isi']=='tambah_berita') {
	echo '
	    <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form action="index1.php?isi=search_berita" method="post" class="sr-input-func">
                                        <input type="text" name="cari" placeholder="Search..." class="search-int form-control">
                                        <a name="submit"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="index1.php?isi=view_berita">Berita /</a>
                                        </li>
                                        <li><span class="bread-blod">Add Berita</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
            <h4>Add Berita</h4>
                <div class="asset-inner">
                    <div class="col-md-12">
                        <form  method="post" action="tambah_berita.php" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita">
							</div>
							<div class="form-group">
								<textarea name="deskripsi_berita" id="mytextarea" class="form-control" rows="5" placeholder="Deskripsi Berita"></textarea>
							</div>
							<div class="form-group">
								<input type="file" name="image" class="form-control">
							</div>
							<button type="submit" class="btn btn-success pull-right" name="simpan">Simpan</button>
							<a href="index1.php?isi=view_berita" class="btn btn-danger pull-right" style="margin-right:1%;">Batal</a>
						</form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>

	';
}else if ($_GET['isi']=='view_berita') {
	echo '
		<div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form action="index1.php?isi=search_berita" method="post" class="sr-input-func">
                                        <input type="text" name="cari" placeholder="Search..." class="search-int form-control">
                                        <a name="submit"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="index1.php?isi=view_berita">Berita /</a>
                                        </li>
                                        <li><span class="bread-blod">View Berita</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Berita List</h4>
                            <div class="add-product">
                                <a href="index1.php?isi=tambah_berita">Add Berita</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Deskripsi</th>
                                        <th>Image</th>
                                        <th>Tanggal & Waktu</th>
                                        <th>Setting</th>
                                    </tr>
                             ';?><?php
                            include ("view_berita.php");
                            ?><?php echo'
                            </div>
                    </div>
                </div>
            </div>
        </div>
	';
}
?>