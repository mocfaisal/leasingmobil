<?php 
echo "<h5>".$this->session->flashdata('error')."</h5>";
echo form_open_multipart('utility/input','class="form-horizontal" role="form" id="finput-users"');

 ?>

 <div class="form-group">
 	<label for="Username" class="col-sm-3 control-label">Username</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="username" placeholder="Username" name="username">
 	</div>
 </div>

  <div class="form-group">
 	<label for="Password" class="col-sm-3 control-label">Password</label>
 	<div class="col-sm-8">
 		<input class="form-control" id="password" placeholder="Password" name="password">
 	</div>
 </div>

  <div class="form-group">
 	<label for="Level" class="col-sm-3 control-label">Level</label>
 	<div class="col-sm-8">
 		<select name="optlevel">
 			<option value="2">Admin</option>
 			<option value="0">User</option>
 		</select>
 	</div>
 </div>

 
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<!-- <input type="submit" name="input_users" class="btn btn-default"> -->
<div id="btn-users" class="btn btn-primary col-sm-12">Tambah</div>
	</div>
</div>
