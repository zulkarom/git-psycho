
<div class="container">
	<div class="row">
	<div class="col-md-8">
	<div class="ptitle">
	
	<br/>Ijazah Sarjana Muda Keusahawanan (2u2i)<br />
	
	Fakulti Keusahawanan dan Perniagaan 
	
	</div>
	<br />
	<strong>Nama:</strong> <?php echo $this->user->can_name ;?><br />
	<strong>No. Kad Pengenalan:</strong>  <?php echo $this->user->user_name ;?>
	
	</div>

	</div>
	

    <div class="box">
	
	<div><strong>SILA PILIH UJIAN ANDA:</strong></div>
<br />
		<div class="form-group">
		<a href="<?=Config::get('URL')?>test" class="btn btn-primary">UJIAN PSIKOMETRIK</a> <a href="<?=Config::get('URL')?>test2" class="btn btn-primary">IDEA PERNIAGAAN</a>
		</div>
		


<a href='<?php echo Config::get('URL'); ?>login/logout'>LOGOUT</a>
		
		



    </div>
	
	
	

</div>
