
<?= $this->extend('layouts/admin/admin_layout'); ?>
<?= $this->section('content'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <h1><?= $content; ?></h1>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li><a href="<?= base_url('admin/peserta/create') ?>" class="btn btn-sm btn-primary">CREATE</a></li>
                            </ul>
                        </div>
                        <div class="body">
<div class="table-responsive">
<table class="table table-light table-striped">
    <tbody>
	    <tr><th width="15%">Nama</th><td>: 	<?php echo $data['nama']; ?></td></tr>
	    <tr><th width="15%">Jk</th><td>: 	<?php echo $data['jk']; ?></td></tr>
	    <tr><th width="15%">Ttl</th><td>: 	<?php echo $data['ttl']; ?></td></tr>
	    <tr><th width="15%">Agama</th><td>: 	<?php echo $data['agama']; ?></td></tr>
	    <tr><th width="15%">Alamat</th><td>: 	<?php echo $data['alamat']; ?></td></tr>
	    <tr><th width="15%">Telp</th><td>: 	<?php echo $data['telp']; ?></td></tr>
	    <tr><th width="15%">Hp</th><td>: 	<?php echo $data['hp']; ?></td></tr>
	    <tr><th width="15%">Asal Sekolah</th><td>: 	<?php echo $data['asal_sekolah']; ?></td></tr>
	    <tr><th width="15%">Tinggi Badan</th><td>: 	<?php echo $data['tinggi_badan']; ?></td></tr>
	    <tr><th width="15%">Berat Badan</th><td>: 	<?php echo $data['berat_badan']; ?></td></tr>
	    <tr><th width="15%">Golongan Darah</th><td>: 	<?php echo $data['golongan_darah']; ?></td></tr>
	    <tr><th width="15%">Nama Ayah</th><td>: 	<?php echo $data['nama_ayah']; ?></td></tr>
	    <tr><th width="15%">Nama Ibu</th><td>: 	<?php echo $data['nama_ibu']; ?></td></tr>
	    <tr><th width="15%">Pekerjaan Ayah</th><td>: 	<?php echo $data['pekerjaan_ayah']; ?></td></tr>
	    <tr><th width="15%">Pekerjaan Ibu</th><td>: 	<?php echo $data['pekerjaan_ibu']; ?></td></tr>
	    <tr><th width="15%">Alamat Ortu</th><td>: 	<?php echo $data['alamat_ortu']; ?></td></tr>
                </tbody>
            </table>
            <div class="d-flex p-2 bd-highlight">
                <a class="btn btn-sm btn-danger" href="<?= \base_url('admin/peserta') ?>">back</a>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>