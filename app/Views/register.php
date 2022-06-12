<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
        <title>Form Registrasi</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url('./assets/css/register/style.css')?>">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <div class="container">
            <header>Form Registrasi</header>
            <div class="progress-bar">

                <div class="step">
                    <p>Nama</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class=" check fas fa-check"></div>
                </div>

                <div class="step">
                    <p>Kontak</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class=" check fas fa-check"></div>
                </div>

                <div class="step">
                    <p>Identitas</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class=" check fas fa-check"></div>
                </div>

                <div class="step">
                    <p>Selesai</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class=" check fas fa-check"></div>
                </div>
            </div>

            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="title">Informasi Dasar :</div>
                        <div class="field">
                            <div class="label">Nama Depan</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Nama Belakang</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <button class="firstNext next">Selanjutnya</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Kontak :</div>
                        <div class="field">
                            <div class="label">Alamat Email</div>
                            <input type="email">
                        </div>
                        <div class="field">
                            <div class="label">Nomor Telepon</div>
                            <input type="Number">
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Kembali</button>
                            <button class="next-1 next">Lanjut</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Identitas :</div>
                        <div class="field">
                            <div class="label">Tanggal Lahir</div>
                            <input type="date">
                        </div>
                        <div class="field">
                            <div class="label">Jenis Kelamin</div>
                            <select>
                                <option>Pria</option>
                                <option>Wanita</option>
                            </select>
                        </div>
                        <div class="field btns">
                            <button class="prev-2 prev">Kembali</button>
                            <button class="next-2 next">Lanjut</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Detail Login :</div>
                        <div class="field">
                            <div class="label">Username</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Password</div>
                            <input type="password">
                        </div>
                        <div class="field btns">
                            <button class="prev-3 prev">Kembali</button>
                            <button class="submit">Register</button>
                        </div>
                    </div>


                </form>
            </div>

        </div>
        <script src="<?=base_url('./assets/js/register/script.js')?>"></script>

    </body>

</html>