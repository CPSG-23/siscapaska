<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$AttributePage['title']?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('assets/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/css/themes/all-themes.css')?>" rel="stylesheet" />
    
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?= $this->include('layouts/admin/navbar') ?>
    <!-- #Top Bar -->
    <?= $this->include('layouts/admin/sidebar') ?>
    <?= $this->renderSection('content') ?>
    <!-- Jquery Core Js -->
    <script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?=base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url('assets/plugins/jquery-datatable/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('assets/plugins/editable-table/mindmup-editabletable.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')?>"></script>
    <script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('assets/js/admin.js')?>"></script>
    <script>
        let siteUrl = '<?=site_url()?>';
    </script>
    <script src="<?=base_url('assets/js/pages/tables/jquery-datatable.js')?>"></script>

    <!-- Demo Js -->
    <script src="<?=base_url('assets/js/demo.js')?>"></script>
    
</body>

</html>
