
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <h1>Input Nilai Samapta</h1>
                            </h2>
                        </div>
                        <div class="body">
                            <form action='<?=site_url('admin/samapta/create_action')?>' method='post'>
                                <div class="table-responsive">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="kode_peserta">Kode Peserta</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class='form-select' name='kode_peserta'>
                                                    <option>Pilih Kode Peserta</option>
                                                    <?php
                                                    foreach($peserta as $r){?>
                                                        <option value='<?=$r['kode_peserta']?>'><?=$r['kode_peserta'].' - '.$r['nama']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover table-bordered table-striped table-sm">
                                        <thead>
                                        <tr>
                                            <th width="15%">Lari</th>
                                            <th width="15%">Sit Up</th>
                                            <th width="15%">Push Up</th>
                                            <th width="15%">Shuttle RUN</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type='text' name='lari' class='form-control' required></td>
                                                <td><input type='number' name='sit_up' class='form-control' required></td>
                                                <td><input type='number' name='push_up' class='form-control' required></td>
                                                <td><input type='number' name='shuttle_run' class='form-control' required></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                                        <th width="5%">Kode</th>
                                        <th width="15%">Lari</th>
                                        <th width="15%">Sit Up</th>
                                        <th width="15%">Push Up</th>
                                        <th width="15%">Shuttle RUN</th>
                                        <th width="15%">Total Nilai</th>
                                        <?php if(session()->hak_access == 'Administrator'):?>
                                        <th width="20%">Action</th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <td><?= $value['lari'] ?></td>
                                            <td><?= $value['sit_up'] ?></td>
                                            <td><?= $value['push_up'] ?></td>
                                            <td><?= $value['shuttle_run'] ?></td>
                                            <td><?= (($value['lari']+$value['push_up']+$value['sit_up']+$value['shuttle_run'])) ?></td>
                                            <?php if(session()->hak_access == 'Administrator'):?>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/samapta/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
                                                </span>
                                            </td>
                                            <?php endif; ?>
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