<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Abel OSH">
    <meta name="theme-color" content="#009688">
    <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
     <!-- Font-icon css-->
     <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css">
    <!--    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/iconslogin.css">
    <link rel="stylesheet" type="text/css" href="<?= media();?>/css/movimiento.css">
    <title><?= $data['page_tag']; ?></title>
  </head>
  <body>
  <div class="container-bar">
	<input type="checkbox" id="btn-social">
	<label for="btn-social" class="fa fa-play"></label>
		<div class="icon-social">
			<a href="#" class="fa fa-facebook">
				<span id="title">Facebook</span>
			</a>
			<a href="#" class="fa fa-youtube">
				<span id="title">Youtube</span>
			</a>
			<a href="#" class="fa fa-twitter">
				<span id="title">Twitter</span>
			</a>
			<a href="#" class="fa fa-whatsapp">
				<span id="title">Whatsapp</span>
			</a>
			<a href="#" class="fa fa-instagram">
				<span id="title">Instagram</span>
			</a>
		</div>
	</div>  


    <section class="material-half-bg">
      <div class="cover"></div>
      <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </section>

    <section class="login-content">
      <div class="logo">
        <h1><?= $data['page_title']; ?></h1>
      </div>
      <div class="login-box flipped">        
      <form id="formCambiarPass" name="formCambiarPass" class="forget-form" action="">
          <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $data['idpersona']; ?>" required >
          <input type="hidden" id="txtEmail" name="txtEmail" value="<?= $data['email']; ?>" required >
          <input type="hidden" id="txtToken" name="txtToken" value="<?= $data['token']; ?>" required >

          <h3 class="login-head"><i class="fas fa-key"></i> Cambiar contraseña</h3>
          <div class="form-group">
            <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Nueva contraseña" required >
          </div>
          <div class="form-group">
            <input id="txtPasswordConfirm" name="txtPasswordConfirm" class="form-control" type="password" placeholder="Confirmar contraseña" required >
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
          </div>
        </form>
      </div>
      <!-- <section class="iconslogin">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google-plus"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-linkedin"></a>
      </section> -->
    </section>
    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <!--Icon-Font-->
    <!-- barra -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <!-- <script src="<?= media(); ?>/js/fontawesome.js"></script> -->
    <script src="<?= media(); ?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <!-- Alerta -->
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>