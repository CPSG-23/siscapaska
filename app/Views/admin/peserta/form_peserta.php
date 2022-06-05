
<?= $this->extend('layouts/admin/admin_layout'); ?>
<?= $this->section('content'); ?>
<section class="content">
<div class="container-fluid">
            <div class="block-header">
            <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('message') ?>
                </div>   
            <?php endif; ?>
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
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Nama
                            <?php echo ('nama') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="nama" id="nama"
                            placeholder="Nama" value="<?php echo $data['nama']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Jk
                            <?php echo ('jk') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="jk" id="jk"
                            placeholder="Jk" value="<?php echo $data['jk']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Ttl
                            <?php echo ('ttl') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="ttl" id="ttl"
                            placeholder="Ttl" value="<?php echo $data['ttl']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Agama
                            <?php echo ('agama') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="agama" id="agama"
                            placeholder="Agama" value="<?php echo $data['agama']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="alamat">Alamat
                            <?php echo ('alamat') ?></label>
                        <textarea class="form-control" rows="3" name="alamat" id="alamat"
                            placeholder="Alamat"><?php echo $data['alamat']; ?></textarea>
                    </div>
	 <div class="form-group">
                        <label for="varchar">Telp
                            <?php echo ('telp') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="telp" id="telp"
                            placeholder="Telp" value="<?php echo $data['telp']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Hp
                            <?php echo ('hp') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="hp" id="hp"
                            placeholder="Hp" value="<?php echo $data['hp']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Asal Sekolah
                            <?php echo ('asal_sekolah') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="asal_sekolah" id="asal_sekolah"
                            placeholder="Asal Sekolah" value="<?php echo $data['asal_sekolah']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Tinggi Badan
                            <?php echo ('tinggi_badan') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="tinggi_badan" id="tinggi_badan"
                            placeholder="Tinggi Badan" value="<?php echo $data['tinggi_badan']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Berat Badan
                            <?php echo ('berat_badan') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="berat_badan" id="berat_badan"
                            placeholder="Berat Badan" value="<?php echo $data['berat_badan']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Golongan Darah
                            <?php echo ('golongan_darah') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="golongan_darah" id="golongan_darah"
                            placeholder="Golongan Darah" value="<?php echo $data['golongan_darah']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Nama Ayah
                            <?php echo ('nama_ayah') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="nama_ayah" id="nama_ayah"
                            placeholder="Nama Ayah" value="<?php echo $data['nama_ayah']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Nama Ibu
                            <?php echo ('nama_ibu') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="nama_ibu" id="nama_ibu"
                            placeholder="Nama Ibu" value="<?php echo $data['nama_ibu']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Pekerjaan Ayah
                            <?php echo ('pekerjaan_ayah') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="pekerjaan_ayah" id="pekerjaan_ayah"
                            placeholder="Pekerjaan Ayah" value="<?php echo $data['pekerjaan_ayah']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Pekerjaan Ibu
                            <?php echo ('pekerjaan_ibu') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="pekerjaan_ibu" id="pekerjaan_ibu"
                            placeholder="Pekerjaan Ibu" value="<?php echo $data['pekerjaan_ibu']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="alamat_ortu">Alamat Ortu
                            <?php echo ('alamat_ortu') ?></label>
                        <textarea class="form-control" rows="3" name="alamat_ortu" id="alamat_ortu"
                            placeholder="Alamat Ortu"><?php echo $data['alamat_ortu']; ?></textarea>
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/peserta') ?>">Cencel</a>
        <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
    </div>
    </div>
</form>
</div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>



<?= $this->endSection(); ?>