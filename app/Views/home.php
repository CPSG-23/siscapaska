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
                                    <input type='text' name="password" id="icon_username"/>
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