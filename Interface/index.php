<?php

require_once '../Banco_Query/Query_questionario.php';
require_once '../Classes/Questionario.php';
date_default_timezone_set('America/Sao_Paulo');
$datas = date('Y-m-d H:i:s');
$Query_questionario = new Query_questionario();

$return = $Query_questionario->buscarquestionario();

?>

    <html>

    <head>
        <meta charset="UTF-8">
        <title></title>

        <link href="boot/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="boot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/estilos.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <style>
            .table-striped>tbody>tr {
                background-color: #fff;
            }


            .table-hover>tbody>tr:hover {
                background-color: #333;
                color: #fff;

            }

        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <header id="main_menu" class="header navbar-fixed-top">
                        <div class="main_menu_bg">

                            <div class="nave_menu">
                                <nav class="navbar navbar-inverse">
                                    <div class="container-fluid">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>  
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                            <ul class="nav navbar-nav navbar-left">
                                                <li><a href="Interface/CadQuestionario.php">Adcionar</a></li>
                                                <li><a href="#segunda">Desativar</a></li>
                                                <li><a href="#frases">Editar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
            <div align="center">
                <h3>Questionarios</h3><br>
                <div class="table-responsive">
                    <table border="1" class="table table-striped  table-hover">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome questionario</th>
                                    <th>Autor</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <?php foreach ($grupo as $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $row->getMyid(); ?>
                                </td>
                                <td>
                                    <?php echo $row->getNome_questionario(); ?>
                                </td>
                                <td>
                                    <?php echo $row->getAutor(); ?>
                                </td>
                                <td>
                                    <?php echo $row->getData(); ?>
                                </td>

                            </tr>
                            <?php }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <!--CLASSE FIM.-->


            </div>
        </div>



    </body>







    <script src="jquey/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="boot/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            var panels = $('.vote-results');
            var panelsButton = $('.dropdown-results');
            panels.hide();

            //Click dropdown
            panelsButton.click(function() {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    //Completed slidetoggle
                    if (idFor.is(':visible')) {
                        currentButton.html('Hide Results');
                    } else {
                        currentButton.html('View Results');
                    }
                })
            });
        });

    </script>

    </html>
