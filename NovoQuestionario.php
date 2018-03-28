<?php
date_default_timezone_set('America/Sao_Paulo');
$datas = date('Y-m-d H:i:s');

include_once './sql_questionario.php';
include_once './Conexao.php';


//GRAVAR NO BANCO
//if (isset($_POST["enviar"])) {
//if (!empty($_POST['quest']) && (!empty($_POST['descr'])) && (!empty($_POST['categ'])) && (!empty($_POST['autor']))) {
//
//$return = $sql_questionario->novoquestionario(
//$_POST['quest'], $_POST['descr'], $_POST['categ'], $_POST['autor']);
//        }
//    }
//BUSCAR NO BANCO

$Query_questionario = new sql_questionario();
$return = $Query_questionario->buscarultimoid();
?>




    <!DOCTYPE html>
    <html lang="pt">

    <head>


        <link href="boot/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="boot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

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
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Digite o nome do questionario</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="quest" id="quest" required="" placeholder="Entrevista de emprego " />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Descrição questionario.</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="descr" id="descr" required="" placeholder="Avaliar pessoas" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Setor</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="categ" required="" id="categ" placeholder="Recursos Humanos" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Autor</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="autor" required="" id="autor" placeholder="Mario Quintana" />
                                            </div>
                                        </div>
                                    </div>
                                    <div id="inicioquestionario">

                                        <div id="multiplaescolha">

                                        </div>
                                        <button onclick="Gravar()" return false class="btn btn-warning  btnPrincipal" name="2">SALVAR <i class="glyphicon glyphicon-plus-sign"></i> </button>
                                        <button onclick="addPergunta()" return false class="btn btn-warning  btnPrincipal" name="2">ABERTA <i class="glyphicon glyphicon-plus-sign"></i> </button>
                                        <button onclick="PME()" class="btn btn-danger  btnPrincipal" name="3">Fechada <i class="glyphicon glyphicon-plus-sign"></i> </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row main">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
                <div id="escreveQuery"></div>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">



            <br><br><br><br><br><br>
        </div>

    </body>
    <script>
        var mudadiv = 0;
        var NovaPergunta = 0;
        var mudaradio = 0;
        var mudatxt = 0;
        var con = 0;
        var conti = 0;
        var arrPerguntas = [];

        function Gravar() {

            var perguntasAbertas = new Array();
            for (i = 0; i < conti; i++) {
                perguntasAbertas.push(document.getElementById("perguntaA" + i + "").value);
             
            }

            var perguntasFechadas = new Array();
            for (l = 0; l < NovaPergunta; l++) {
                perguntasFechadas.push(document.getElementById("perguntaF" + l + "").value);
            }

            var respostas2 = new Array();
            for (l = 0; l < arrPerguntas.length; l++) {
                respostas2[l] = new Array();
                for (i = 1; i <= arrPerguntas[l]; i++) {
                    respostas2[l].push(document.getElementById('textodaresposta' + l + '-' + i + '').value);
                }

            }
            $.ajax({
                type: "post",
                url: "RecebendoDados.php",
                dataType: "text",
                async: true,

                data: {
                    quest: document.getElementById("quest").value,
                    descr: document.getElementById("descr").value,
                    categ: document.getElementById("categ").value,
                    autor: document.getElementById("autor").value,
                    perguntasAbertas: perguntasAbertas,
                    perguntasFechadas: perguntasFechadas,
                    arrPerguntas: arrPerguntas,
                    respostas2: respostas2
                },
                success: function(resp) {
                        alert(resp);
                },
                error: function() {


                    alert('ERRO DO SISTEMA Nº22.\nENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA.');
                }
            });
        }

        function Mudarestado(el) {
            //var display = document.getElementById(el).style.display;
            //if (display == "none")
            document.getElementById(el).style.display = 'block';
            //else
            //document.getElementById(el).style.display = 'none';
        }

        function addPergunta() {
            //contador de id
            var htmlNovo = "";
            htmlNovo +=
                '<div class="main-login main-center">' +
                '<form class="form-horizontal" method="post" action="#">' +
                '<div class="form-group">' +
                '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta.</label>' +
                '<div class="cols-sm-10">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>' +
                '<input type="text" class="form-control"  id="perguntaA' + conti + '"placeholder="Qual seu nome?" />' +
                '</div></div></div></form></div></div></div></div></div>' + '';
            document.getElementById("multiplaescolha").insertAdjacentHTML('beforeend', htmlNovo); //recebe a div onde vai inserir outras perguntas. 
            conti++;
            return false;
        }

        function PME() {

            var html = "";
            html += '<div class="main-login main-center">' +
                '<div class="form-group">' +
                '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta de multipla escolha.</label>' +
                '<div class="cols-sm-10">' +
                '<div class="input-group">' +
                '<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>' +
                '<input type="text" class="form-control" id="perguntaF' + NovaPergunta + '"placeholder="Qual a sua idade?"/>' +
                '</div>' +
                '</div>' +
                '<div class="row">' +
                '<div id="maisresposta2' + mudadiv + '"></div>' +
                '</div>' +
                '<button onclick="MaisRespostas2(' + mudadiv + ')" style="margin-top:5px" class="btn btn-info" type="button">Nova Resposta</button>' +
                '<div id="NPME"></div>' +
                '</div>' +
                '</div>';

            document.getElementById("multiplaescolha").insertAdjacentHTML('beforeend', html);
            mudatxt++;
            NovaPergunta++;
            mudadiv++;
            mudaradio++;
            return false;
        }

        function MaisRespostas2(novo) {
            //novo = id da pergunta
            if (novo in arrPerguntas) {
                arrPerguntas[novo]++;
                var htmlresposta = "";
                htmlresposta += '<div class="col-lg-6">' + '<form action=""> ' + '<div class="input-group">' + '<span class="input-group-addon">' +
                    '<input type="radio"  name="r"  id="chequeRadio' + novo + '-' + arrPerguntas[novo] + '">' + '</span>' +
                    '<input type="text" id="textodaresposta' + novo + '-' + arrPerguntas[novo] + '" " class="form-control" aria-label="...">' + '</div>' + '</forme>' + '</div>' + '';

                document.getElementById("maisresposta2" + novo + "").insertAdjacentHTML('beforeend', htmlresposta);

                con++;

            } else {
                arrPerguntas[novo] = 1;
                var htmlresposta = "";
                htmlresposta += '<div class="col-lg-6">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                    '<input type="radio" name="r" id="chequeRadio' + novo + '-' + arrPerguntas[novo] + '">' + '</span>' +
                    '<input type="text" id="textodaresposta' + novo + '-1" " class="form-control" aria-label="...">' + '</div>' + '</div>' + '';

                document.getElementById("maisresposta2" + novo + "").insertAdjacentHTML('beforeend', htmlresposta);

                con++;
            }
            return false;
        }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    </html>