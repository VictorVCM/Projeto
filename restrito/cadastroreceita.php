<?php
    include "../repositorio/Master.php";
    echo "<pre>";
    print_r($_FILES);
    print_r($_POST);
    echo "</pre>";
    if(isset($_FILES['arquivo'])){
        $tipos = array('text/csv');
        if(array_search($_FILES['arquivo']['type'], $tipos)){
            $nomearquivo = "temporario/";
            copy($_FILES['arquivo']['tmp_name'], $nomearquivo);
        }
    }
?>
    <!DOCTYPE html>
    <html lang="PT-BR">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="Portal Transparencia" />
        <meta name="description" property="og:description" content="Descrição" />
        <meta name="author" content="Victor Vinícius de Carvalho Marinho" />
        <meta name="robots" content="index,follow" />
        <meta property="og:image" content="#" />
        <link rel="icon" href="#" sizes="32x32">
        <title>Modelo</title>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../build/css/login.css" rel="stylesheet">
        <link href="../vendors/dropzone/dist/dropzone.css" rel="stylesheet">
        <link href="../build/css/custom.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><span>Portal</span></a></div>
                        <div class="profile clearfix">
                            <div class="profile_pic"> <img src="../img/perfil1.jpg" alt="Perfil" class="img-circle profile_img"> </div>
                            <div class="profile_info">
                                <span>Bem vindo</span>
                                <h2>Nome</h2>
                            </div>
                        </div>
                        <br/>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i>Home<span class="label label-success pull-right">Beta</span></a>
                                    </li>
                                    <li><a href="receita/receita.html"><i class="fa fa-money"></i>Receita</a></li>
                                    <li><a><i class="fa fa-suitcase"></i>Despesas</a></li>
                                    <li><a><i class="fa fa-file-text"></i>Licitações</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="modal" data-target="#myModal" aria-expanded="false"> <img src="../img/perfil1.jpg" alt="Perfil 1">Usuário</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">
                    <!-- top tiles -->
                    <!-- Banner
                <div class="row tile_count">
                    <img class="img-responsive" src="images/banner-todos-por-s%C3%A3o-luis.jpg" alt="Banner">
                </div>
                <!-- /top tiles -->
                    <section class="row ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-defaul">
                                    <div class="panel-heading">
                                        <h2>Zona de upload de aquivo csv Receita</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p>Arraste o arquivo para o campo a baixo ou clique e selecione o arquivo para upload dos dados.</p>
                                        <form id="dropzone" action="cadastroreceita.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="dropzone">
                                        </form>

                                        <div class="btn-toolbar pull-right" role="toolbar">
                                            <input class="btn btn-danger  btn-group" role="group" type="reset" id="dropzoneCancel" value="Cancelar">
                                            <input class="btn btn-success  btn-group" role="group" type="submit" id="dropzoneSubmit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <footer>
                <div class="pull-right"> Modelo Dashboard - Feito e administrado por <a href="#">Carvalho Multiserviços</a> </div>
                <div class="clearfix"></div>
            </footer>
        </div>
        <div class="container">
            <!-- todas as Modais aqui --->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <form name="loginform" method="post" action="logar.php">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Entre com os seus dados</h4>
                            </div>
                            <div class="modal-body">
                                <img id="profile-img" class="profile-img-card" src="../img/avatar2.png" />

                                <div class="form-signin">
                                    <p id="profile-name" class="profile-name-card">Nome depois de salvo</p>
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de Email" required autofocus>
                                    <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                                    <div id="remember" class="checkbox">
                                        <label>
                                        <input type="checkbox" value="relembre">Relembre me
                                    </label>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Esqueceu sua senha?</button>
                                <button type="submit" onclick="hash()" value="entar" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../vendors/dropzone/dist/dropzone.js"></script>
        <script src="../build/js/custom.js"></script>
        <script>
            var myDropzone = new Dropzone("#dropzone", {
                url: "cadastroreceita.php",
                autoProcessQueue: false,
            });
            $('#dropzoneSubmit').click(function(e) {
                e.preventDefault();
                myDropzone.processQueue();
            });

        </script>


    </body>

    </html>