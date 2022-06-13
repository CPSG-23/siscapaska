
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
                            <h1>Input Nilai Kesenian</h1>
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method='post' action='<?=site_url('admin/kesenian/create_action')?>'>
                                <div class='table-responsive'>
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="kode_peserta">Kode Peserta</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select class='form-select' name='kode_peserta'>
                                                        <option>Pilih Kode Peserta</option>
                                                        <?php foreach($peserta as $r){?>
                                                            <option value='<?=$r['kode_peserta']?>'><?=$r['kode_peserta'].' - '.$r['nama']?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    <table class='table table-bordered center'>
                                        <thead style='background-color: silver; text-align: center;'>
                                            <tr align="center">
                                                <th rowspan='2' valign='center'>No</th>
                                                <th rowspan='2' valign='center'>Kriteria</th>
                                                <th rowspan='2' valign='center'>BN</th>
                                                <th colspan='3'>Kurang</th>
                                                <th colspan='3'>Cukup</th>
                                                <th colspan='3'>Baik</th>
                                            </tr>
                                            <tr>
                                                <th>50</th>
                                                <th>55</th>
                                                <th>60</th>
                                                <th>65</th>
                                                <th>70</th>
                                                <th>75</th>
                                                <th>80</th>
                                                <th>85</th>
                                                <th>90</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan='12' class='text-center text-bold'>Menyanyi</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Suara Baik</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='5' id="menyanyi_suara_kurang_1" class="with-gap" required />
                                                    <label for="menyanyi_suara_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='5.5' id="menyanyi_suara_kurang_2" class="with-gap" required />
                                                    <label for="menyanyi_suara_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='6' id="menyanyi_suara_kurang_3" class="with-gap" required />
                                                    <label for="menyanyi_suara_kurang_3">6</label></td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='6.5' id="menyanyi_suara_cukup_1" class="with-gap" required />
                                                    <label for="menyanyi_suara_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='7' id="menyanyi_suara_cukup_2" class="with-gap" required />
                                                    <label for="menyanyi_suara_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='7.5' id="menyanyi_suara_cukup_3" class="with-gap" required />
                                                    <label for="menyanyi_suara_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='8' id="menyanyi_suara_baik_1" class="with-gap" required />
                                                    <label for="menyanyi_suara_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='8.5' id="menyanyi_suara_baik_2" class="with-gap" required />
                                                    <label for="menyanyi_suara_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="menyanyi_suara_baik" type="radio" value='9' id="menyanyi_suara_baik_3" class="with-gap" required />
                                                    <label for="menyanyi_suara_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Intonasi Lagu</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='5' id="intonasi_lagu_kurang_1" class="with-gap" required />
                                                    <label for="intonasi_lagu_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='5.5' id="intonasi_lagu_kurang_2" class="with-gap" required />
                                                    <label for="intonasi_lagu_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='6' id="intonasi_lagu_kurang_3" class="with-gap" required />
                                                    <label for="intonasi_lagu_kurang_3">6</label></td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='6.5' id="intonasi_lagu_cukup_1" class="with-gap" required />
                                                    <label for="intonasi_lagu_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='7' id="intonasi_lagu_cukup_2" class="with-gap" required />
                                                    <label for="intonasi_lagu_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='7.5' id="intonasi_lagu_cukup_3" class="with-gap" required />
                                                    <label for="intonasi_lagu_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='8' id="intonasi_lagu_baik_1" class="with-gap" required />
                                                    <label for="intonasi_lagu_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='8.5' id="intonasi_lagu_baik_2" class="with-gap" required />
                                                    <label for="intonasi_lagu_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="intonasi_lagu" type="radio" value='9' id="intonasi_lagu_baik_3" class="with-gap" required />
                                                    <label for="intonasi_lagu_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Penghayatan</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='5' id="penghayatan_kurang_1" class="with-gap" required />
                                                    <label for="penghayatan_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='5.5' id="penghayatan_kurang_2" class="with-gap" required />
                                                    <label for="penghayatan_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='6' id="penghayatan_kurang_3" class="with-gap" required />
                                                    <label for="penghayatan_kurang_3">6</label></td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='6.5' id="penghayatan_cukup_1" class="with-gap" required />
                                                    <label for="penghayatan_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='7' id="penghayatan_cukup_2" class="with-gap" required />
                                                    <label for="penghayatan_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='7.5' id="penghayatan_cukup_3" class="with-gap" required />
                                                    <label for="penghayatan_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='8' id="penghayatan_baik_1" class="with-gap" required />
                                                    <label for="penghayatan_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='8.5' id="penghayatan_baik_2" class="with-gap" required />
                                                    <label for="penghayatan_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan" type="radio" value='9' id="penghayatan_baik_3" class="with-gap" required />
                                                    <label for="penghayatan_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan='12' class='text-center text-bold'>Menari</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Gerakan Gemulai</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='5' id="gerakan_gemulai_kurang_1" class="with-gap" required />
                                                    <label for="gerakan_gemulai_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='5.5' id="gerakan_gemulai_kurang_2" class="with-gap" required />
                                                    <label for="gerakan_gemulai_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='6' id="gerakan_gemulai_kurang_3" class="with-gap" required />
                                                    <label for="gerakan_gemulai_kurang_3">6</label></td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='6.5' id="gerakan_gemulai_cukup_1" class="with-gap" required />
                                                    <label for="gerakan_gemulai_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='7' id="gerakan_gemulai_cukup_2" class="with-gap" required />
                                                    <label for="gerakan_gemulai_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='7.5' id="gerakan_gemulai_cukup_3" class="with-gap" required />
                                                    <label for="gerakan_gemulai_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='8' id="gerakan_gemulai_baik_1" class="with-gap" required />
                                                    <label for="gerakan_gemulai_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='8.5' id="gerakan_gemulai_baik_2" class="with-gap" required />
                                                    <label for="gerakan_gemulai_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="gerakan_gemulai" type="radio" value='9' id="gerakan_gemulai_baik_3" class="with-gap" required />
                                                    <label for="gerakan_gemulai_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pengetahuan</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='5' id="menari_pengetahuan_kurang_1" class="with-gap" required />
                                                    <label for="menari_pengetahuan_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='5.5' id="menari_pengetahuan_kurang_2" class="with-gap" required />
                                                    <label for="menari_pengetahuan_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='6' id="menari_pengetahuan_kurang_3" class="with-gap" required />
                                                    <label for="menari_pengetahuan_kurang_3">6</label></td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='6.5' id="menari_pengetahuan_cukup_1" class="with-gap" required />
                                                    <label for="menari_pengetahuan_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='7' id="menari_pengetahuan_cukup_2" class="with-gap" required />
                                                    <label for="menari_pengetahuan_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='7.5' id="menari_pengetahuan_cukup_3" class="with-gap" required />
                                                    <label for="menari_pengetahuan_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='8' id="menari_pengetahuan_baik_1" class="with-gap" required />
                                                    <label for="menari_pengetahuan_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='8.5' id="menari_pengetahuan_baik_2" class="with-gap" required />
                                                    <label for="menari_pengetahuan_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_pengetahuan" type="radio" value='9' id="menari_pengetahuan_baik_3" class="with-gap" required />
                                                    <label for="menari_pengetahuan_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Penghayatan</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='5' id="menari_penghayatan_kurang_1" class="with-gap" required />
                                                    <label for="menari_penghayatan_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='5.5' id="menari_penghayatan_kurang_2" class="with-gap" required />
                                                    <label for="menari_penghayatan_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='6' id="menari_penghayatan_kurang_3" class="with-gap" required />
                                                    <label for="menari_penghayatan_kurang_3">6</label></td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='6.5' id="menari_penghayatan_cukup_1" class="with-gap" required />
                                                    <label for="menari_penghayatan_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='7' id="menari_penghayatan_cukup_2" class="with-gap" required />
                                                    <label for="menari_penghayatan_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='7.5' id="menari_penghayatan_cukup_3" class="with-gap" required />
                                                    <label for="menari_penghayatan_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='8' id="menari_penghayatan_baik_1" class="with-gap" required />
                                                    <label for="menari_penghayatan_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='8.5' id="menari_penghayatan_baik_2" class="with-gap" required />
                                                    <label for="menari_penghayatan_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="menari_penghayatan" type="radio" value='9' id="menari_penghayatan_baik_3" class="with-gap" required />
                                                    <label for="menari_penghayatan_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan='12' class='text-center text-bold'>Alat Musik</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Memainkan / Mengiringi</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='5' id="memainkan_alat_musik_kurang_1" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='5.5' id="memainkan_alat_musik_kurang_2" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='6' id="memainkan_alat_musik_kurang_3" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_kurang_3">6</label></td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='6.5' id="memainkan_alat_musik_cukup_1" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='7' id="memainkan_alat_musik_cukup_2" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='7.5' id="memainkan_alat_musik_cukup_3" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='8' id="memainkan_alat_musik_baik_1" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='8.5' id="memainkan_alat_musik_baik_2" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="memainkan_alat_musik" type="radio" value='9' id="memainkan_alat_musik_baik_3" class="with-gap" required />
                                                    <label for="memainkan_alat_musik_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Pengetahuan</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='5' id="pengetahuan_alat_musik_kurang_1" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='5.5' id="pengetahuan_alat_musik_kurang_2" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='6' id="pengetahuan_alat_musik_kurang_3" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_kurang_3">6</label></td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='6.5' id="pengetahuan_alat_musik_cukup_1" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='7' id="pengetahuan_alat_musik_cukup_2" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='7.5' id="pengetahuan_alat_musik_cukup_3" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='8' id="pengetahuan_alat_musik_baik_1" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='8.5' id="pengetahuan_alat_musik_baik_2" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="pengetahuan_alat_musik" type="radio" value='9' id="pengetahuan_alat_musik_baik_3" class="with-gap" required />
                                                    <label for="pengetahuan_alat_musik_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Penghayatan</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='5' id="penghayatan_alat_musik_kurang_1" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='5.5' id="penghayatan_alat_musik_kurang_2" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='6' id="penghayatan_alat_musik_kurang_3" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_kurang_3">6</label></td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='6.5' id="penghayatan_alat_musik_cukup_1" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='7' id="penghayatan_alat_musik_cukup_2" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='7.5' id="penghayatan_alat_musik_cukup_3" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='8' id="penghayatan_alat_musik_baik_1" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='8.5' id="penghayatan_alat_musik_baik_2" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="penghayatan_alat_musik" type="radio" value='9' id="penghayatan_alat_musik_baik_3" class="with-gap" required />
                                                    <label for="penghayatan_alat_musik_baik_3">9</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan=2>Keterampilan Lainnya</td>
                                                <td style='background-color:silver'>10</td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='5' id="keterampilan_lainnya_kurang_1" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_kurang_1">5</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='5.5' id="keterampilan_lainnya_kurang_2" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_kurang_2">5,5</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='6' id="keterampilan_lainnya_kurang_3" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_kurang_3">6</label></td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='6.5' id="keterampilan_lainnya_cukup_1" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_cukup_1">6,5</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='7' id="keterampilan_lainnya_cukup_2" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_cukup_2">7</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='7.5' id="keterampilan_lainnya_cukup_3" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_cukup_3">7,5</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='8' id="keterampilan_lainnya_baik_1" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_baik_1">8</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='8.5' id="keterampilan_lainnya_baik_2" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_baik_2">8,5</label>
                                                </td>
                                                <td>
                                                    <input name="keterampilan_lainnya" type="radio" value='9' id="keterampilan_lainnya_baik_3" class="with-gap" required />
                                                    <label for="keterampilan_lainnya_baik_3">9</label>
                                                </td>
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
                                        <th rowspan='2' width="7%">Kode</th>
                                        <th colspan='3' width="8%">Menyanyi</th>
                                        <th colspan='3' width="8%">Menari</th>
                                        <th colspan='3' width="8%">Alat Musik</th>
                                        <th rowspan='2' width="9%">Keterampilan Lainnya</th>
                                        <th rowspan='2' width="9%">Total Nilai</th>
                                        <th rowspan='2' width="15%">Action</th>
                                    </tr>
                                    <tr>
                                        <th>Suara Baik</th>
                                        <th>Intonasi Lagu</th>
                                        <th>Penghayatan</th>
                                        <th>Gerakan Gemulai</th>
                                        <th>Pengetahuan</th>
                                        <th>Penghayatan</th>
                                        <th>Memainkan</th>
                                        <th>Pengetahuan</th>
                                        <th>Penghayatan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <?php foreach(unserialize($value['menyanyi']) as $dt): echo "<td>".$dt."</td>"; endforeach; ?>
                                            <?php foreach(unserialize($value['menari']) as $dt): echo "<td>".$dt."</td>"; endforeach; ?>
                                            <?php foreach(unserialize($value['alat_musik']) as $dt): echo "<td>".$dt."</td>"; endforeach; ?>
                                            <td><?= $value['keterampilan_lainnya'] ?></td>
                                            <td><?= $value['total_nilai'] ?></td>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/kesenian/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
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