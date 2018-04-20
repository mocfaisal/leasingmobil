<?php 
$this->load->view('parts/top2');
 ?>
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3><?php echo $jmluser; ?></h3>
						<h4>Jumlah Pelanggan</h4>
						<p>Semua Data Pelanggan</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-user-plus"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3><?php echo $jmlmobil; ?></h3>
					<h4>Jumlah Mobil</h4>
					<p>Semua Data Mobil</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-car"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3><?php echo $jmltransaksi; ?></h3>
						<h4>Jumlah Transaksi</h4>
						<p>Semua Data Transaksi</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-cart-plus"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1"></div>
<!--main page chit chating end here-->
<!--main page chart start here-->
<div class="main-page-charts">
   <div class="main-page-chart-layer1">
		<div class="col-md-7 chart-layer1-left"> 
			<div class="glocy-chart">
			<div class="span-2c">  
                        <h3 class="tlt">Grafik Transaksi <?php echo date('Y'); ?></h3>
                        <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                        <script>
                            var barChartData = {
                            labels : ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
                            datasets : [
                                {
                                    fillColor : "#FC8213",
                                    data : [<?php echo $this->session->userdata('cashJan'); ?>,<?php echo $this->session->userdata('cashFeb'); ?>,<?php echo $this->session->userdata('cashMar'); ?>,<?php echo $this->session->userdata('cashApr'); ?>,<?php echo $this->session->userdata('cashMei'); ?>,<?php echo $this->session->userdata('cashJun'); ?>,<?php echo $this->session->userdata('cashJul'); ?>,<?php echo $this->session->userdata('cashAgu'); ?>,<?php echo $this->session->userdata('cashSep'); ?>,<?php echo $this->session->userdata('cashOkt'); ?>,<?php echo $this->session->userdata('cashNov'); ?>,<?php echo $this->session->userdata('cashDes'); ?>]
                                },
                                {
                                    fillColor : "#337AB7",
                                    data : [<?php echo $this->session->userdata('kreditJan'); ?>,<?php echo $this->session->userdata('kreditFeb'); ?>,<?php echo $this->session->userdata('kreditMar'); ?>,<?php echo $this->session->userdata('kreditApr'); ?>,<?php echo $this->session->userdata('kreditMei'); ?>,<?php echo $this->session->userdata('kreditJun'); ?>,<?php echo $this->session->userdata('kreditJul'); ?>,<?php echo $this->session->userdata('kreditAgu'); ?>,<?php echo $this->session->userdata('kreditSep'); ?>,<?php echo $this->session->userdata('kreditOkt'); ?>,<?php echo $this->session->userdata('kreditNov'); ?>,<?php echo $this->session->userdata('kreditDes'); ?>]
                                }
                            ]

                        };
                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

                        </script>
                    </div> 			  		   			
			</div>
		</div>
		<div class="col-md-5 chart-layer1-right"> 
			
	<div class="popular-brand">
				<div class="col-md-6 popular-bran-left">
				     <h2>Transaksi</h2>
				     <h3> Hari Ini</h3>
				     <h3> Cash <?php echo $jmltrCNow; ?></h3>
				     <h3> Kredit <?php echo $jmltrKNow; ?></h3>
				</div>
				<div class="col-md-6 popular-bran-right">
					<h3><?php echo $jmltrANow; ?></h3>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
		</div>
	 <div class="clearfix"></div>
   </div>
 </div>
<!--main page chart layer2-->
<div class="chart-layer-2"></div>

<!--climate start here-->
<div class="climate"></div>
<!--climate end here-->

<!--inner block end here-->
<!--copy rights start here-->

<?php 

$this->load->view('parts/sidebar');
$this->load->view('parts/bottom2');
// print_r($_SESSION);
// echo date('Y-m-d');
 ?>
            