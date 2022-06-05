<?= $this->extend('layouts/admin/admin_layout') ?>
<?= $this->section('content') ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Peserta
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li><a href="#" class="btn bg-teal waves-effect"><i class='material-icons'>add</i>Tambah Peserta</a></li>
                                <li><a href="#" class="btn bg-teal waves-effect"><i class='material-icons'>download</i>Download Data</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Peserta</th>
                                            <th>Jenis Kelamin</th>
                                            <th>HP</th>
                                            <th>Asal Sekolah</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>
<?= $this->endSection() ?>