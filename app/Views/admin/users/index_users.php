
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
    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Hak Access</th>
		<th>Action</th>
        </tr>
        <tr>
        </thead><?php foreach ($data as $value): ?>
        <tr>
			<td width="80px"><?php $start=0; echo ++$start ?></td>
			<td><?= $value['username'] ?></td>
			<td><?= $value['password'] ?></td>
			<td><?= $value['hak_access'] ?></td><td>
            <span class="float-right">
                <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('admin/users/read/'.$value['id'] )?>">READ</a>
                <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('admin/users/update/'.$value['id'] )?>">EDITE</a>
                <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/users/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')">DELETE</a>
            </span>
            </td>
            <?php  endforeach; ?>
        </tbody>
    </table>
    <!-- pagination -->
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>
<?= $this->endSection(); ?>