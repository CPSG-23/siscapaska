
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
                                <li><a href="<?= base_url('admin/peserta/create') ?>" class="btn btn-sm btn-primary">CREATE</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-responsive table-striped table-sm" width="100%" id="mytable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jk</th>
                                            <th class="text-center">Ttl</th>
                                            <th class="text-center">Hp</th>
                                            <th class="text-center">Asal Sekolah</th>
                                            <th class="text-center">Tinggi Badan</th>
                                            <th class="text-center">Berat Badan</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td width="20px" class="text-center"><?php  echo $start++ ?></td>
                                            <td><?= $value['nama'] ?></td>
                                            <td class="text-center"><?= $value['jk'] ?></td>
                                            <td><?= $value['ttl'] ?></td>
                                            <td class="text-center"><?= $value['hp'] ?></td>
                                            <td><?= $value['asal_sekolah'] ?></td>
                                            <td class="text-center"><?= $value['tinggi_badan'] ?></td>
                                            <td class="text-center"><?= $value['berat_badan'] ?></td>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('admin/peserta/read/'.$value['id'] )?>"><i class='material-icons'>info</i></a>
                                                    <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('admin/peserta/update/'.$value['id'] )?>"><i class='material-icons'>edit</i></a>
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/peserta/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <?php  endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- pagination -->
                            </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>
<?= $this->endSection(); ?>