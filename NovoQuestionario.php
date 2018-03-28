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
?>




<!DOCTYPE html>
<html lang="pt">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquey/jquery-3.3.1.slim.js" type="text/javascript"></script>
        <script src="jquey/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="jquey/jquery.fullPage.css" rel="stylesheet" type="text/css" />


        <link href="boot/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="boot/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="boot/js/bootstrap.min.js" type="text/javascript"></script>

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        

    </head>
    <style>
        .error {
            color: red
        }

    </style>

    <body>
        <div class="minha">
            <div class="container">
                <div class="row main">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="panel-heading">
                            <div class="main-login main-center">
                                <form id="myform">
                                    <div id="s" align="center">

                                        <h3><strong>Questionario</strong></h3>
                                    </div>

                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Digite o nome do questionario</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="quest" value="Questionario" id="quest" placeholder="Ex: quesreqtionario para avaliação de clientes" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Descrição questionario.</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" name="descr" value="Questionario" id="descr"  placeholder="Descreva sobre o que este questionario se trata. Sua finalidade." />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Setor</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" value="Questionario" name="categ"  id="categ" placeholder="Qual o setor que elaborou." />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="cols-sm-2 control-label">Autor</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" value="Questionario" name="autor1"  id="autor" placeholder="Escreva seu nome completo" />
                                                </div>
                                            </div>
                                        </div>
                                        <div id="multiplaescolha">

                                        </div>
                                    </div>






                                    <button onclick="Gravar()" type="button" class="btn btn-primary btnPrincipal">SALVAR <i class="glyphicon glyphicon-plus-sign"></i> </button>
                                    <button onclick="addPergunta()" return false type="button" class="btn btn-success">Perg. Aberta <i class="glyphicon glyphicon-plus-sign"></i> </button>
                                    <button onclick="PME()" class="btn btn-danger" type="button" btnPrincipal name="3">Perg. Fechada<i class="glyphicon glyphicon-plus-sign"></i> </button>


                                    <button type="button" id="capt" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div id="teste1" class="row main">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>

            </div>

        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">



            <br><br><br><br><br><br>
        </div>


        <div id="m1">
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sucesso.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="1" class="modal-body">

                            Questionario Salvo com sucesso.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div align="center" class="modal-header">
                            <h5 class="modal-title" id="exampleModa2Label"><b>Erro ao salvar.</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div id="1" class="modal-body">

                            Ocorreu um erro ao tentar salvar o questionario no banco de dados.
                            <br>Verifique se você deixou algum<strong> campo em branco</strong>.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </body>
    <script>
//        $(function () {
//}
//            
//        });

