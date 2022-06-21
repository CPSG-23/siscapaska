<?= $this->extend('layouts/page_layout') ?>
<?= $this->section('content') ?>
<div id="index-banner">
    <div id="home" style="border-bottom-right-radius:100px 100px">
        <div class="container row">
            <div class="col s12 m12 l8">
                <div class="carousel carousel-slider">
                    <div class="carousel-item active">
                        <div>
                            <h5 class="animated fadeInDownBig">
                                Selamat Datang Di website SISCAPASKA Online
                            </h5>
                            <br />
                            <p class="animated slideInRight" data-delay="1s">
                                Aplikasi Seleksi Calon Anggota Paskibraka.
                            </p>
                            <p class="animated slideInRight" data-delay="2s">
                                Pendaftaran Seleksi Calon Anggota Paskibraka ini telah dibuka. Segera Daftar dan lengkapi Formulir
                            </p>
                            <p class="animated flipInX" data-delay="3s">
                                <a href="/#tentang" class="btn btn-warning nav-link">
                                    Lihat Alur Pendaftaran
                                    <span class="fa fa-chevron-down"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card-panel teal accent-1" style="border-radius: 25px;">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field">
                                    <i class="material-icons prefix">people</i>
                                    <input type='text' name="username" id="icon_username"/>
                                    <label for="icon_username">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input type='password' name="password" id="icon_username"/>
                                    <label for="icon_password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 card-action center">
                                    <button class="btn blue accent-2 s6" style="border-radius: 20px; width: 100%">Login</button>
                                </div>
                            </div>
                            
                        </form>
                        <div class="col s12 center" >
                            <a href="#register" class="btn blue accent-2 s6" style="border-radius: 20px; width: 100%">Daftar Disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="register">
        <div class='row'>
            <div class='col m6 s12'>
                <div class="card-panel waves-effect waves-purple">
                    <span class='card-title'>Formulir Pendaftaran</span>
                    <form class='col s12' action='<?=site_url('register/create_action')?>' method='post'>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input placeholder="Nama Lengkap" id="nama_lengkap" type="text" name='nama' class="validate">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input id="nisn" type="text" class="validate" placeholder='NISN digunakan untuk Username'>
                                <label for="nisn">NISN <span style='color:red'>*Sebagai Username Anda</span></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input id="email" type="email" class="validate" placeholder='Ex: yahya@example.com'>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input id="password" type="password" name='password' class="validate" placeholder='Mohon Diingat!'>
                                <label for="password">Password(<span style='color:red'>Mohon Diingat!</span>)</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col m6 s12">
                                <input id="hp" type="text" name='hp' class="validate" placeholder='Ex: +6289656729xxx'>
                                <label for="hp">No. Hp</label>
                            </div>
                            <div class="input-field col m6 s12">
                                <input type="submit" value='Login' class="btn green">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class='col m6 s12' id='tentang'>
                <div class='card-panel waves-effect waves-purple'>
                    <div class='card-image'>
                        <img class='col s12' src="<?=base_url('alurpendaftaran.png')?>" alt="Alur Pendaftaran">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>