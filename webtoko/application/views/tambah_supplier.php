<div class="row">
	<div class="col-lg-7"> 
	<div class="p-5"> 
	<div class="text-center">
	<h1 class="h4 text-gray-900 mb-4">Tambah User</h1></div> 
	<form class="user" action="<?php echo base_url('index.php/index/input_supplier');?>" method="post"> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="id_supplier" name="id_supplier" placeholder="Masukan ID Supplier" require> 
		</div> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="nama_supplier" name="nama_supplier" placeholder="Masukan Nama Supplier" require> 
		</div> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukan Alamat Supplier" require> 
		</div>
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Masukan Nomer Telpon Supplier" require> 
		</div> 
		<div class="form-group"> 
			<input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Masukan Keterangan Supplier" require> 
		</div> 
		<input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
	</form><hr> 
	<div class="text-center"> 
	<a class="small" href="<?php echo base_url('index.php/index/supplier')?>">Kembali</a> 
</div></div></div></div>