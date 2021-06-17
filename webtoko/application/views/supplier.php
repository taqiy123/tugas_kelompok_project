

<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 fint-weight-bold text-primary">Data Supplier</h6>
    </div>
    <div class="card-body"><div class="table-responsive">
        <table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
        <thead>
        <tr><td>No</td>
            <td>Nama Supplier</td>
            <td>Alamat</td>
            <td>Nomer Telpon</td>
            <td>Keterangan</td>
            <td>Tombol Aksi</td></tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach ($supplier as $row) {?>
        <tr><td><?php echo $no++ ?></td>
        <td><?php echo $row -> nama_supplier; ?></td>
        <td><?php echo $row -> alamat; ?></td>
        <td><?php echo $row -> phone; ?></td>
        <td><?php echo $row -> keterangan; ?></td>
        <td><a href="<?php echo base_url('index.php/index/edit_supplier/'.$row->id_supplier)?>" class="btn btn-primary btn-icon-split">
            <span class="text">Edit Data</span>
            </a>&nbsp;
            <a href="<?php echo base_url('index.php/index/hapus_supplier/'.$row->id_supplier)?>" class="btn btn-danger btn-icon-split">
            <span class="text">Hapus Data</span>
            </a></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        <a href="<?php echo base_url('index.php/index/tambah_supplier')?>" class="btn btn-success btn-icon-split">
        <span class="text">Tambah Data</span>
        </a>
</div></div></div>