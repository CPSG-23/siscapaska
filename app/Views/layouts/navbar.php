			<div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="<?=base_url('public/logo_ppi.jpg')?>" height="75">
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
                                <li class="nav-item <?=($request->uri->getSegment('1') == '' ) ? 'active' : ''?>">
                                    <a class="nav-link" href="<?=site_url()?>" id="link-home">Home</a>
                                </li>
                                <li class="nav-item <?=($request->uri->getSegment('1') == 'persyaratan' ) ? 'active' : ''?>">
                                    <a class="nav-link" href="<?=site_url('persyaratan')?>" id="link-persyaratan">Persyaratan</a>
                                </li>
                                <li class="nav-item <?=($request->uri->getSegment('1') == 'about' ) ? 'active' : ''?>">
                                    <a class="nav-link" href="<?=site_url('about')?>" id="link-tentang">Tentang</a>
                                </li>
                                <?php if($session->isLoggedIn == TRUE):?>
                                <li class="nav-item <?=($request->uri->getSegment('1') == 'myaccount' ) ? 'active' : ''?>">
                                    <a class="nav-link" href="<?=site_url('myaccount')?>">My Account</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>