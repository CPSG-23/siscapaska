
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
                        <form action='<?=site_url('admin/pbb/create_action')?>' method='post'>
                            <div class="header">
                                <h2>
                                <h3>Input Nilai PBB</h3>
                                </h2>
                                <div class='header-dropdown'>
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
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-striped table-sm">
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
                                                    <td>1</td>
                                                    <td>Sikap Sempurna</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='11.3' id="menyanyi_suara_kurang_1" class="with-gap" required />
                                                        <label for="menyanyi_suara_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='8.3' id="menyanyi_suara_kurang_2" class="with-gap" required />
                                                        <label for="menyanyi_suara_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='9' id="menyanyi_suara_kurang_3" class="with-gap" required />
                                                        <label for="menyanyi_suara_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='9.8' id="menyanyi_suara_cukup_1" class="with-gap" required />
                                                        <label for="menyanyi_suara_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='10.5' id="menyanyi_suara_cukup_2" class="with-gap" required />
                                                        <label for="menyanyi_suara_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='11.3' id="menyanyi_suara_cukup_3" class="with-gap" required />
                                                        <label for="menyanyi_suara_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='12' id="sikap_sempurna_1" class="with-gap" required />
                                                        <label for="sikap_sempurna_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='12.8' id="sikap_sempurna_2" class="with-gap" required />
                                                        <label for="sikap_sempurna_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_sempurna" type="radio" value='13.5' id="sikap_sempurna_3" class="with-gap" required />
                                                        <label for="sikap_sempurna_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sikap Hormat</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='11.3' id="sikap_hormat_kurang_1" class="with-gap" required />
                                                        <label for="sikap_hormat_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='8.3' id="sikap_hormat_kurang_2" class="with-gap" required />
                                                        <label for="sikap_hormat_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='9' id="sikap_hormat_kurang_3" class="with-gap" required />
                                                        <label for="sikap_hormat_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='9.8' id="sikap_hormat_cukup_1" class="with-gap" required />
                                                        <label for="sikap_hormat_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='10.5' id="sikap_hormat_cukup_2" class="with-gap" required />
                                                        <label for="sikap_hormat_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='11.3' id="sikap_hormat_cukup_3" class="with-gap" required />
                                                        <label for="sikap_hormat_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='12' id="sikap_hormat_baik_1" class="with-gap" required />
                                                        <label for="sikap_hormat_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='12.8' id="sikap_hormat_baik_2" class="with-gap" required />
                                                        <label for="sikap_hormat_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_hormat" type="radio" value='13.5' id="sikap_hormat_baik_3" class="with-gap" required />
                                                        <label for="sikap_hormat_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Sikap Istirahat</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='11.3' id="sikap_istirahat_kurang_1" class="with-gap" required />
                                                        <label for="sikap_istirahat_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='8.3' id="sikap_istirahat_kurang_2" class="with-gap" required />
                                                        <label for="sikap_istirahat_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='9' id="sikap_istirahat_kurang_3" class="with-gap" required />
                                                        <label for="sikap_istirahat_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='9.8' id="sikap_istirahat_cukup_1" class="with-gap" required />
                                                        <label for="sikap_istirahat_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='10.5' id="sikap_istirahat_cukup_2" class="with-gap" required />
                                                        <label for="sikap_istirahat_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='11.3' id="sikap_istirahat_cukup_3" class="with-gap" required />
                                                        <label for="sikap_istirahat_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='12' id="sikap_istirahat_baik_1" class="with-gap" required />
                                                        <label for="sikap_istirahat_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='12.8' id="sikap_istirahat_baik_2" class="with-gap" required />
                                                        <label for="sikap_istirahat_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="sikap_istirahat" type="radio" value='13.5' id="sikap_istirahat_baik_3" class="with-gap" required />
                                                        <label for="sikap_istirahat_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Langkah Tegap</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='11.3' id="langkah_tegap_kurang_1" class="with-gap" required />
                                                        <label for="langkah_tegap_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='8.3' id="langkah_tegap_kurang_2" class="with-gap" required />
                                                        <label for="langkah_tegap_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='9' id="langkah_tegap_kurang_3" class="with-gap" required />
                                                        <label for="langkah_tegap_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='9.8' id="langkah_tegap_cukup_1" class="with-gap" required />
                                                        <label for="langkah_tegap_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='10.5' id="langkah_tegap_cukup_2" class="with-gap" required />
                                                        <label for="langkah_tegap_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='11.3' id="langkah_tegap_cukup_3" class="with-gap" required />
                                                        <label for="langkah_tegap_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='12' id="langkah_tegap_baik_1" class="with-gap" required />
                                                        <label for="langkah_tegap_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='12.8' id="langkah_tegap_baik_2" class="with-gap" required />
                                                        <label for="langkah_tegap_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_tegap" type="radio" value='13.5' id="langkah_tegap_baik_3" class="with-gap" required />
                                                        <label for="langkah_tegap_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Jalan di tempat</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='11.3' id="jalan_ditempat_kurang_1" class="with-gap" required />
                                                        <label for="jalan_ditempat_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='8.3' id="jalan_ditempat_kurang_2" class="with-gap" required />
                                                        <label for="jalan_ditempat_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='9' id="jalan_ditempat_kurang_3" class="with-gap" required />
                                                        <label for="jalan_ditempat_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='9.8' id="jalan_ditempat_cukup_1" class="with-gap" required />
                                                        <label for="jalan_ditempat_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='10.5' id="jalan_ditempat_cukup_2" class="with-gap" required />
                                                        <label for="jalan_ditempat_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='11.3' id="jalan_ditempat_cukup_3" class="with-gap" required />
                                                        <label for="jalan_ditempat_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='12' id="jalan_ditempat_baik_1" class="with-gap" required />
                                                        <label for="jalan_ditempat_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='12.8' id="jalan_ditempat_baik_2" class="with-gap" required />
                                                        <label for="jalan_ditempat_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="jalan_ditempat" type="radio" value='13.5' id="jalan_ditempat_baik_3" class="with-gap" required />
                                                        <label for="jalan_ditempat_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Hadap Kanan/Kiri</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='11.3' id="hadap_kanan_kiri_kurang_1" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='8.3' id="hadap_kanan_kiri_kurang_2" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='9' id="hadap_kanan_kiri_kurang_3" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='9.8' id="hadap_kanan_kiri_cukup_1" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='10.5' id="hadap_kanan_kiri_cukup_2" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='11.3' id="hadap_kanan_kiri_cukup_3" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='12' id="hadap_kanan_kiri_baik_1" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='12.8' id="hadap_kanan_kiri_baik_2" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_kanan_kiri" type="radio" value='13.5' id="hadap_kanan_kiri_baik_3" class="with-gap" required />
                                                        <label for="hadap_kanan_kiri_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Hadap Serong Kanan Kiri</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='11.3' id="hadap_serong_kanan_kiri_kurang_1" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='8.3' id="hadap_serong_kanan_kiri_kurang_2" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='9' id="hadap_serong_kanan_kiri_kurang_3" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='9.8' id="hadap_serong_kanan_kiri_cukup_1" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='10.5' id="hadap_serong_kanan_kiri_cukup_2" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='11.3' id="hadap_serong_kanan_kiri_cukup_3" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='12' id="hadap_serong_kanan_kiri_baik_1" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='12.8' id="hadap_serong_kanan_kiri_baik_2" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="hadap_serong_kanan_kiri" type="radio" value='13.5' id="hadap_serong_kanan_kiri_baik_3" class="with-gap" required />
                                                        <label for="hadap_serong_kanan_kiri_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Balik Kanan</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='11.3' id="balik_kanan_kurang_1" class="with-gap" required />
                                                        <label for="balik_kanan_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='8.3' id="balik_kanan_kurang_2" class="with-gap" required />
                                                        <label for="balik_kanan_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='9' id="balik_kanan_kurang_3" class="with-gap" required />
                                                        <label for="balik_kanan_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='9.8' id="balik_kanan_cukup_1" class="with-gap" required />
                                                        <label for="balik_kanan_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='10.5' id="balik_kanan_cukup_2" class="with-gap" required />
                                                        <label for="balik_kanan_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='11.3' id="balik_kanan_cukup_3" class="with-gap" required />
                                                        <label for="balik_kanan_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='12' id="balik_kanan_baik_1" class="with-gap" required />
                                                        <label for="balik_kanan_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='12.8' id="balik_kanan_baik_2" class="with-gap" required />
                                                        <label for="balik_kanan_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="balik_kanan" type="radio" value='13.5' id="balik_kanan_baik_3" class="with-gap" required />
                                                        <label for="balik_kanan_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Langkah L/R/F/B</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='11.3' id="langkah_lrfb_kurang_1" class="with-gap" required />
                                                        <label for="langkah_lrfb_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='8.3' id="langkah_lrfb_kurang_2" class="with-gap" required />
                                                        <label for="langkah_lrfb_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='9' id="langkah_lrfb_kurang_3" class="with-gap" required />
                                                        <label for="langkah_lrfb_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='9.8' id="langkah_lrfb_cukup_1" class="with-gap" required />
                                                        <label for="langkah_lrfb_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='10.5' id="langkah_lrfb_cukup_2" class="with-gap" required />
                                                        <label for="langkah_lrfb_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='11.3' id="langkah_lrfb_cukup_3" class="with-gap" required />
                                                        <label for="langkah_lrfb_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='12' id="langkah_lrfb_baik_1" class="with-gap" required />
                                                        <label for="langkah_lrfb_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='12.8' id="langkah_lrfb_baik_2" class="with-gap" required />
                                                        <label for="langkah_lrfb_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="langkah_lrfb" type="radio" value='13.5' id="langkah_lrfb_baik_3" class="with-gap" required />
                                                        <label for="langkah_lrfb_baik_3">13.5</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Kesigapan</td>
                                                    <td style='background-color:silver'>15</td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='11.3' id="kesigapan_kurang_1" class="with-gap" required />
                                                        <label for="kesigapan_kurang_1">7.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='8.3' id="kesigapan_kurang_2" class="with-gap" required />
                                                        <label for="kesigapan_kurang_2">8.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='9' id="kesigapan_kurang_3" class="with-gap" required />
                                                        <label for="kesigapan_kurang_3">9</label></td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='9.8' id="kesigapan_cukup_1" class="with-gap" required />
                                                        <label for="kesigapan_cukup_1">9.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='10.5' id="kesigapan_cukup_2" class="with-gap" required />
                                                        <label for="kesigapan_cukup_2">10.5</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='11.3' id="kesigapan_cukup_3" class="with-gap" required />
                                                        <label for="kesigapan_cukup_3">11.3</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='12' id="kesigapan_baik_1" class="with-gap" required />
                                                        <label for="kesigapan_baik_1">12</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='12.8' id="kesigapan_baik_2" class="with-gap" required />
                                                        <label for="kesigapan_baik_2">12.8</label>
                                                    </td>
                                                    <td>
                                                        <input name="kesigapan" type="radio" value='13.5' id="kesigapan_baik_3" class="with-gap" required />
                                                        <label for="kesigapan_baik_3">13.5</label>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            <h3><?= $content; ?></h3>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped table-sm" id="mytable">
                                    <thead>
                                    <tr>
                                        <th width="7%">Kode</th>
                                        <th width="8%">Sikap Sempurna</th>
                                        <th width="8%">Sikap Hormat</th>
                                        <th width="8%">Sikap Isitrahat</th>
                                        <th width="9%">Langkah Tegap</th>
                                        <th width="9%">Jalan Ditempat</th>
                                        <th width="9%">Hadap Kanan Kiri</th>
                                        <th width="9%">Serong Kanan Kiri</th>
                                        <th width="9%">Balik Kanan</th>
                                        <th width="9%">Langkah LRFB</th>
                                        <th width="9%">Kesigapan</th>
                                        <th width="9%">Total Nilai</th>
                                        <?php if(session()->hak_access == 'Administrator'):?>
                                        <th width="15%">Action</th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <td><?= $value['sikap_sempurna'] ?></td>
                                            <td><?= $value['sikap_hormat'] ?></td>
                                            <td><?= $value['sikap_istirahat'] ?></td>
                                            <td><?= $value['langkah_tegap'] ?></td>
                                            <td><?= $value['jalan_ditempat'] ?></td>
                                            <td><?= $value['hadap_kanan_kiri'] ?></td>
                                            <td><?= $value['hadap_serong_kanan_kiri'] ?></td>
                                            <td><?= $value['balik_kanan'] ?></td>
                                            <td><?= $value['langkah_lrfb'] ?></td>
                                            <td><?= $value['kesigapan'] ?></td>
                                            <td><?= $value['sikap_sempurna']+$value['sikap_hormat']+$value['sikap_istirahat']+$value['langkah_tegap']+$value['jalan_ditempat']+$value['hadap_kanan_kiri']+$value['hadap_serong_kanan_kiri']+$value['balik_kanan']+$value['langkah_lrfb']+$value['kesigapan'] ?></td>
                                            <?php if(session()->hak_access == 'Administrator'):?>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/pbb/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
                                                </span>
                                            </td>
                                            <?php endif;?>
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