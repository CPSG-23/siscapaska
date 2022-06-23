
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
                                Input Nilai Parade
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action='<?=site_url('admin/parade/create_action')?>'>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5">
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
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for="mata">Mata</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="table-responsive">
                                                <table class='table table-hover table-bordered table-striped table-sm'>
                                                    <thead  style='background-color: silver; text-align: center;'>
                                                        <tr>
                                                            <th>AB</th>
                                                            <th colspan=4>Plus Atau Minus</th>
                                                            <th>Normal</th>
                                                            <th colspan=4>Plus Atau Minus</th>
                                                            <th>AB</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Sil</th>
                                                            <th>2</th>
                                                            <th>1.5</th>
                                                            <th>1</th>
                                                            <th>0.5</th>
                                                            <th></th>
                                                            <th>0.5</th>
                                                            <th>1</th>
                                                            <th>1.5</th>
                                                            <th>2</th>
                                                            <th>Sil</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td>
                                                            <input name="mata" type="radio" value='20' id="mata_sil_kiri" class="with-gap" required />
                                                            <label for="mata_sil_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='21' id="mata_dua_kiri" class="with-gap" required />
                                                            <label for="mata_dua_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='22' id="mata_satulima_kiri" class="with-gap" required />
                                                            <label for="mata_satulima_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='23' id="mata_satu_kiri" class="with-gap" required />
                                                            <label for="mata_satu_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='24' id="mata_nollima_kiri" class="with-gap" required />
                                                            <label for="mata_nollima_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='25' id="mata_normal" class="with-gap" required />
                                                            <label for="mata_normal"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='24' id="mata_nollima_kanan" class="with-gap" required />
                                                            <label for="mata_nollima_kanan"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='23' id="mata_satu_kanan" class="with-gap" required />
                                                            <label for="mata_satu_kanan"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='22' id="mata_satulima_kanan" class="with-gap" required />
                                                            <label for="mata_satulima_kanan"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='21' id="mata_dua_kanan" class="with-gap" required />
                                                            <label for="mata_dua_kanan"></label>
                                                        </td>
                                                        <td>
                                                            <input name="mata" type="radio" value='20' id="mata_sil_kanan" class="with-gap" required />
                                                            <label for="mata_sil_kanan"></label>
                                                        </td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for="bahu">Bahu / Pundak</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="table-responsive">
                                                <table class='table table-hover table-bordered table-striped table-sm'>
                                                    <thead  style='background-color: silver; text-align: center;'>
                                                        <tr>
                                                            <th colspan=3 class='text-center'>Kiri</th>
                                                            <th class='text-center'>Normal</th>
                                                            <th colspan=3 class='text-center'>Kanan</th>
                                                        </tr>
                                                        <tr>
                                                            <th class='text-center'>Mir</th>
                                                            <th class='text-center'>Turun</th>
                                                            <th class='text-center'>Naik</th>
                                                            <th class='text-center'>Normal</th>
                                                            <th class='text-center'>Naik</th>
                                                            <th class='text-center'>Turun</th>
                                                            <th class='text-center'>Mir</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td>
                                                            <input name="bahu" type="radio" value='20' id="mir_kiri" class="with-gap" required />
                                                            <label for="mir_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="bahu" type="radio" value='23' id="tur_kiri" class="with-gap" required />
                                                            <label for="tur_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="bahu" type="radio" value='23' id="naik_kiri" class="with-gap" required />
                                                            <label for="naik_kiri"></label>
                                                        </td>
                                                        <td>
                                                            <input name="bahu" type="radio" value='25' id="bahu_normal" class="with-gap" required />
                                                            <label for="bahu_normal"></label>
                                                        </td>
                                                        <td>
                                                        <input name="bahu" type="radio" value='23' id="naik_kanan" class="with-gap" required />
                                                            <label for="naik_kanan"></label>
                                                        </td>
                                                        <td>
                                                        <input name="bahu" type="radio" value='23' id="tur_kanan" class="with-gap" required />
                                                            <label for="tur_kanan"></label>
                                                        </td>
                                                        <td>
                                                            <input name="bahu" type="radio" value='20' id="mir_kanan" class="with-gap" required />
                                                            <label for="mir_kanan"></label>
                                                        </td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for="tangan">Tangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="table-responsive">
                                                <table class='table table-hover table-bordered table-striped table-sm'>
                                                    <thead  style='background-color: silver; text-align: center;'>
                                                        <tr>
                                                            <th class='text-center'>LL</th>
                                                            <th colspan=2 class='text-center'>AB</th>
                                                            <th colspan=2 class='text-center'>Bengkok</th>
                                                            <th class='text-center'>Normal</th>
                                                            <th colspan=2 class='text-center'>Bengkok</th>
                                                            <th colspan=2 class='text-center'>AB</th>
                                                            <th class='text-center'>LL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td>
                                                            <input name="tangan" type="radio" value='15' id="ll1" class="with-gap" required />
                                                            <label for="ll1"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='17' id="ab_kiri1" class="with-gap" required />
                                                            <label for="ab_kiri1"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='19' id="ab_kiri2" class="with-gap" required />
                                                            <label for="ab_kiri2"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='21' id="bengkok_kiri1" class="with-gap" required />
                                                            <label for="bengkok_kiri1"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='23' id="bengkok_kiri2" class="with-gap" required />
                                                            <label for="bengkok_kiri2"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='25' id="tangan_normal" class="with-gap" required />
                                                            <label for="tangan_normal"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='23' id="bengkok_kanan1" class="with-gap" required />
                                                            <label for="bengkok_kanan1"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='21' id="bengkok_kanan2" class="with-gap" required />
                                                            <label for="bengkok_kanan2"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='19' id="ab_kanan1" class="with-gap" required />
                                                            <label for="ab_kanan1"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='17' id="ab_kanan2" class="with-gap" required />
                                                            <label for="ab_kanan2"></label>
                                                        </td>
                                                        <td>
                                                            <input name="tangan" type="radio" value='15' id="ll_kanan" class="with-gap" required />
                                                            <label for="ll_kanan"></label>
                                                        </td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <div class="table-responsive">
                                                <table class='table table-hover table-bordered table-striped table-sm'>
                                                    <thead  style='background-color: silver; text-align: center;'>
                                                        <tr>
                                                            <th colspan=4>Kaki</th>
                                                            <th colspan=2>Platefoot Partial</th>
                                                        </tr>
                                                        <tr>
                                                            <th class='text-center'>Normal</th>
                                                            <th class='text-center'>X</th>
                                                            <th class='text-center'>O</th>
                                                            <th class='text-center'>AB</th>
                                                            <th class='text-center'>Normal</th>
                                                            <th class='text-center'>Rata</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td>
                                                            <input name="kaki" type="radio" value='25' id="kaki_normal" class="with-gap" required />
                                                            <label for="kaki_normal"></label>
                                                        </td>
                                                        <td>
                                                            <input name="kaki" type="radio" value='20' id="kaki_x" class="with-gap" required />
                                                            <label for="kaki_x"></label>
                                                        </td>
                                                        <td>
                                                            <input name="kaki" type="radio" value='20' id="kaki_o" class="with-gap" required />
                                                            <label for="kaki_o"></label>
                                                        </td>
                                                        <td>
                                                            <input name="kaki" type="radio" value='15' id="kaki_ab" class="with-gap" required />
                                                            <label for="kaki_ab"></label>
                                                        </td>
                                                        <td>
                                                            <input name="platefoot" type="radio" value='25' id="pf_n" class="with-gap" required />
                                                            <label for="pf_n"></label>
                                                        </td>
                                                        <td>
                                                            <input name="platefoot" type="radio" value='20' id="pf_r" class="with-gap" required />
                                                            <label for="pf_r"></label>
                                                        </td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SImpan</button>
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
                            <h2><?= $content; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-striped table-sm" id="mytable">
                                    <thead>
                                    <tr>
                                        <th width="7%">Kode</th>
                                        <th width="8%">TB</th>
                                        <th width="8%">BB</th>
                                        <th width="8%">Mata</th>
                                        <th width="9%">Bahu</th>
                                        <th width="9%">Tangan</th>
                                        <th width="9%">Kaki</th>
                                        <th width="9%">Platefoot</th>
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
                                            <td><?= $value['tinggi_badan'] ?></td>
                                            <td><?= $value['berat_badan'] ?></td>
                                            <td><?= $value['mata'] ?></td>
                                            <td><?= $value['bahu'] ?></td>
                                            <td><?= $value['tangan'] ?></td>
                                            <td><?= $value['kaki'] ?></td>
                                            <td><?= $value['platefoot'] ?></td>
                                            <td><?= (($value['tinggi_badan']+$value['berat_badan']+$value['mata']+$value['bahu']+$value['tangan']+$value['kaki']+$value['platefoot'])) ?></td>
                                            <?php if(session()->hak_access == 'Administrator'):?>
                                            <td>
                                                <span class="float-right">
                                                    <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('admin/parade/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')"><i class='material-icons'>delete</i></a>
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