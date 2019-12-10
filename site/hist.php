<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>História</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-center">
    <?php include("menutopo.php");?>
    <h1 class="text-center" style="font-size: 56px;margin: 20px;">História</h1>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="../assets/img/unnamed.png" style="width: 150px;margin: 20px;">
                            <h4 class="text-center card-title">Brasil Colônia</h4><button class="btn btn-dark" type="button" style="padding: 10px 50px;background-color: rgb(5,5,6);width: 214.031px;">Download</button></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="../assets/img/unnamed.png" style="width: 150px;margin: 20px;">
                            <h4 class="text-center card-title">Brasil Império</h4><button class="btn btn-dark" type="button" style="padding: 10px 50px;background-color: rgb(5,5,6);width: 214.031px;">Download</button></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="../assets/img/unnamed.png" style="width: 150px;margin: 20px;">
                            <h4 class="text-center card-title">Ditadura</h4><button class="btn btn-dark" type="button" style="padding: 10px 50px;background-color: rgb(5,5,6);width: 214.031px;">Download</button></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body"><img src="../assets/img/unnamed.png" style="width: 150px;margin: 20px;">
                            <h4 class="text-center card-title">Revoluções BR</h4><button class="btn btn-dark" type="button" style="padding: 10px 50px;background-color: rgb(5,5,6);width: 214.031px;">Download</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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