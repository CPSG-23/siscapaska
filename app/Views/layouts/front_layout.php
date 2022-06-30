<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <title>
            SISCAPASKA
        </title>

        <!-- Vendor -->
        <link href="<?=base_url('public/assets/front/css')?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?=base_url('public/assets/front/animate.min.css')?>" rel="stylesheet">
        <link href="<?=base_url('public/assets/front/Chart.min.css')?>" rel="stylesheet">

        <!--Assets-->
        <link href="<?=base_url('public/assets/front/front.min.css')?>" rel="stylesheet">
        <link href="<?=base_url('public/favicon.ico')?>" rel="shortcut icon">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
        <style type="text/css">
            .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }
        </style>
    </head>

    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper">
            <?= $this->include('layouts/navbar') ?>
            <?= $this->renderSection('content') ?>
            <?= $this->include('layouts/footer') ?>
        </div>
        <script>
            var baseURL = '<?=site_url()?>';
        </script>
        <!-- Vendor -->
        <script src="<?=base_url('public/assets/front')?>/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url('public/assets/front')?>/jquery.form.min.js"></script>
        <script src="<?=base_url('public/assets/front')?>/bootstrap.min.js"></script>
        <script src="<?=base_url('public/assets/front')?>/wow.min.js"></script>
        <!-- Assets -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
        <script src="<?=base_url('public/assets/front')?>/front.min.js"></script>
        
    
<script>
$(function(){

    <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: '<?= session("success") ?>'
        })
    <?php } ?>
    <?php if(session()->has("error")) { ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: '<?= session("error") ?>'
        })
    <?php } ?>
});
</script>
<script type="text/javascript">
    $(document).ready(function () {
            $imgSrc = $('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                }
                else {
                    $('#btnChangePicture').on('click', function (){
                        let formData = new FormData();
                        formData.append('id', idPeserta.value);
                        formData.append('file', profilePicture.files[0]);
                        var xhttp = new XMLHttpRequest();
                        xhttp.open("POST",'<?=site_url('peserta/uploadimage')?>',true);
                        xhttp.onreadystatechange = function() {
                         if (this.readyState == 4 && this.status == 200) {

                           var response = this.responseText;
                           if(response == 1){
                              alert("Upload successfully.");
                           }else{
                              alert("File not uploaded.");
                           }
                         }
                      };
                      // Send request with data
                      xhttp.send(formData);
                    });
                }
            });
            $('#profilePicture').on('change', function () {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').removeAttr('type').attr('type','submit');
                $('#btnChangePicture').attr('value', 'Confirm');
                $('#btnDiscard').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function () {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });
</script>
</body>
</html>