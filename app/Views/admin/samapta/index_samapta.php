
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
                                        <th width="5%">Kode</th>
                                        <th width="15%">Lari</th>
                                        <th width="15%">Sit Up</th>
                                        <th width="15%">Push Up</th>
                                        <th width="15%">Shuttle RUN</th>
                                        <th width="15%">Total Nilai</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <td><?= $value['lari'] ?></td>
                                            <td><?= $value['sit_up'] ?></td>
                                            <td><?= $value['push_up'] ?></td>
                                            <td><?= $value['shutle_run'] ?></td>
                                            <td><?= (($value['lari']+$value['push_up']+$value['sit_up']+$value['shuttle_run'])/100)*0.15 ?></td>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('admin/samapta/read/'.$value['id'] )?>"><i class='material-icons'>info</i></a>
                                                    <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('admin/samapta/update/'.$value['id'] )?>"><i class='material-icons'>edit</i></a>
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/samapta/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
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