<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="<?=base_url('assets/plugins/animate-css/animate.css')?>">
	  <title>Home | Siscapaska</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
		 
    </head>

    <body>
    <?= $this->include('layouts/navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layouts/footer') ?>

  <!--  Scripts-->
  <script>
            var baseURL = '/';
        </script>
		
	<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		(function($){
		$(function(){

			$('.sidenav').sidenav();
      $('.carousel.carousel-slider').carousel(
        {
          fullWidth: true,
          indicators: true
        }
      );
		});
		})(jQuery);
	</script>
    </body>
  </html>