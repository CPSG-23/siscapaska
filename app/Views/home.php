<?= $this->extend('layouts/page_layout') ?>
<?= $this->section('content') ?>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Selamat Datang di Website</br>Sistem Informasi Seleksi Calon Paskibraka</h1>
      <div class="row center">
        <h5 class="header col s12 light">Bagi kamu siswa kelas X MA/SMA/SMK, Buruan Daftar Segera</h5>
      </div>
      <div class="row center">
        <a href="<?=site_url('register')?>" id="download-button" class="btn-large waves-effect waves-light orange">Daftar</a>
      </div>
      <br><br>

    </div>
  </div>
  <?= $this->endSection() ?>