<?php
/*
 * Projeto Ifood
 * Copie oque eu faço, Mas não pode copiar oque sei fazer
 * Copyright [#ExplicitChecker] 11/2017 by: Thiagão
 * Discord: Thiaga1#3174
 */
error_reporting(0);
set_time_limit(0);
header("Content-Type: text/html; charset=utf-8");
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>MercadoLivre Checker</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="arquivos/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="arquivos/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="arquivos/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="arquivos/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>
        <div class="container" style="width: 109%; margin-left: -9%;">

            <div class="row">
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
                <div class="col-md-11 col-lg-11 col-xs-11" style="margin-top: 2%;">
                    <hr>
                    <div class="panel">
                        <div class="panel-heading">
                            BY SALINN
                            <span class="pull-right">
                                <label class="radio-inline"><input type="radio" name="optradio" id="socks5" onclick="proxy_type = 'socks5';" checked>Socks5</label>
                                <label class="radio-inline"><input type="radio" name="optradio" id="http" onclick="proxy_type = 'http';">Http Proxy</label>
                                <button type="button" class="btn btn-xs btn-success get_socks"><i class="fa fa-download"></i> Importar Proxy</button>
                                <button type="button" class="btn btn-xs btn-primary testar_socks" style="display: none;"><i class="fa fa-play-circle"></i> Testar Socks5</button>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="col-xs-7">
                                <textarea name="lista" id="lista" onkeyup="contar_total(this);" placeholder="email@<?= $_SERVER['HTTP_HOST'] ?>|123123" class="form-control" rows="7"></textarea>
                            </div>
                            <div class="col-xs-5">
                                <textarea name="socks" id="socks" disabled placeholder="AUTOMATIC" class="form-control" rows="7"></textarea>

                                <div style="display:none;" class="t_status">
                                    Live/Dies: <span class="label label-success t_aprovados">0</span> / <span class="label label-danger t_reprovados">0</span>
                                    Testado/Total:  <span id="t_testado" class="label label-info">0</span> / <span id="t_total" class="label label-default">0</span>
                                </div>
                                <br>
                            </div>
                            <hr>

                            <div class="row">
                                <center>
                                    <div>
                                        Status: <span id="status" class="label label-default">Esperando Comando!</span><br><p></p>
                                        Aprovadas: <span class="label label-success aprovada_conta">0</span>
                                        Reprovadas: <span  class="label label-danger reprovada_conta">0</span>
                                        Testado:  <span id="testado" class="label label-info">0</span>
                                        Total: <span id="tudo_conta" class="label label-default">0</span>

                                    </div>
                                    <br>
                                </center>
                                <br>
                                <div class="col-md-6 col-xs-6 col-lg-6">
                                    <button type="button" class="btn btn-success btn-block" id="iniciar">Iniciar</button>
                                </div>
                                <div class="col-md-6 col-xs-6 col-lg-6">
                                    <button type="button" class="btn btn-danger btn-block" id="parar" disabled="disabled">Parar</button>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
                <div class="col-md-11 col-xs-11 col-lg-11">
                    <div id="result" style="display: none;">

                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Aprovadas &nbsp;
                                        <span class="label label-success aprovada_conta">0</span>
                                        <span class="pull-right">

                                            <button type="button" class="btn btn-xs btn-warning" id="btn_live"><i class="fa fa-minus"></i> <font color="black"> Esconder </font></button>
                                            <button type="button" class="btn btn-xs btn-warning" onclick="document.getElementById('aprovadas').innerHTML = ''"><i class="fa fa-close"></i> <font color="black"> Limpar </font></button>
                                        </span>
                                    </div>
                                    <div  class="panel-body">
                                        <div id="aprovadas"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        Reprovadas &nbsp;
                                        <span class="label label-danger reprovada_conta">0</span>
                                        <span class="pull-right">
                                            <button type="button" class="btn btn-xs btn-warning" id="btn_die"><i class="fa fa-minus"></i> <font color="black"> Esconder </font></button>
                                            <button type="button" class="btn btn-xs btn-warning" onclick="document.getElementById('reprovadas').innerHTML = ''"><i class="fa fa-close"></i> <font color="black"> Limpar </font></button>
                                        </span>
                                    </div>
                                    <div  class="panel-body">
                                        <div id="reprovadas"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-xs-12 col-lg-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        SOCK DIE &nbsp;
                                        <span class="label label-info" id="sock_die">0</span>
                                        <span class="pull-right">
                                            <button type="button" id="btn-sock-hide" class="btn btn-xs btn-warning"><i class="fa fa-minus"> </i><font color="black"> Esconder </font></button>
                                            <button type="button" class="btn btn-xs btn-warning" onclick="document.getElementById('sock_ruim').innerHTML = ''"><i class="fa fa-close"></i> <font color="black"> Limpar </font></button>
                                        </span>
                                    </div>
                                    <div  class="panel-body">
                                        <div id="sock_ruim"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-xs-1 col-lg-1"></div>
            </div>
        </div>

        <!-- MODAL -->

        <div class="modal fade" id="modal_mailpass" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Oppppsss...</h4>
                    </div>
                    <div class="modal-body">
                        Lista de email e senha não encotranda
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_sock" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Uppppsss...</h4>
                    </div>
                    <div class="modal-body">
                        Por Favor Insira os socks.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_done" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sucesso</h4>
                    </div>
                    <div class="modal-body">
                        Todos os login foram testados.
                    </div>
                </div>
            </div>
        </div>

        <script src="arquivos/jquery.min.js"></script>
        <script src="arquivos/jquery-ui.js"></script>
        <script src="arquivos/action.js"></script>
        <script src="arquivos/bootstrap.min.js"></script>

    </body>
</html>