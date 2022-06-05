<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?=base_url('assets/images/user.png')?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
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
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Data Master</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?=site_url('admin/importmaster')?>">Import Data Master</a>
                            </li>
                            <li class="active">
                                <a href="<?=site_url('admin/datasekolah')?>">Data Sekolah</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'peserta' ? 'active': '')?>">
                        <a href="<?=site_url('admin/peserta')?>">
                            <i class="material-icons">people</i>
                            <span>Peserta</span>
                        </a>
                    </li>
                    <li class="<?=($AttributePage['request']->uri->getSegment(2) == 'users' ? 'active': '')?>">
                        <a href="<?=site_url('admin/users')?>">
                            <i class="material-icons">people</i>
                            <span>Manajemen User</span>
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