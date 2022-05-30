<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <title>Home | Siscapaska</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
		<div>
			<nav class="light-blue lighten-1" role="navigation">
				<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">SISCAPASKA</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><a href="<?=site_url('about')?>">About</a></li>
						<li><a href="<?=site_url('hasil')?>">Pengumuman</a></li>
						<li><a href="<?=site_url('registerasi')?>">Registerasi</a></li>
					</ul>

					<ul id="nav-mobile" class="sidenav">
						<li><a href="<?=site_url()?>">Home</a></li>
						<li><a href="<?=site_url('about')?>">About</a></li>
						<li><a href="<?=site_url('hasil')?>">Pengumuman</a></li>
						<li><a href="<?=site_url('registerasi')?>">Registerasi</a></li>
					</ul>
					<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</diV>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Selamat Datang di Website</br>Sistem Informasi Seleksi Calon Paskibraka</h1>
      <div class="row center">
        <h5 class="header col s12 light">Bagi kamu siswa kelas X MA/SMA/SMK, Buruan Daftar Segera</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Daftar</a>
      </div>
      <br><br>

    </div>
  </div>

  <footer class="page-footer light-blue">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">Purna Paskibraka Indonesia merupakan organisasi nirlaba dibawah naungan dinas pemuda dan olahraga</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Dibuat oleh <a class="orange-text text-lighten-3" href="#">GRUP CPSG-23 MSIB2</a> with framework Materializecss
      </div>
    </div>
  </footer>


  <!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		(function($){
		$(function(){

			$('.sidenav').sidenav();

		});
		})(jQuery);
	</script>
    </body>
  </html>