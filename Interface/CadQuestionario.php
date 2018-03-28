<?php

                            ?>  

                           


    <!DOCTYPE html>
    <html lang="pt">

    <head>


        <script src="../jquey/jquery-3.3.1.min.js" type="text/javascript"></script>
        <a href="../jquey/gulpfile.js"></a>
        <script src="../jquey/jquery.fullPage.js" type="text/javascript"></script>


        <link href="../boot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../boot/css/bootstrap-theme_1.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />



        <!-- Website CSS style -->


        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


        <!--INPUTS OUTROS -->
        
        <script src="../webcomponentsjs/webcomponents-lite.js"></script>
        <link rel="import" href="paper-input.html">
        <link rel="import" href="../iron-icons/iron-icons.html">
    </head>

    <body>

        <div class="minha">
            <div class="container">
                <div class="row main">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="panel-heading">
                            <div class="main-login main-center">
                                <div id="s" align="center">

                                    <h3><strong>Questionario</strong></h3>
                                </div>
                                <div id="formulario">
                                    <form name="primeiroform" class="form-horizontal" method="post" action="Recebeform.php">

                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Digite o nome do questionario</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="quest" id="name" placeholder="Entrevista de emprego " />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Descrição questionario.</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="descr" id="name" placeholder="Avaliar pessoas" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Setor</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="categ" id="name" placeholder="Recursos Humanos" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Autor</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Mario Quintana" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <button onclick="Mudarestado('perguntas'), alert('Você acabou de criar um formulario.')" name="btncriar" type="button" class="btn btn-primary btn-lg btn-block login-button">Criar</button>

                                        </div>
                                        <input type="submit" name="acao" id="total" value="total">
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="perguntas" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="panel-heading">
                            <div class="main-login main-center">
                                <form class="form-horizontal" method="post" action="#">
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Digite sua pergunta.</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="perguntaqq" id="pp1" placeholder="Qual seu nome?" />
                                            </div>
                                        </div>
                                    </div>
                                    <div id="multiplaescolha">
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Digite sua pergunta de multipla escolha.</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="mypergunta1" id="teste" placeholder="Qual a sua idade?" />
                                                    <br>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-6">


                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                        <input type="radio" name="primeiroradio1">
                                                    </span>
                                                        <input type="text" name="primeiraresposta1" class="form-control" aria-label="...">
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                                <div id="maisresposta">

                                                </div>

                                                <!-- mais resposta -->
                                            </div>
                                            <button onclick="MaisRespostas()" style="margin-top:5px" class="btn btn-info" type="button">Nova Resposta</button>
                                        </div>


                                    </div>
                                    <!-- /.multipla escolha -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row main">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">

                    <button type="button" class="btn btn-success">Gravar</button>

                    <button onclick="addPergunta()" class="btn btn-warning  btnPrincipal" name="2">ABERTA <i class="glyphicon glyphicon-plus-sign"></i> </button>
                    <button onclick="PME()" class="btn btn-danger  btnPrincipal" name="3">Fechada <i class="glyphicon glyphicon-plus-sign"></i> </button>

                </div>




            </div>
        </div>


        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <br><br><br><br><br><br>
        </div>






    </body>
    <script>
        function Mudarestado(el) {
            //var display = document.getElementById(el).style.display;
            //if (display == "none")
            document.getElementById(el).style.display = 'block';
            //else
            //document.getElementById(el).style.display = 'none';
        }

        var conti = 0;

        function addPergunta() {
            conti++;
            var htmlNovo = "";
            htmlNovo += '<div class="container">' +
                '<div class="row main">' +
                '<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>' +
                '<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">' +
                '<div class="panel-heading">' +
                '<div class="main-login main-center">' +
                '<form class="form-horizontal" method="post" action="#">' +
                '<div class="form-group">' +
                '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta.</label>' +
                '<div class="cols-sm-10">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>' +
                '<input type="text" class="form-control" name="pergunt' + conti + ' " id="name" placeholder="Qual seu nome?" />' +
                '</div></div></div></form></div></div></div></div></div>' + '';
            document.getElementById("perguntas").innerHTML += htmlNovo;
        }


        var contador = 0;
        var contadorinput = 10;

        function MaisRespostas() {
            contador++;
            contadorinput++;
            var htmlpergunta = "";
            htmlpergunta += '<div class="col-lg-6">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                '<input type="radio" name="radio' + contador + '">' + '</span>' + '<input type="text" name="textoresposta' + contadorinput + ' " class="form-control" aria-label="...">' + '</div>' + '</div>' + '';
            document.getElementById("maisresposta").innerHTML += htmlpergunta;
        }
        var mudadiv = 1;
        var novasperguntas = 0;
        var mudaradio = 20;
        var mudatxt = 30;

        function PME() {
            mudatxt++;
            novasperguntas++;
            mudadiv++;
            mudaradio++;
            var html = "";
            html += '<div class="main-login main-center">' +
                '<div class="form-group">' + '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta de multipla escolha.</label>' +
                '<div class="cols-sm-10">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                '<i class="fa fa-user fa" aria-hidden="true">' + '</i></span>' +
                '<input type="text" class="form-control" name="novapergunta' + novasperguntas + ' " id="name" placeholder="Qual a sua idade?" />' + '<br>' +
                '</div>' + '</div>' + '<div class="row">' +
                '<div class="col-lg-6">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                '<input type="radio" name="radioperFechada' + mudaradio + ' ">' + '</span>' + '<input type="text" name="textodaresposta' + mudatxt + ' " class="form-control" aria-label="...">' +
                '</div>' + '</div>' + '<div id="maisresposta2' + mudadiv + '">' + '</div>' + '</div>' +
                '<button onclick="MaisRespostas2(' + mudadiv + ')" style="margin-top:5px" class="btn btn-info" type="button">Nova Resposta</button>' +
                '<div id="NPME">' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '';
            document.getElementById("multiplaescolha").innerHTML += html;

        }


        var con = 0;
        var myradio = 0;

        function MaisRespostas2(mudaduv) {
            con++;
            var htmlresposta = "";
            htmlresposta += '<div class="col-lg-6">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                '<input type="radio" name="duplicado">' + '</span>' +
                '<input type="text" class="form-control" aria-label="...">' + '</div>' + '</div>' + '';
            document.getElementById("maisresposta2" + mudaduv + "").innerHTML += htmlresposta;
        }

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    </html>
