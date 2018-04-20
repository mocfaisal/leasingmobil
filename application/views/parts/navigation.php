    <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?">Show Room</a>
    </div>
    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav">

        <li><a href="?"><span class="glyphicon glyphicon-home"> Home</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mobil <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo anchor('mobil','Daftar Mobil') ?></li>
            <li><?php echo anchor('mobil/input','Penemerimaan Mobil') ?></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Pelanggan <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo anchor('pelanggan','Daftar Pelanggan') ?></li>
            <li><?php echo anchor('pelanggan/input','Registrasi Pelanggan') ?></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo anchor('transaksi/','Pembelian Mobil Cash') ?></li>
            <li><?php echo anchor('transaksi/','Pembelian Mobil Kredit') ?></li>
            <li><?php echo anchor('transaksi/','Pembayaran Cicilan') ?></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo anchor('laporan/','Laporan Daftar Pelanggan') ?></li>
            <li><?php echo anchor('laporan/','Laporan Mobil Terjual') ?></li>
            <li><?php echo anchor('laporan/','Laporan Transaksi Pembayaran') ?></li>

          </ul>
        </li>

        <li><?php echo anchor('Utility/','Tentang Program') ?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><?php 
        // echo anchor('Utility','<span class="glyphicon glyphicon-plus" title="Registrasi User"></span>') ?>
        </li> -->
        <li><?php echo anchor('utility/cpass','<span class="glyphicon glyphicon-pencil" title="Ganti Password"></span>') ?></li>
        <li><?php echo anchor('utility/logout','<span class="glyphicon glyphicon-off" title="Logout"></span>') ?></li>



        <!-- </ul> -->
        <!-- </li> -->

      </ul>
          <!-- 
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/index.html">Default</a></li>
            <li><a href="../navbar-static-top/index.html">Static top</a></li>
            <li class="active"><a href="index.html">Fixed top</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </div>
