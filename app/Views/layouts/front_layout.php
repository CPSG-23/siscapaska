<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title>
            SISCAPASKA
        </title>

        <!-- Vendor -->
        <link href="<?=base_url('assets/front/css')?>" rel="stylesheet">
        <!-- <link href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="<?=base_url('assets/front/animate.min.css')?>" rel="stylesheet">
        <link href="<?=base_url('assets/front/Chart.min.css')?>" rel="stylesheet">

        <!--Assets-->
        <link href="<?=base_url('assets/front/front.min.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="<?=base_url('favicon.ico')?>" rel="shortcut icon">
    </head>

    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper">
            <div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="<?=base_url('logo_ppi.jpg')?>" height="75">
                            <div class="home-header-text d-none d-sm-block">
                                <h5>SISCAPASKA</h5>
                                <h6>Sistem Informasi Seleksi Calon Anggota Paskibraka</h6>
                                <h6></h6>
                            </div>
                            <span class="logo-mini-unbk d-block d-sm-none">SISCAPASKA</span>
                            <span class="logo-mini-tahun d-block d-sm-none">2023</span>
                        </a>
                        <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse" id="menu" style="">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?=site_url()?>" id="link-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url('#tentang')?>" id="link-tentang">Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url('#persyaratan')?>" id="link-persyaratan">Persyaratan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=site_url('#jadwal')?>" id="link-jadwal">Jadwal</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
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
                                            <p data-animation="animated flipInX" data-delay="3s" style="-webkit-animation-delay:3s;animation-delay:3s" class="">
                                                <a href="#pendaftaran" class="btn btn-warning nav-link">
                                                    Selengkapnya
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
                            <div class="card card-login">
                                <div class="card-body">
                                    <h6 class="mb-3">LOGIN</h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-content">
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
                                                    <input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required="">
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
                                    <img src="<?=base_url('alurpendaftaran.png')?>" align="center" width="600" style="max-width: 100%">
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="persyaratan">
                    <div class="container">
                        <h5 class="text-center">Persyaratan Seleksi</h5>
                        <h6 class="text-center">Persyaratan Umum</h6>
                        <div class="row">
                            <div class="col-sm-4 mt-5 d-flex align-items-center"><img src="<?=base_url('alurpendaftaran.png')?>" width="100%"></div>

                            <div class="col-sm-8 mt-5">
                                <ol type="1" style="margin:0pt; padding-left:0pt">
                                    <li style="margin:0pt 0pt 0pt 31.25pt; text-indent:0pt; padding-left:4.75pt;">
                                        <span>Menyediakan petugas laboratorium komputer (proktor dan teknisi). </span>
                                    </li>
                                    <li style=" margin:0pt 0pt 0pt 31.25pt; text-indent:0pt; padding-left:4.75pt;">
                                        <span>Menyediakan sarana komputer dengan spesifikasi (minimal) sebagai berikut:</span>
                                    </li>
                                </ol>
                                <ol type="a" style="margin:0pt; padding-left:0pt">
                                    <li style="margin:0pt 0pt 0pt 48.7pt; text-indent:0pt; padding-left:8pt;">
                                        <span style="font-size:11pt; font-weight:bold">Server</span>
                                        <ul type="disc" style="margin:0pt; padding-left:0pt">
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;; font-weight:normal">
                                                <span>PC/Tower/Desktop (bukan laptop) </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Processor 4 core dan clock rate minimal 1.6 GHz (64 bit)</span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>RAM 8 GB, DDR 3</span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Harddisk 250 GB </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Operating System (64 bit): Windows Server/Windows 8/Windows 7 /Linux Ubuntu 14.04 </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>LAN CARD (NIC) 2 unit support GigaByte </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>UPS (tahan 15 menit) </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Jumlah server mengikuti rasio 1:40 (1 server maksimal untuk 40 client) </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Cadangan 1 server.</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li style="margin:0pt 0pt 0pt 49.32pt; text-indent:0pt; padding-left:7.38pt;">
                                        <span style="font-size:11pt; font-weight:bold">Client</span>
                                        <ul type="disc" style="margin:0pt; padding-left:0pt">
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;; font-weight:normal">
                                                <span>PC atau Laptop </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Monitor minimal 11 inch </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Processor minimal single core </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>RAM minimal 512 MB </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Operating System: Windows XP/Windows 7/Windows 8/ LINUX / MAC / Chrome OS</span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Web Browser: Exambro versi terbaru </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Hardisk minimal tersedia 10 GB (free space) </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>LAN Card </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Jumlah client mengikuti rasio 1:3 (1 client untuk 3 peserta) </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Cadangan minimal 10%. </span>
                                            </li>
                                            <li style="margin:0pt 0pt 0pt 10.06pt; text-indent:0pt; padding-left:11.24pt;">
                                                <span>Headset/earphone (untuk ujian listening SMA/MA dan SMK)</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                                <ol start="3" type="1" style="margin:0pt; padding-left:0pt">
                                    <li style="margin:0pt 0pt 0pt 31.25pt; text-indent:0pt; padding-left:4.75pt;">
                                        <span>Jaringan internet dengan bandwidth minimal 1 Mbps</span>
                                    </li>
                                    <li style=" margin:0pt 0pt 0pt 31.25pt; text-indent:0pt; padding-left:4.75pt;"><span>Jaringan a</span><span>rea lokal (Local Area Network - </span><span>LAN):</span><span> </span></li>
                                </ol>
                                <ul type="disc" style="margin:0pt; padding-left:0pt">
                                    <li style="margin:0pt 0pt 0pt 45.51pt; text-indent:0pt; padding-left:11.19pt;">
                                        <span>Switch 10/100/1000 Mbps dengan jumlah port sesuai dengan jumlah komputer pada setiap setiap server. </span>
                                    </li>
                                    <li style="margin:0pt 0pt 0pt 45.51pt; text-indent:0pt; padding-left:11.19pt;">
                                        <span>Setiap server harus memiliki switch sendiri (tidak digabung dengan server lain).</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="home-footer ">
                <div class="container text-center">
                    Copyright © 2022. CPSG-23
                </div>
            </div>
        </div>
        <script>
            var baseURL = '/';
            var uniqueID = 'd8ac8098665d68759eeda768373bb6c2';
        </script>
        <!-- Vendor -->
        <script src="<?=base_url('assets/front')?>/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url('assets/front')?>/jquery.form.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?=base_url('assets/front')?>/wow.min.js"></script>
        <!-- Assets -->
        <script src="<?=base_url('assets/front')?>/front.min.js"></script>
    

</body></html>