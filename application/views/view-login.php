<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
  
  <!-- <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'> -->

      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

  
</head>

<body>
<div id="message"></div>
  <form id="Flogin" method="post">
  <div class="login-form">
     <h1>Login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="username" name="username">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Password" id="password" name="password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="button" id="btn-login" class="log-btn" >Log in</button>
     </div>
    
   </form>
  <script src='<?php echo base_url()?>assets/js/jquery.min.js'></script>

    <script src="<?php echo base_url()?>assets/js/index.js"></script>
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
$('#message').text(i);
});
});
  });

</script>
</body>
</html>
<?php 
print_r($_SESSION);

 ?>