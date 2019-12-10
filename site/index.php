<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Baka Sensei</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-center">
  <?php include("menutopo.php"); ?>
  <img src="assets/img/6.png" style="width: 550px;height: 550px;">
    <div class="features-boxed" style="background-color: #e31c3b;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(243,245,247);margin: 1px 1px 20px;">Disciplinas</h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-file-text icon" style="color: rgb(4,5,7);"></i>
                        <h3 class="name">Língua Portuguesa</h3><a class="learn-more" href="port.php" style="color: rgb(13,14,14);">Acessar materiais »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-superscript icon" style="color: rgb(7,9,10);"></i>
                        <h3 class="name">Matemática</h3><a class="learn-more" href="mat.php" style="color: rgb(6,7,8);">Acessar materiais »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-book icon" style="color: rgb(7,8,10);"></i>
                        <h3 class="name">História</h3><a class="learn-more" href="hist.php" style="color: rgb(4,7,10);">Acessar materiais »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-leaf icon" style="color: rgb(2,4,6);"></i>
                        <h3 class="name">Biologia</h3><a class="learn-more" href="bio.php" style="color: rgb(6,9,13);">Acessar materiais »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-flask icon" style="color: rgb(5,8,10);"></i>
                        <h3 class="name">Química</h3><a class="learn-more" href="quim.php" style="color: rgb(2,4,6);">Acessar materiais »</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-grav icon" style="color: rgb(2,4,6);"></i>
                        <h3 class="name">Física</h3><a class="learn-more" href="fisica.php" style="color: rgb(5,8,10);">Acessar materiais »</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background-color: rgb(0,0,0);">
        <footer>
            <div class="social"><a target="_blank" style="color: rgb(251,253,255);" href="https://github.com/ifma-srm/portal-topicos"><i class="icon ion-social-github"></i></a></div>
            <p class="copyright" style="color: rgb(255,249,249);">BakaSensei © 2019</p>
        </footer>
    </div>
    <div class="team-clean" style="background-color: rgb(11,6,6);"></div>
    <div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

	<script type="text/javascript">
		$( document ).ready(function() {
		    $("#wrapper").toggleClass("toggled");
		});
	</script>

</body>

</html>