//        function validar() {
//            $("#myform").validate({
//                debug: true,
//                rules: {
//                    quest: {
//                        minlength: 6,
//                        maxlength: 25
//                    },
//                    descr: {
//                        minlength: 60,
//                        maxlength: 140
//                    },
//                    categ: {
//                        minlength: 6,
//                        maxlength: 20
//                    },
//
//                    autor1: {
//                        minlength: 10,
//                        maxlength: 40
//                    },
//
//                    nomeresposta: {
//                        minlength: 1
//                    },
//
//                    nomeF: {
//                        required: true,
//                        minlength: 10
//                    },
//
//                    nomeA: {
//                        minlength: 9,
//                        required: true
//                    }
//
//
//                }
//            });
//
//        }

        var mudadiv = 0;
        var NovaPergunta = 0;
        var mudaradio = 0;
        var mudatxt = 0;
        var con = 0;
        var conti = 0;
        var arrPerguntas = [];
        var div;
        var contfechar = 1;

        function fechardiv(fechardivp) {

            $("#" + fechardivp + "").remove();

            
        }

        function fechardivMesc(fechardivm) {

            $("#" + fechardivm + "").remove();

            alert("fechado a div" + fechardivm);
            
        }
        var respostas2 = new Array();
        var perguntasAbertas = new Array();
        var perguntasFechadas = new Array();

        function Gravar() {
            try {
                var resultado = new Array();

                    

           
                    resultado = $(".perguntasA").each(function () {
                    var data = $(this).val(); 
                    console.log(data);
                    perguntasAbertas.push($(this).val());
                    alert(data)
                });
//            
                var resultado2 = new Array();
                resultado2 = $(".perguntasM").each(function () {
                    var dados = $(this).val();
                    perguntasFechadas.push($(this).val());

                });

                $('.respostasP').each(function() {
                    respostas2.push($(this).val());
                   var data = $(this).val();
                    alert(data);
                        });



              
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
                        perguntasAbertas: $(".perguntasA").serialize(),
                        perguntasFechadas: $(".perguntasM").serialize(),
                        respostas2:  $('.respostasP').serializeArray()
                   
                    },
                    success: function (resp) {
                        if (resp === "Não") {
                            $("#exampleModa2").modal("show");
                        }
                        if (resp === "SIM") {
                            $("#exampleModal").modal("show");
                        } else {
                            //alert("Não foi possivel realizar está operação porque foram encontrados erros. ");
                            alert(resp);
                        }
                        //alert(resp[0]);
                    },
                    error: function () {
                        alert('ERRO DO SISTEMA Nº22.\nENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA.');
                    }
                });
            } catch (exception) {
                console.log(exception);
            }

        }
        

        function addPergunta() {

            var htmlNovo = "";
            htmlNovo +=
                    '<div class="main-login main-center">' +
                    '<form class="form-horizontal" method="post" action="#">' +
                    '<div id="' + mudadiv + '" class="form-group">' +
                    '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta.</label>' +
                    '<div class="cols-sm-10">' +
                    '<div class="input-group">' +
                    '<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>' +
                    '<input type="text" class="form-control perguntasA" required="" name="PergAberta'+ conti + '"id="perguntaA' + conti + '"placeholder="Qual seu nome?" />' +
                    '</div>' + '<a class="btn page-scroll" onclick="fechardiv(' + mudadiv + ')""><img border="0" width="40px" src="img/close.png" ><strong></strong></a>' + '</div></div></form></div></div></div></div></div>' + '';
            document.getElementById("multiplaescolha").insertAdjacentHTML('beforeend', htmlNovo); //recebe a div onde vai inserir outras perguntas. 
            //$("#autor").fadeOut();
            conti++;
            mudadiv++;
           
            return false;
        }


        function PME() {
            while (($("#perguntaF" + NovaPergunta + "").length)) {
                alert("ID IDENFICADO");
                NovaPergunta++;
            }
            var html = "";
            html += '<div class="main-login main-center">' +
                    '<div id="' + mudadiv + '" class="form-group">' +
                    '<label for="name" class="cols-sm-2 control-label">Digite sua pergunta de multipla escolha.</label>' +
                    '<div class="cols-sm-10">' +
                    '<div class="input-group">' +
                    '<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>' +
                    '<input  type="text" required="" class="form-control perguntasM" name="PergMult'+ NovaPergunta +'"id="perguntaF' + NovaPergunta + '"placeholder="Qual a sua idade?"/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div id="maisresposta2' + mudadiv + '"></div>' +
                    '</div>' +
                    '<button onclick="MaisRespostas2(' + mudadiv + ')" style="margin-top:5px" class="btn btn-info" type="button">Nova Resposta</button>' +
                    '<a class="btn page-scroll" onclick="fechardivMesc(' + mudadiv + ')"><img border="0" width="40px" src="img/close.png" ><strong></strong></a>' +
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
                        '<input type="radio"  name="r' + con + '"  id="chequeRadio' + novo + '-' + arrPerguntas[novo] + '">' + '</span>' +
                        '<input required="" type="text" name="resposta' + novo + '-' + arrPerguntas[novo]+'" class="form-control respostasP" id="textodaresposta_' + novo + '-' + arrPerguntas[novo] + '"aria-label="...">' + '</div>' + '</forme>' + '</div>' + '';

                document.getElementById("maisresposta2" + novo + "").insertAdjacentHTML('beforeend', htmlresposta);

                con++;

            } else {
                arrPerguntas[novo] = 1;
                var htmlresposta = "";
                htmlresposta += '<div class="col-lg-6">' + '<div class="input-group">' + '<span class="input-group-addon">' +
                        '<input type="radio"name="r' + con + '" id="chequeRadio' + novo + '-' + arrPerguntas[novo] + '">' + '</span>' +
                        '<input type="text" class="form-control respostasP" name="resposta' + novo + '-' + arrPerguntas[novo] + '"id="textodaresposta_' + novo + '-1"aria-label="...">' + '</div>' + '</div>' + '';

                document.getElementById("maisresposta2" + novo + "").insertAdjacentHTML('beforeend', htmlresposta);

                con++;
            }
            return false;
        }

    </script>





</html>
