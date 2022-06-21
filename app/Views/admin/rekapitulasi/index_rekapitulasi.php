
<?= $this->extend('layouts/admin/admin_layout'); ?>
<?= $this->section('content'); ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <?php if (session()->getFlashdata('message')): ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('message') ?>
                </div>   
            <?php endif; ?>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <h1><?= $content; ?></h1>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped table-sm" id="mytable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Peserta</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>TB</th>
                                        <th>BB</th>
                                        <th>Parade</th>
                                        <th>Samapta</th>
                                        <th>PBB</th>
                                        <th>Psikotes</th>
                                        <th>Kesenian</th>
                                        <th>Interview</th>
                                        <th>Kesehatan</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td width="20px"><?php  echo $start++ ?></td>
                                            <td><?= $value->kode_peserta ?></td>
                                            <td><?= $value->nama ?></td>
                                            <td><?= $value->asal_sekolah ?></td>
                                            <td><?= $value->tinggi_badan ?></td>
                                            <td><?= $value->berat_badan ?></td>
                                            <td><?= $value->parade * 0.15; ?></td>
                                            <td><?= $value->samapta * 0.15 ?></td>
                                            <td><?= $value->pbb * 0.15?></td>
                                            <td><?= $value->psikotes * 0.20?></td>
                                            <td><?= $value->kesenian *0.05 ?></td>
                                            <td><?= $value->wawancara * 0.05 ?></td>
                                            <td><?= $value->kesehatan * 0.15 ?></td>
                                            <td><?=$value->samapta + $value->parade + $value->pbb + $value->psikotes + $value->kesenian + $value->wawancara + $value->kesehatan?></td>
                                        </tr>
                                        <?php  endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>
<?= $this->endSection(); ?>