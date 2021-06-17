<div class="row"><div class="col-lg-7">
    <div class="p-5"><div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit User</h1>
    </div>
    <?php foreach($supplier as $baris){ ?>
        <form class="supplier" action="<?php echo base_url('index.php/index/update_supplier');?>" 
        method="post">
            <div class="form-group">
                <input type="hidden" name="id_supplier" value="<?php echo $baris->id_supplier; ?>">
                <input type="text" class="form-control form-control-user" id="nama_supplier" name="nama_supplier" placeholder="Full Nama Supplier" value="<?php echo $baris->nama_supplier; ?>" require>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Full Alamat" value="<?php echo $baris->alamat; ?>" require >
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Full Phone" value="<?php echo $baris->phone; ?>" require>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan" placeholder="Full Keterangan" value="<?php echo $baris->keterangan; ?>" require>
            </div>
        <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Update">
        </form>
    <?php } ?>
    <hr>
    <div class="text-center"><a class="small" href="<?php echo base_url('index.php/index/Supplier')?>">Kembali</a>
</div>
</div>
</div>
</div>