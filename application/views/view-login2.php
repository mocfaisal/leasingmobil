<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Leasing Mobil | Login :: Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	

<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Login</h1>
			</div>
			<div class="login-block">
				<form id="Flogin" method="post">
					<input type="text" name="username" placeholder="Username" required="">
					<input type="password" name="password" class="lock" placeholder="Password" required="">
					<!-- <div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="#">Forgot password?</a>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					<!-- <input type="submit" name="Sign In" value="Login">	 -->
					<button type="button" id="btn-login" class="btn btn-primary col-sm-12" >Log in</button>
					<h3 style="padding-top: 50px;">Not a member?<a href="#"> Sign up now</a></h3>				
					<!-- <h2>or login with</h2> -->
					<!-- <div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div> -->
				</form>
				<!-- <h5><a href="index.html">Go Back to Home</a></h5> -->
	<div id="message"></div>
			</div>
      
      </div>

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Leasing Mobil. All Rights Reserved | Rescript by  <a href="http://fb.me/faisal.cool.712/" target="_blank">Mochammad Faisal</a> </p>
</div>
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.js"></script>
		<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

<script type="text/javascript">
  
  $(function(){
  	
$('#btn-login').click(function(){
var url = "<?php echo base_url() ?>index.php/login/cekLogin";
var data = $('#Flogin').serializeArray();
$.post(url,data,function(i){
if(i==''){
  window.location="<?php echo base_url() ?>";
}
else
$('#message').html("<h5><center>"+ i +"</center></h5>");
});
});
  });

</script>
</body>
</html>
<?php 
// print_r($_SESSION);

 ?>						
