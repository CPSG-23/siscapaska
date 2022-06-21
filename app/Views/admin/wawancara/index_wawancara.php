
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
                <form action='<?=site_url('admin/wawancara/create_action')?>' method='post'>
                    <div class="card">
                        <div class="header">
                            <h2>
                                <h1>Input Nilai Wawancara</h1>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                            <td class='text-center text-bold'>1</td>
                                            <td>Sikap</td>
                                            <td style='background-color:silver'>20</td>
                                            <td>
                                                <input name="sikap" type="radio" value='10' id="menyanyi_suara_kurang_1" class="with-gap" required />
                                                <label for="menyanyi_suara_kurang_1">10</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='11' id="menyanyi_suara_kurang_2" class="with-gap" required />
                                                <label for="menyanyi_suara_kurang_2">11</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='12' id="menyanyi_suara_kurang_3" class="with-gap" required />
                                                <label for="menyanyi_suara_kurang_3">12</label></td>
                                            <td>
                                                <input name="sikap" type="radio" value='13' id="menyanyi_suara_cukup_1" class="with-gap" required />
                                                <label for="menyanyi_suara_cukup_1">13</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='14' id="menyanyi_suara_cukup_2" class="with-gap" required />
                                                <label for="menyanyi_suara_cukup_2">14</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='15' id="menyanyi_suara_cukup_3" class="with-gap" required />
                                                <label for="menyanyi_suara_cukup_3">15</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='16' id="menyanyi_suara_baik_1" class="with-gap" required />
                                                <label for="menyanyi_suara_baik_1">16</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='17' id="menyanyi_suara_baik_2" class="with-gap" required />
                                                <label for="menyanyi_suara_baik_2">17</label>
                                            </td>
                                            <td>
                                                <input name="sikap" type="radio" value='18' id="menyanyi_suara_baik_3" class="with-gap" required />
                                                <label for="menyanyi_suara_baik_3">18</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'>2</td>
                                            <td>Kesigapan</td>
                                            <td style='background-color:silver'>15</td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='7.5' id="intonasi_lagu_kurang_1" class="with-gap" required />
                                                <label for="intonasi_lagu_kurang_1">7.5</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='8.3' id="intonasi_lagu_kurang_2" class="with-gap" required />
                                                <label for="intonasi_lagu_kurang_2">8.3</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='9' id="intonasi_lagu_kurang_3" class="with-gap" required />
                                                <label for="intonasi_lagu_kurang_3">9</label></td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='9.8' id="intonasi_lagu_cukup_1" class="with-gap" required />
                                                <label for="intonasi_lagu_cukup_1">9.8</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='10.5' id="intonasi_lagu_cukup_2" class="with-gap" required />
                                                <label for="intonasi_lagu_cukup_2">10.5</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='11.3' id="intonasi_lagu_cukup_3" class="with-gap" required />
                                                <label for="intonasi_lagu_cukup_3">11.3</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='12' id="intonasi_lagu_baik_1" class="with-gap" required />
                                                <label for="intonasi_lagu_baik_1">12</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='12.8' id="intonasi_lagu_baik_2" class="with-gap" required />
                                                <label for="intonasi_lagu_baik_2">12.8</label>
                                            </td>
                                            <td>
                                                <input name="kesigapan" type="radio" value='13.5' id="intonasi_lagu_baik_3" class="with-gap" required />
                                                <label for="intonasi_lagu_baik_3">13.5</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'>3</td>
                                            <td>Cara Bicara</td>
                                            <td style='background-color:silver'>15</td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='7.5' id="penghayatan_kurang_1" class="with-gap" required />
                                                <label for="penghayatan_kurang_1">7.5</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='8.3' id="penghayatan_kurang_2" class="with-gap" required />
                                                <label for="penghayatan_kurang_2">8.3</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='9' id="penghayatan_kurang_3" class="with-gap" required />
                                                <label for="penghayatan_kurang_3">9</label></td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='9.8' id="penghayatan_cukup_1" class="with-gap" required />
                                                <label for="penghayatan_cukup_1">9.8</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='10.5' id="penghayatan_cukup_2" class="with-gap" required />
                                                <label for="penghayatan_cukup_2">10.5</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='11.3' id="penghayatan_cukup_3" class="with-gap" required />
                                                <label for="penghayatan_cukup_3">11.3</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='12' id="penghayatan_baik_1" class="with-gap" required />
                                                <label for="penghayatan_baik_1">12</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='12.8' id="penghayatan_baik_2" class="with-gap" required />
                                                <label for="penghayatan_baik_2">12.8</label>
                                            </td>
                                            <td>
                                                <input name="cara_bicara" type="radio" value='13.5' id="penghayatan_baik_3" class="with-gap" required />
                                                <label for="penghayatan_baik_3">13.5</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'>4</td>
                                            <td colspan='11' class='text-bold'>Pemakaian Bahasa</td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'></td>
                                            <td>Bahasa Indonesia</td>
                                            <td style='background-color:silver'>10</td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='5' id="gerakan_gemulai_kurang_1" class="with-gap" required />
                                                <label for="gerakan_gemulai_kurang_1">5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='5.5' id="gerakan_gemulai_kurang_2" class="with-gap" required />
                                                <label for="gerakan_gemulai_kurang_2">5,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='6' id="gerakan_gemulai_kurang_3" class="with-gap" required />
                                                <label for="gerakan_gemulai_kurang_3">6</label></td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='6.5' id="gerakan_gemulai_cukup_1" class="with-gap" required />
                                                <label for="gerakan_gemulai_cukup_1">6,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='7' id="gerakan_gemulai_cukup_2" class="with-gap" required />
                                                <label for="gerakan_gemulai_cukup_2">7</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='7.5' id="gerakan_gemulai_cukup_3" class="with-gap" required />
                                                <label for="gerakan_gemulai_cukup_3">7,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='8' id="gerakan_gemulai_baik_1" class="with-gap" required />
                                                <label for="gerakan_gemulai_baik_1">8</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='8.5' id="gerakan_gemulai_baik_2" class="with-gap" required />
                                                <label for="gerakan_gemulai_baik_2">8,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_indonesia" type="radio" value='9' id="gerakan_gemulai_baik_3" class="with-gap" required />
                                                <label for="gerakan_gemulai_baik_3">9</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'></td>
                                            <td>Bahasa Inggris</td>
                                            <td style='background-color:silver'>10</td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='5' id="menari_pengetahuan_kurang_1" class="with-gap" required />
                                                <label for="menari_pengetahuan_kurang_1">5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='5.5' id="menari_pengetahuan_kurang_2" class="with-gap" required />
                                                <label for="menari_pengetahuan_kurang_2">5,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='6' id="menari_pengetahuan_kurang_3" class="with-gap" required />
                                                <label for="menari_pengetahuan_kurang_3">6</label></td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='6.5' id="menari_pengetahuan_cukup_1" class="with-gap" required />
                                                <label for="menari_pengetahuan_cukup_1">6,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='7' id="menari_pengetahuan_cukup_2" class="with-gap" required />
                                                <label for="menari_pengetahuan_cukup_2">7</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='7.5' id="menari_pengetahuan_cukup_3" class="with-gap" required />
                                                <label for="menari_pengetahuan_cukup_3">7,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='8' id="menari_pengetahuan_baik_1" class="with-gap" required />
                                                <label for="menari_pengetahuan_baik_1">8</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='8.5' id="menari_pengetahuan_baik_2" class="with-gap" required />
                                                <label for="menari_pengetahuan_baik_2">8,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_inggris" type="radio" value='9' id="menari_pengetahuan_baik_3" class="with-gap" required />
                                                <label for="menari_pengetahuan_baik_3">9</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'></td>
                                            <td>Bahasa Daerah</td>
                                            <td style='background-color:silver'>10</td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='5' id="menari_penghayatan_kurang_1" class="with-gap" required />
                                                <label for="menari_penghayatan_kurang_1">5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='5.5' id="menari_penghayatan_kurang_2" class="with-gap" required />
                                                <label for="menari_penghayatan_kurang_2">5,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='6' id="menari_penghayatan_kurang_3" class="with-gap" required />
                                                <label for="menari_penghayatan_kurang_3">6</label></td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='6.5' id="menari_penghayatan_cukup_1" class="with-gap" required />
                                                <label for="menari_penghayatan_cukup_1">6,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='7' id="menari_penghayatan_cukup_2" class="with-gap" required />
                                                <label for="menari_penghayatan_cukup_2">7</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='7.5' id="menari_penghayatan_cukup_3" class="with-gap" required />
                                                <label for="menari_penghayatan_cukup_3">7,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='8' id="menari_penghayatan_baik_1" class="with-gap" required />
                                                <label for="menari_penghayatan_baik_1">8</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='8.5' id="menari_penghayatan_baik_2" class="with-gap" required />
                                                <label for="menari_penghayatan_baik_2">8,5</label>
                                            </td>
                                            <td>
                                                <input name="bahasa_daerah" type="radio" value='9' id="menari_penghayatan_baik_3" class="with-gap" required />
                                                <label for="menari_penghayatan_baik_3">9</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'>5</td>
                                            <td>Kemampuan Menjawab</td>
                                            <td style='background-color:silver'>10</td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='5' id="memainkan_alat_musik_kurang_1" class="with-gap" required />
                                                <label for="memainkan_alat_musik_kurang_1">5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='5.5' id="memainkan_alat_musik_kurang_2" class="with-gap" required />
                                                <label for="memainkan_alat_musik_kurang_2">5,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='6' id="memainkan_alat_musik_kurang_3" class="with-gap" required />
                                                <label for="memainkan_alat_musik_kurang_3">6</label></td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='6.5' id="memainkan_alat_musik_cukup_1" class="with-gap" required />
                                                <label for="memainkan_alat_musik_cukup_1">6,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='7' id="memainkan_alat_musik_cukup_2" class="with-gap" required />
                                                <label for="memainkan_alat_musik_cukup_2">7</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='7.5' id="memainkan_alat_musik_cukup_3" class="with-gap" required />
                                                <label for="memainkan_alat_musik_cukup_3">7,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='8' id="memainkan_alat_musik_baik_1" class="with-gap" required />
                                                <label for="memainkan_alat_musik_baik_1">8</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='8.5' id="memainkan_alat_musik_baik_2" class="with-gap" required />
                                                <label for="memainkan_alat_musik_baik_2">8,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_menjawab" type="radio" value='9' id="memainkan_alat_musik_baik_3" class="with-gap" required />
                                                <label for="memainkan_alat_musik_baik_3">9</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='text-center text-bold'>6</td>
                                            <td>Kemampuan Komputer</td>
                                            <td style='background-color:silver'>10</td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='5' id="pengetahuan_alat_musik_kurang_1" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_kurang_1">5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='5.5' id="pengetahuan_alat_musik_kurang_2" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_kurang_2">5,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='6' id="pengetahuan_alat_musik_kurang_3" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_kurang_3">6</label></td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='6.5' id="pengetahuan_alat_musik_cukup_1" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_cukup_1">6,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='7' id="pengetahuan_alat_musik_cukup_2" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_cukup_2">7</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='7.5' id="pengetahuan_alat_musik_cukup_3" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_cukup_3">7,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='8' id="pengetahuan_alat_musik_baik_1" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_baik_1">8</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='8.5' id="pengetahuan_alat_musik_baik_2" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_baik_2">8,5</label>
                                            </td>
                                            <td>
                                                <input name="kemampuan_komputer" type="radio" value='9' id="pengetahuan_alat_musik_baik_3" class="with-gap" required />
                                                <label for="pengetahuan_alat_musik_baik_3">9</label>
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
                    </div>
                </form>
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
                                        <th rowspan=2 width="7%">Kode</th>
                                        <th rowspan=2 width="8%">Sikap</th>
                                        <th rowspan=2 width="8%">Kesigapan</th>
                                        <th rowspan=2 width="8%">Cara Bicara</th>
                                        <th colspan=3 width="8%">Pemakaian Bahasa</th>
                                        <th rowspan=2 width="9%">Kemampuan Menjawab</th>
                                        <th rowspan=2 width="9%">Kemampuan Komputer</th>
                                        <th rowspan=2 width="9%">Total Nilai</th>
                                        <?php if(session()->hak_access == 'Administrator'):?>
                                        <th rowspan=2 width="15%">Action</th>
                                        <?php endif ?>
                                    </tr>
                                    <tr>
                                        <th>Indonesia</th>
                                        <th>Inggris</th>
                                        <th>Daerah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $start=1; foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php  echo $value['kode_peserta'] ?></td>
                                            <td><?= $value['sikap'] ?></td>
                                            <td><?= $value['kesigapan'] ?></td>
                                            <td><?= $value['cara_bicara'] ?></td>
                                            <?php $tot = 0; foreach(unserialize($value['pemakaian_bahasa']) as $dt): $tot=$tot+$dt; echo "<td>".$dt."</td>"; endforeach; ?>
                                            <td><?= $value['kemampuan_menjawab'] ?></td>
                                            <td><?= $value['kemampuan_komputer'] ?></td>
                                            <td><?= $value['sikap']+$value['kesigapan']+$value['cara_bicara']+$value['kemampuan_menjawab']+$value['kemampuan_komputer']+$tot ?></td>
                                            <?php if(session()->hak_access == 'Administrator'):?>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/wawancara/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
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