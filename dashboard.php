<section class="content-header">      
    <h1>My Dashboard </h1>
    <ol class="breadcrumb">
        <li><a href="homepage.php?p=dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Dashboard</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Selamat Datang <span class="username"><?php echo $_SESSION['nama_kpd'] ?></span>,
            <br>Anda Berhasil Login sebagai kaprodi</strong>
        </div>
    <!-- Small boxes (Stat box) -->
    
        <!-- Sistem-->
        <div class="box box-info">
            <div class="box-header">
                <h1><center><b>SISTEM PENGELOLAAN KERJA PRAKTEK </b></center></h1>
				<center><img src="foto/pp2.png" width="350" height="150" /></center>
				<center><h2><b>UIN IB Prodi SI Copyright &copy;  <?php echo date ('Y') ?></b></h2></center>
				<center><h4><b>Kampus 3 UIN Imam Bonjol Sungai Bangek Balai Gadang Koto Tangah Padang Sumatera Barat 25711</b></h4></center>
            </div>
        </div>
    <!-- /.row (main row) -->
</section>    