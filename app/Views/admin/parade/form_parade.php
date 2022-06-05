
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
<h4 style="margin-top:0px">Users <?php echo $content; ?></h4>
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Username
                            <?php echo ('username') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="username" id="username"
                            placeholder="Username" value="<?php echo $data['username']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Password
                            <?php echo ('password') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="password" id="password"
                            placeholder="Password" value="<?php echo $data['password']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="enum">Hak Access
                            <?php echo ('hak_access') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="hak_access" id="hak_access"
                            placeholder="Hak Access" value="<?php echo $data['hak_access']; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/users') ?>">Cencel</a>
        <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
    </div>
    </div>
</form>
</div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>


<?= $this->endSection(); ?>