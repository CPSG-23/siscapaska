
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
                            <ul class="header-dropdown m-r--5">
                                <li><a href="<?= base_url('admin/users/create') ?>" class="btn btn-sm btn-primary">CREATE</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped table-sm" id="mytable">
                                    <thead>
                                    <tr>
                                        <th width="10px">Kode</th>
                                        <th width="10px">TB</th>
                                        <th width="10px">BB</th>
                                        <th width="10px">Mata</th>
                                        <th width="10px">Bahu</th>
                                        <th width="10px">Tangan</th>
                                        <th width="10px">Kaki</th>
                                        <th width="10px">Platefoot</th>
                                        <th width="20px">Total Nilai</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <td><?= $value['tinggi_badan'] ?></td>
                                            <td><?= $value['berat_badan'] ?></td>
                                            <td><?= $value['mata'] ?></td>
                                            <td><?= $value['bahu'] ?></td>
                                            <td><?= $value['tangan'] ?></td>
                                            <td><?= $value['kaki'] ?></td>
                                            <td><?= $value['platefoot'] ?></td>
                                            <td><?= (($value['tinggi_badan']+$value['berat_badan']+$value['mata']+$value['bahu']+$value['tangan']+$value['kaki']+$value['platefoot'])/100)*0.15 ?></td>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('admin/users/read/'.$value['id'] )?>"><i class='material-icons'>info</i></a>
                                                    <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('admin/users/update/'.$value['id'] )?>"><i class='material-icons'>edit</i></a>
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/users/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
                                                </span>
                                            </td>
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