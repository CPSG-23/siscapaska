<?= $this->extend('layouts/page_layout') ?>
<?= $this->section('content') ?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container" id="home">
        <div class="row">
            <div class="col s12 m12 l8">
                <div class="carousel carousel-slider">
                    <div class="carousel-item active">
                        <div>
                            <h5 class="animated fadeInDownBig">
                                Selamat Datang Di web Siscapaska Online
                            </h5>
                            <br />
                            <p class="animated slideInRight" data-delay="1s">
                                Aplikasi Seleksi Calon Anggota Paskibraka.
                            </p>
                            <p class="animated slideInRight" data-delay="2s">
                                Pendaftaran Seleksi Calon Anggota Paskibraka ini telah dibuka. Silahkan Segera Daftar dan lengkapi Formulir
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
                <div class="card-panel  light-blue accent-2">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="register">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        This is an inline input field:
                        <div class="input-field inline">
                            <input id="email_inline" type="email" class="validate">
                            <label for="email_inline">Email</label>
                            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>