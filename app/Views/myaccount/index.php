<?= $this->extend('layouts/front_layout') ?>
<?= $this->section('content') ?>
<div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="<?=base_url('public/uploads/peserta/'.$peserta[0]['foto'])?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <?= form_open_multipart('peserta/uploadimage') ?>
                                        <input type="hidden" name="id" id='idPeserta' value="<?=$peserta[0]['id']?>">
                                        <input type="hidden" name="fotolama" id='fotoLama' value="<?=$peserta[0]['foto']?>">
                                        
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        </form>
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?=$peserta[0]['nama']?></a></h2>
                                    <h6 class="d-block"><?=$peserta[0]['asal_sekolah']?></h6>
                                    <h6 class="btn btn-danger d-block"><a href="<?=site_url('login/logout')?>">Logout</a></h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Biodata</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="keluarga-tab" data-toggle="tab" href="#keluarga" role="tab" aria-controls="keluarga" aria-selected="false">Keluarga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="kartuPeserta-tab" data-toggle="tab" href="#kartuPeserta" role="tab" aria-controls="kartuPeserta" aria-selected="false">Kartu Peserta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sertifikatPeserta-tab" data-toggle="tab" href="#sertifikatPeserta" role="tab" aria-controls="sertifikatPeserta" aria-selected="false">Sertifikat</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <form method="post" action="<?=site_url('peserta/update_action')?>">
                                            
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="nama" value="<?=$peserta[0]['nama']?>">
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="ttl" value="<?=$peserta[0]['ttl']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="jk" value="<?=$peserta[0]['jk']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Agama</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="agama" value="<?=$peserta[0]['agama']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Alamat</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="alamat" value="<?=$peserta[0]['alamat']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Telp</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="telp" value="<?=$peserta[0]['telp']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Hp</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="hp" value="<?=$peserta[0]['hp']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="email" value="<?=$peserta[0]['email']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Asal Sekolah</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="asal_sekolah" value="<?=$peserta[0]['asal_sekolah']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Tinggi Badan</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="tinggi_badan" value="<?=$peserta[0]['tinggi_badan']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Berat Badan</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="berat_badan" value="<?=$peserta[0]['berat_badan']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Golongan Darah</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="golongan_darah" value="<?=$peserta[0]['golongan_darah']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;"></label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="hidden" name="id" value="<?=$peserta[0]['id']?>">
                                                <input type="hidden" name="update" value="biodata">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="keluarga" role="tabpanel" aria-labelledby="keluarga-tab">
                                        <form method="post" action="<?=site_url('peserta/update_action')?>">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Ayah</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="nama_ayah" value="<?=$peserta[0]['nama_ayah']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Pekerjaan Ayah</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="pekerjaan_ayah" value="<?=$peserta[0]['pekerjaan_ayah']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Ibu</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="nama_ibu" value="<?=$peserta[0]['nama_ibu']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Pekerjaan Ibu</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="pekerjaan_ibu" value="<?=$peserta[0]['pekerjaan_ibu']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Alamat Orang Tua</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input class="form-control" type="text" name="alamat_ortu" value="<?=$peserta[0]['alamat_ortu']?>">
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;"></label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input type="hidden" name="id" value="<?=$peserta[0]['id']?>">
                                                <input type="hidden" name="update" value="keluarga">
                                                <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="kartuPeserta" role="tabpanel" aria-labelledby="kartuPeserta-tab">
                                    	<div id="content-hold">
                                    		<embed type="text/html" src="<?=site_url('myaccount/idcard')?>" height='400px'>
                                    	</div>
                                    </div>
                                    <div class="tab-pane fade" id="sertifikatPeserta" role="tabpanel" aria-labelledby="sertifikatPeserta-tab">
                                        <div id="content-hold">
                                            <?php if($peserta[0]['status_sertifikat'] == 'publish'): ?>
                                            <embed type="text/html" src="<?=site_url('myaccount/sertifikat')?>" width='50%'>
                                            <?php else: ?>
                                                <p>Mohon Maaf Anda Tidak Berhak Mendapatkan Sertifikat</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>