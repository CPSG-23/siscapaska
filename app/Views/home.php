<?= $this->extend('layouts/front_layout') ?>
<?= $this->section('content') ?>
<div class="home-banner">
    <div class="home-banner-bg home-banner-bg-color "></div>
    <div class="home-banner-bg home-banner-bg-img "></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-8">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div>
                                <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                    Selamat Datang di Website SISCAPASKA
                                </h5>
                                <br>
                                <p data-animation="animated slideInRight" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="">
                                Seleksi Calon Anggota Paskibraka Kota Cirebon telah dibuka. Segera Daftar dan lengkapi Formulir
                                </p>
                                <p data-animation="animated flipInX" data-delay="2s" style="-webkit-animation-delay:2s;animation-delay:2s">
                                                <a href="/#pendaftaran" class="btn btn-warning nav-link">
                                                    Daftar Sekarang
                                                    <span class="fa fa-chevron-down"></span>
                                                </a>
                                            </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                    Syarat Pendaftaran Seleksi Calon Anggota Paskibraka
                                </h5>
                                <h5 data-animation="animated fadeInDownBig" style="-webkit-animation-delay:undefined;animation-delay:undefined" class="">
                                    Syarat Umum
                                </h5>
                                <ul>
                                    <li data-animation="animated fadeInDownBig" data-delay="1s" style="-webkit-animation-delay:1s;animation-delay:1s" class="">
                                        Warga Negara Indonesia
                                    </li>
                                    <li data-animation="animated flipInX" data-delay="2s" style="-webkit-animation-delay:2s;animation-delay:2s" class="">
                                        Pemuda SLTA/Sedrajat Kelas X (kelas satu)
                                    </li>
                                    <li data-animation="animated flipInX" data-delay="3s" style="-webkit-animation-delay:3s;animation-delay:3s" class="">
                                        Tinggi Badan Putra Minimal 165 sentimeter dan untuk putri 160 sentimeter 
                                    </li>
                                    <li data-animation="animated flipInX" data-delay="4s" style="-webkit-animation-delay:5s;animation-delay:4s" class="">
                                        Berkepribadian dan Berakhlak Mulia
                                    </li>
                                    <li data-animation="animated flipInX" data-delay="5s" style="-webkit-animation-delay:5s;animation-delay:5s" class="">
                                        Sehat Jasmani dan Rohani
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-login bg-info">
                    <div class="card-body">

                        <img src="<?=base_url('public/logo_siscapaska.png')?>" class='mb-5' width='100%'>
                        <?php if (session()->isLoggedIn  !=TRUE): ?>
                        <form action="<?=site_url('login/loginAuth')?>" method="post" name="fmLogin" id="fmLogin">
                            <div class="form-group">
                                <span class="fa fa-user"></span>
                                <input type="text" required class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <span class="fa fa-key"></span>
                                <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-login" id="btnLogin">
                                Masuk
                            </button>
                        </form>
                        <?php else: ?>
                            <a href="<?=site_url('myaccount')?>" class="btn btn-primary btn-block btn-login">
                                My Account
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-content padding-top">
    <section id="pendaftaran">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class='card'>
                        <div class='card-header bg-danger'>
                            Formulir Pendaftaran
                        </div>
                        <form class='col-sm-12' action='<?=site_url('register/create_action')?>' method='post'>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama">NAMA LENGKAP*</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nohp">NO HANDPHONE</label>
                                        <input type="number" class="form-control" name="hp" placeholder="No HP Whatsapp" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="jenis">Asal Sekolah</label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%" name="nama_sekolah" id="nama_sekolah" tabindex="-1" aria-hidden="true">
                                        <option value="">Pilih Sekolah</option>
                                        <?php foreach($sekolah as $sch):?>
                                        <option value="<?=$sch->nama_sekolah?>"> <?=$sch->nama_sekolah?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jenis-container"><span class="select2-selection__rendered" id="select2-jenis-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nisn">NISN* Sebagai Username Anda</label>
                                        <input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required="" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select class="form-control select2 select2-hidden-accessible" required style="width: 100%" name="jk" id="jk" tabindex="-1" aria-hidden="true">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L"> Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jenis-container"><span class="select2-selection__rendered" id="select2-jenis-container" title=""></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required="">
                                </div>
                                <div class="card-footer">
                                    <button id="btnsimpan" type="submit" class="btn btn-lg btn-primary">DAFTAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex align-items-center">
                    <p align="center">
                        <img src="<?=base_url('public/alurpendaftaran.png')?>" align="center" width="600" style="max-width: 100%">
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>