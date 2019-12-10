  <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgb(0,0,0);">
        <div class="container-fluid">
            <div id="wrapper">
                <div id="sidebar-wrapper" class="toggled">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand" style="color: rgb(227,28,59);"><strong>Matérias</strong></li>
                        <li> <a href="port.php">Língua Portuguesa</a></li>
                        <li> <a href="mat.php">Matemática</a></li>
                        <li> <a href="hist.php">História</a></li>
                        <li><a href="bio.php">Biologia</a></li>
                        <li><a href="quim.php">Química</a></li>
                        <li><a href="fisica.php">Física</a></li>
                    </ul>
                </div>
                <div class="page-content-wrapper">
                    <div class="container-fluid" style="width: 70px;height: 39px;"><a class="btn btn-link" role="button" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars" style="color: rgb(227,28,59);"></i></a></div>
                </div>
            </div><a class="navbar-brand" href="#" style="color: rgb(239,237,237);">Baka Sensei</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            

            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <?php
                	if($_SESSION["logado"]){
                ?>
                		<span style="color: #FFFFFF; padding-right: 10px;">Olá, <b><?=$_SESSION["usuario"]?></b>! Seja bem-vindo(a) ao Baka Sensei</span> <a class="btn btn-light action-button" role="button" href="logout.php" style="background-color: #ffffff;">Sair</a>
                <?php
                	}else{
                ?>		
            
                <a href="login.php" style="color: rgb(232,235,238);">Login</a><span class="navbar-text actions"> <a class="login" href=""></a><a class="btn btn-light action-button" role="button" href="cadastro.php" style="background-color: #e31c3b;">Cadastrar</a></span>

                <?php
                	}
                ?>
            </div>
        </div>
    </nav>