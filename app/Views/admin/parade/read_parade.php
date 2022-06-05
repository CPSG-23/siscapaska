
<?= $this->extend('layouts/admin/admin_layout'); ?>
<?= $this->section('content'); ?>

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
                            <h1><?= $content; ?></h1>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li><a href="<?= base_url('admin/users/create') ?>" class="btn btn-sm btn-primary">CREATE</a></li>
                            </ul>
                        </div>
                        <div class="body">
<div class="table-responsive">
<table class="table table-light table-striped">
    <tbody>
	    <tr><th width="15%">Username</th><td>: 	<?php echo $data['username']; ?></td></tr>
	    <tr><th width="15%">Password</th><td>: 	<?php echo $data['password']; ?></td></tr>
	    <tr><th width="15%">Hak Access</th><td>: 	<?php echo $data['hak_access']; ?></td></tr>
                </tbody>
            </table>
            <div class="d-flex p-2 bd-highlight">
                <a class="btn btn-sm btn-danger" href="<?= \base_url('admin/users') ?>">back</a>
            </div>
            </div>
        </div>
    </section>
<?= $this->endSection(); ?>