<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url('assets/images/user.png')?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=session()->username?></div>
                    <div class="email"><?=session()->hak_access?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?=site_url('login/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == '' ? 'active': '')?>">
                        <a href="<?=base_url('admin')?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <?php if(session()->hak_access == 'Administrator'):?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=site_url('admin/importmaster')?>">Import Data Master</a>
                            </li>
                            <li>
                                <a href="<?=site_url('admin/datasekolah')?>">Data Sekolah</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif;?>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'peserta' ? 'active': '')?>">
                        <a href="<?=site_url('admin/peserta')?>">
                            <i class="material-icons">people</i>
                            <span>Peserta</span>
                        </a>
                    </li>
                    <li class='<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' ? 'active': '')?>'>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Nilai</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'parade' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/parade')?>">Parade</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'pbb' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/pbb')?>">PBB</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'pbb' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/psikotes')?>">Psikotes</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'samapta' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/samapta')?>">Samapta</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'kesehatan' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/kesehatan')?>">Kesehatan</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'wawancara' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/wawancara')?>">Wawancara</a>
                            </li>
                            <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'nilai' && $AttributePage['request']->uri->getSegment(3) == 'kesenian' ? 'active': '')?>">
                                <a href="<?=site_url('admin/nilai/kesenian')?>">Kesenian</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(session()->hak_access == 'Administrator'):?>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'users' ? 'active': '')?>">
                        <a href="<?=site_url('admin/users')?>">
                            <i class="material-icons">people</i>
                            <span>Manajemen User</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'sertifikat' ? 'active': '')?>">
                        <a href="<?=site_url('admin/sertifikat')?>">
                            <i class="material-icons">book</i>
                            <span>Sertifikat</span>
                        </a>
                    </li>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'rekapitulasi' ? 'active': '')?>">
                        <a href="<?=site_url('admin/rekapitulasi')?>">
                            <i class="material-icons">assignment_turned_in</i>
                            <span>Rekapitulasi</span>
                        </a>
                    </li>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'pengaturan' ? 'active': '')?>">
                        <a href="<?=site_url('admin/pengaturan')?>">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2022 <a href="javascript:void(0);">SISCAPASKA - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>