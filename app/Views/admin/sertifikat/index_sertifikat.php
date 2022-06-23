
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
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>Sertifikat</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td width="20px"><?php  echo $start++ ?></td>
                                            <td><?= $value['nama'] ?></td>
                                            <td><?= $value['asal_sekolah'] ?></td>
                                            <td><span class='badge <?= ($value['status_sertifikat'] == 'draft' ) ? 'bg-teal' : 'btn-red'?>'><?= $value['status_sertifikat'] ?></span></td>
                                            <td><form action='<?=site_url('admin/sertifikat/create_action')?>'>
                                                    <span class="float-right">
                                                        <?php
                                                        if ($value['status_sertifikat'] == 'draft') {
                                                            echo "<input type='hidden' name='status_sertifikat' value='publish'>";
                                                        }else{
                                                            echo "<input type='hidden' name='status_sertifikat' value='draft'>";
                                                        }
                                                        ?>
                                                        <input type='hidden' name='id' value='<?=$value['id'];?>'>
                                                        <input type="submit" class="waves-effect waves-cyan btn btn-sm <?= ($value['status_sertifikat'] == 'draft' ) ? 'btn-warning' : 'btn-danger'?> " value="<?= ($value['status_sertifikat'] == 'draft' ) ? 'Publish' : 'Draft'?>"> 
                                                    </span>
                                                </form>
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