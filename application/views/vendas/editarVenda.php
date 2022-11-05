<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-cash-register"></i>
                </span>
                <h5>Editar Venda</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Detalhes da Venda</a></li>
                        <li id="tabProdutos"><a href="#tab2" data-toggle="tab">Produtos</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="span12" id="divEditarVenda">
                                <form action="<?php echo current_url(); ?>" method="post" id="formVendas">
                                    <?php echo form_hidden('idVendas', $result->id_comercial_venda) ?>
                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <h3>Venda:
                                            <?php echo $result->id_comercial_venda ?>
                                        </h3>
                                        <div class="span2" style="margin-left: 0">
                                            <label for="dataFinal">Data Final</label>
                                            <input id="dataVenda" class="span12 datepicker" type="text" name="dataVenda" value="<?php echo date('d/m/Y', strtotime($result->dataVenda)); ?>" />
                                        </div>
                                        <div class="span5">
                                            <label for="cliente">Cliente<span class="required">*</span></label>
                                            <input id="cliente" class="span12" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>" />
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?php echo $result->comercial_cliente_id ?>" />
                                            <input id="valorTotal" type="hidden" name="valorTotal" value="" />

                                        </div>
                                        <div class="span5">
                                            <label for="tecnico">Vendedor<span class="required">*</span></label>
                                            <input id="tecnico" class="span12" type="text" name="tecnico" value="<?= $usuario->nome; ?>" readonly />
                                            <input id="usuarios_id" class="span12" type="hidden" name="usuarios_id" value="<?php echo $usuario->idUsuarios ?>" />
                                        </div>
                                    </div>



                                    <div class="span6" style="padding: 1%; margin-left: 0">
                                        <label for="observacoes">
                                            <h4>Observações</h4>
                                        </label>
                                        <textarea class="editor" name="observacoes" id="observacoes" cols="30" rows="5"><?php echo $result->observacoes ?></textarea>
                                    </div>

                                    <div class="span6" style="padding: 1%; margin-left: 0">
                                        <label for="observacoes_cliente">
                                            <h4>Observações para o Cliente</h4>
                                        </label>
                                        <textarea class="editor" name="observacoes_cliente" id="observacoes_cliente" cols="30" rows="5"><?php echo $result->observacoes_cliente ?></textarea>
                                    </div>

                                    <div class="span12" style="padding: 1%; margin-left: 0">
                                        <div class="span8 offset2" style="text-align: center;display:flex; flex-wrap: wrap">
                                            <?php if ($result->faturado == 0) { ?>
                                                <a href="#modal-faturar" id="btn-faturar" role="button" data-toggle="modal" class="button btn btn-danger">
                                                    <span class="button__icon"><i class='bx bx-dollar'></i></span> <span class="button__text2">Faturar</span></a>
                                            <?php
                                            } ?>
                                            <button class="button btn btn-primary" id="btnContinuar">
                                                <span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
                                            <a href="<?php echo base_url() ?>index.php/vendas/visualizar/<?php echo $result->id_comercial_venda; ?>" class="button btn btn-primary">
                                                <span class="button__icon"><i class="bx bx-show"></i></span><span class="button__text2">Visualizar</span></a>
                                            <a href="<?php echo base_url() ?>index.php/vendas" class="button btn btn-warning">
                                                <span class="button__icon"><i class="bx bx-undo"></i></span> <span class="button__text2">Voltar</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="span12 well" style="padding: 1%; margin-left: 0">
                                <div class="span11">
                                    <form id="formProdutos" action="<?php echo base_url(); ?>index.php/vendas/adicionarProduto" method="post">
                                        <div class="span6">
                                            <input type="hidden" name="idProduto" id="idProduto" />
                                            <input type="hidden" name="idVendasProduto" id="idVendasProduto" value="<?php echo $result->id_comercial_venda ?>" />
                                            <input type="hidden" name="estoque" id="estoque" value="" />
                                            <input id="medida" type="hidden" name="medida" value="" />
                                            <input id="multiplicador" type="hidden" name="multiplicador" value="" />
                                            <label for="">Produto</label>
                                            <input type="text" class="span12" name="produto" id="produto" placeholder="Digite o nome do produto" />
                                        </div>
                                        <div class="span2">
                                            <label for=""> Preço</label>
                                            <input type="text" placeholder="Preço (R$)" id="precoInput" name="precoInput" class="span5 money" readonly />
                                            <input type="hidden" id="preco" name="preco" />

                                        </div>
                                        <div class="span2">
                                            <label for="">Quantidade</label>
                                            <input type="text" placeholder="Quantidade" id="quantidade" name="quantidade" class="span6" />
                                            <select name="unidade" id="unidade" class="span6">
                                                <option value="0">Selecione</option>

                                            </select>

                                        </div>

                                        <div class="span2">
                                            <label for="">&nbsp</label>
                                            <button class="button btn btn-success" id="btnAdicionarProduto">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Adicionar</span></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="span11">
                                    <form id="formDesconto" action="<?php echo base_url('vendas/adicionarDesconto'); ?>" method="POST">
                                        <div class="span2">
                                            <input type="hidden" name="idVendas" id="idVendas" value="<?php echo $result->id_comercial_venda; ?>" />
                                            <input type="hidden" name="valorTotal" id="valorTotalVenda" value="" /> 

                                            <label for="">Valor (%)</label>
                                            <input style="width: 4em;" id="ajustaValor" name="ajustaValor" type="text" placeholder="%" maxlength="6" size="2" value="" class="span6" />

                                            <select class="span7" name="ajustaValorTipo" id="ajustaValorTipo">

                                                <option value="DESCONTO" selected>Desconto</option>
                                                <option value="TAXA">Taxa</option>
                                            </select>
                                            <strong><span style="color: red" id="errorAlert"></span></strong>
                                        </div>

                                        <div class="span2">
                                            <label for="">Total com Desconto (R$)</label>
                                            <input class="span6 money" id="resultado" type="text" data-affixes-stay="true" data-thousands="" data-decimal="." placeholder="R$ 0.00" name="resultado" value="" readonly />
                                        </div>
                                        <div class="span2">
                                            <label for="">&nbsp;</label>
                                            <button class="button btn btn-success" id="btnAdicionarDesconto">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Aplicar</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="span12" id="divProdutos" style="margin-left: 0">
                                <table class="table table-bordered" id="tblProdutos">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Produto</th>
                                            <th width="8%">Quantidade</th>
                                            <th width="10%">Preço unit.</th>
                                            <th width="6%">Ações</th>
                                            <th width="10%">Sub-total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $total = 0;
                                        foreach ($produtos as $p) {
                                            $casasDecimais = $p->casasDecimais;
                                            $total +=  $p->subTotal;

                                            $quantidade = $p->quantidade;
                                            $preco = number_format($p->preco, 2, ',', '.');

                                            echo '<tr>';
                                            echo '<td>' . $p->codDeBarra . '</td>';
                                            echo '<td>' . $p->produtoDescricao . '</td>';
                                            echo '<td><div align="center">' . number_format($quantidade, $casasDecimais, ',', '.') . " (" . $p->unidadeVenda . ')</td>';
                                            echo '<td><div align="center">R$: ' . $preco  . '</td>';
                                            echo '<td><div align="center"><a href="" idAcao="' . $p->id_comercial_itens_de_venda . '" prodAcao="' . $p->id_estoque_produto . '" quantAcao="' . $quantidade . '" title="Excluir Produto" class="btn-nwe4"><i class="bx bx-trash-alt"></i></a></td>';
                                            echo '<td><div align="center">R$: ' . number_format($p->subTotal, 2, ',', '.') . '</td>';
                                            echo '</tr>';
                                        }

                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align: right"><strong>Total:</strong></td>
                                            <td>
                                                <div style="text-align:center"><strong>R$: <?php echo number_format($total, 2, ',', '.'); ?></strong></div> <input type="hidden" id="total-venda" value="<?php echo number_format($total, 2); ?>">
                                            </td>
                                        </tr>
                                        <?php

                                        if ($result->valor_ajuste != 0 && $result->ajustaValor != 0) {
                                        ?>
                                            <tr>
                                                <td colspan="5" style="text-align: right"><strong><?php echo ucwords(strtolower($result->ajustaValorTipo)) ?>:</strong></td>
                                                <td>
                                                    <div style="text-align:center"><strong>R$: <?php echo number_format($result->ajustaValor, 2, '.', ','); ?> </strong></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" style="text-align: right"><strong>Total Com <?php echo ucwords(strtolower($result->ajustaValorTipo)) ?>:</strong></td>
                                                <td>
                                                    <div style="text-align:center"><strong>R$: <?php echo number_format($result->valor_ajuste, 2, ',', '.'); ?></strong></div><input type="hidden" id="total-desconto" value="<?php echo number_format($result->valor_ajuste, 2); ?>">
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                &nbsp
            </div>
        </div>
    </div>
</div>

<!-- Modal Faturar-->
<div id="modal-faturar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form id="formFaturar" action="<?php echo current_url() ?>" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Faturar Venda</h3>
        </div>
        <div class="modal-body">
            <div class="span12 alert alert-info" style="margin-left: 0"> Obrigatório o preenchimento dos campos com asterisco.</div>
            <div class="span12" style="margin-left: 0">
                <label for="descricao">Descrição</label>
                <input class="span12" id="descricao" type="text" name="descricao" value="Fatura de Venda Nº: <?php echo $result->id_comercial_venda; ?> " />
            </div>
            <div class="span12" style="margin-left: 0">
                <div class="span12" style="margin-left: 0">
                    <label for="cliente">Cliente*</label>
                    <input class="span12" id="cliente" type="text" name="cliente" value="<?php echo $result->nomeCliente ?>" />
                    <input type="hidden" name="clientes_id" id="clientes_id" value="<?php echo $result->comercial_cliente_id ?>">
                    <input type="hidden" name="vendas_id" id="vendas_id" value="<?php echo $result->id_comercial_venda; ?>">
                </div>
            </div>
            <div class="span12" style="margin-left: 0">
                <div class="span5" style="margin-left: 0">
                    <label for="valor">Valor*</label>
                    <input type="hidden" id="tipo" name="tipo" value="receita" />
                    <input class="span12 money" id="valor" type="text" name="valor" value="<?php echo number_format($total, 2, '.', ''); ?> " />
                </div>
                <div class="span5" style="margin-left: 2">
                    <label for="valor">Valor Com Desconto*</label>
                    <input class="span12 money" id="faturar-desconto" type="text" name="faturar-desconto" value="<?php echo number_format($result->valor_ajuste, 2, '.', ''); ?> " />
                </div>
            </div>
            <div class="span12" style="margin-left: 0">
                <div class="span4" style="margin-left: 0">
                    <label for="vencimento">Data Entrada*</label>
                    <input class="span12 datepicker" autocomplete="off" id="vencimento" type="text" name="vencimento" />
                </div>
            </div>
            <div class="span12" style="margin-left: 0">
                <div class="span4" style="margin-left: 0">
                    <label for="recebido">Recebido?</label>
                    &nbsp &nbsp &nbsp &nbsp<input id="recebido" type="checkbox" name="recebido" value="1" />
                </div>
                <div id="divRecebimento" class="span8" style=" display: none">
                    <div class="span6">
                        <label for="recebimento">Data Recebimento</label>
                        <input class="span12 datepicker" autocomplete="off" id="recebimento" type="text" name="recebimento" />
                    </div>
                    <div class="span6">
                        <label for="formaPgto">Forma Pgto</label>
                        <select name="formaPgto" id="formaPgto" class="span12">
                            <option value="Dinheiro">Dinheiro</option>
                            <option value="Cartão de Crédito">Cartão de Crédito</option>
                            <option value="Débito">Débito</option>
                            <option value="Boleto">Boleto</option>
                            <option value="Depósito">Depósito</option>
                            <option value="Pix">Pix</option>
                            <option value="Cheque">Cheque</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer" style="display:flex">
            <button class="button btn btn-warning" data-dismiss="modal" aria-hidden="true" id="btn-cancelar-faturar">
                <span class="button__icon"><i class="bx bx-x"></i></span><span class="button__text2">Cancelar</span></button>
            <button class="button btn btn-danger"><span class="button__icon"><i class='bx bx-dollar'></i></span> <span class="button__text2">Faturar</span></button>
        </div>
    </form>
</div>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    
    $(".money").maskMoney();
    parametro = {
        'urlAtual': `<?php echo current_url(); ?> #divProdutos`,
        'urlBase': `<?php echo base_url(); ?>`,
        'urlSite': `<?php echo site_url(); ?>`,
        'idVenda': `<?php echo $result->id_comercial_venda ?>`,
        'control_estoque': `<? echo $configuration['control_estoque'] ?>`,
    };

    let urlBase = parametro.urlBase;
    let urlAtual = parametro.urlAtual;
    let urlFaturar = parametro.urlSite + "vendas/faturar";
    let urlProduto = parametro.urlSite + "autoComplete/autoCompleteProduto";
    let urlCliente = parametro.urlSite + "AutoComplete/autoCompleteCliente";
    //let urlConsultaMedidas = parametro.urlSite + "vendas/consultaMedidas";
    let urlUsuario = parametro.urlSite + "AutoComplete/autoCompleteUsuario";
    let urlAdicionarProduto = parametro.urlSite + "vendas/adicionarProduto";
    let urlExcluirProduto = parametro.urlSite + "vendas/excluirProduto";
    

    $('#recebido').click(function(event) {
        let flag = $(this).is(':checked');
        if (flag == true) {
            $('#divRecebimento').show();
        } else {
            $('#divRecebimento').hide();
        }
    });

    $("#quantidade").keyup(function() {
        this.value = this.value.replace(/[^0-9.]/g, '');
    });

    $(".datepicker").datepicker({
        dateFormat: 'dd/mm/yy'
    });

    $('.editor').trumbowyg({
        lang: 'pt_br'
    });

    $(document).on('click', '#btn-faturar', function(event) {
        // event.preventDefault();
        valor = $('#total-venda').val();
        valor_ajuste = $('#total-desconto').val();
        valor_ajuste != 0.00 || valor_ajuste ? $('#valor').attr('readonly', false) : $('#faturar-desconto').attr('readonly', false);
        valor = valor.replace(',', '');
        $('#valor').val(valor);
    });

    $(document).on('click', 'a', function(event) {
        var idProduto = $(this).attr('idAcao');
        var quantidade = $(this).attr('quantAcao');
        var produto = $(this).attr('prodAcao');
        if ((idProduto % 1) == 0) {
            $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>index.php/vendas/excluirProduto",
                data: "idProduto=" + idProduto + "&idVendas=" + parametro.idVenda + "&quantidade=" + quantidade + "&produto=" + produto,
                dataType: 'json',
                success: function(data) {
                    if (data.result == true) {
                        $("#divProdutos").load(parametro.urlAtual);
                        $("#resultado").val("");
                        $("#desconto").val("");
                    } else {
                        Swal.fire({
                            type: "error",
                            title: "Atenção",
                            html: "Ocorreu um erro ao tentar excluir produto." + data.messages
                        });
                        $("#divProdutos").load(parametro.urlAtual);
                    }
                }
            });
            return false;
        }
    });

    //Form validation
    $("#formProdutos").validate({
        rules: {
            preco: {
                required: true
            },
            quantidade: {
                required: true
            }
        },
        messages: {
            preco: {
                required: 'Insira o preço'
            },
            quantidade: {
                required: 'Insira a quantidade'
            }
        },
        submitHandler: function(form) {
            var quantidade = parseInt($("#quantidade").val());
            var estoque = parseInt($("#estoque").val());


            //  estoque = (!parametro.control_estoque)?1000000:parametro.control_estoque;
            <?php if (!$configuration['control_estoque']) {
                echo $estoque = 1000000;
            }; ?>

            if (estoque < quantidade) {
                Swal.fire({
                    type: "warning",
                    title: "Atenção",
                    text: "Você não possui estoque suficiente."
                });
            } else {
                var dados = $(form).serialize();
                $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
                $.ajax({
                    type: "POST",
                    url: urlAdicionarProduto,
                    data: dados,
                    dataType: 'json',
                    success: function(data) {

                        if (data.result == true) {
                            $("#divProdutos").load(parametro.urlAtual);
                            $("#quantidade").val('');
                            $("#preco").val('');
                            $("#precoInput").val('');
                            $("#estoque").val('');
                            $("#unidade").val(0).change();
                            $("#produto").val('').focus();
                            $("#resultado").val('');
                            $("#ajustaValor").val('');


                            //$("#ajustaValorTipo").val(0).change();
                        } else {
                            Swal.fire({
                                type: "error",
                                title: "Atenção",
                                html: "Ocorreu um erro ao tentar adicionar produto. <br /><br />Error: " + data.messages
                            });
                            $("#divProdutos").load(parametro.urlAtual);
                            $('#formProdutos')[0].reset();
                        }
                    }
                });
                return false;
            }
        }
    });

    $('#formDesconto').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(),
            beforeSend: function() {
                Swal.fire({
                    title: 'Processando',
                    text: 'Registrando desconto...',
                    icon: 'info',
                    showCloseButton: false,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            },
            success: function(response) {
                if (response.result) {
                    Swal.fire({
                        type: "success",
                        title: "Sucesso",
                        text: response.messages
                    });
                    $("#divProdutos").load(parametro.urlAtual);
                    $("#ajustaValor").val("");
                    // $("#ajustaValorTipo").val(0).change();
                    $("#resultado").val("");
                    // setTimeout(function() {
                    //     window.location.href = window.BaseUrl + 'index.php/vendas/editar/' + parametro.idVenda;
                    // }, 2000);
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Atenção",
                        text: response.messages
                    });
                    $("#divProdutos").load(parametro.urlAtual);
                    $("#ajustavalor").val("");
                    $("#ajustavalorTipo").val(0).change();
                    $("#resultado").val("");
                }

            },
            error: function(response) {
                Swal.fire({
                    type: "error",
                    title: "Atenção",
                    text: response.responseJSON.messages
                });
                $("#divProdutos").load(parametro.urlAtual);
                $("#ajustaValor").val("");
                //  $("#ajustaValorTipo").val(0).change();
                $("#resultado").val("");
            }
        });
    });

    $("#formFaturar").validate({
        rules: {
            descricao: {
                required: true
            },
            cliente: {
                required: true
            },
            valor: {
                required: true
            },
            vencimento: {
                required: true
            }
        },
        messages: {
            descricao: {
                required: 'Campo Requerido.'
            },
            cliente: {
                required: 'Campo Requerido.'
            },
            valor: {
                required: 'Campo Requerido.'
            },
            vencimento: {
                required: 'Campo Requerido.'
            }
        },
        submitHandler: function(form) {
            var dados = $(form).serialize();
            var qtdProdutos = $('#tblProdutos >tbody >tr').length;

            $('#btn-cancelar-faturar').trigger('click');

            if (qtdProdutos <= 0) {
                Swal.fire({
                    type: "error",
                    title: "Atenção",
                    text: "Não é possível faturar uma venda sem produtos"
                });
            } else if (qtdProdutos > 0) {
                $.ajax({
                    type: "POST",
                    url: urlFaturar,
                    data: dados,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == true) {
                            window.location.reload(true);
                        } else {
                            Swal.fire({
                                type: "error",
                                title: "Atenção",
                                text: "Ocorreu um erro ao tentar faturar venda."
                            });
                            $('#progress-fatura').hide();
                        }
                    }
                });

                return false;
            }
        }
    });

    $("#formVendas").validate({
        rules: {
            cliente: {
                required: true
            },
            tecnico: {
                required: true
            },
            dataVenda: {
                required: true
            }
        },
        messages: {
            cliente: {
                required: 'Campo Requerido.'
            },
            tecnico: {
                required: 'Campo Requerido.'
            },
            dataVenda: {
                required: 'Campo Requerido.'
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //autoCompletes
    $("#produto").autocomplete({
        source: urlProduto,
        minLength: 2,
        select: function(event, ui) {
            $("#idProduto").val(ui.item.id);
            $("#estoque").val(ui.item.estoque);
            $("#preco").val((ui.item.precoVenda != null ? ui.item.precoVenda : '0.00'));
            $("#precoInput").val('R$' + (ui.item.precoVenda != null ? ui.item.precoVenda : '0.00'));
            $("#medida").val(ui.item.idMedida);
            $("#multiplicador").val(ui.item.multiplicador);
            $("#quantidade").val("");
            $("#quantidade").focus();

            $("#unidade option").remove();
            $("#unidade").append("<option value='D'  >" + ui.item.siglaMedida + "</option>");

            if (ui.item.siglaMedida != ui.item.siglaMedidaSistema) {
                $("#unidade").append("<option value='S' selected >" + ui.item.siglaMedidaSistema + "</option>");
            } else if (ui.item.siglaMedida != ui.item.siglaFracaoSistema) {
                $("#unidade").append("<option value='F' selected >" + ui.item.siglaFracaoSistema + "</option>");
            }

        }
    });

    $("#cliente").autocomplete({
        source: urlCliente,
        minLength: 2,
        select: function(event, ui) {
            $("#clientes_id").val(ui.item.id);
        }
    });

    $("#tecnico").autocomplete({
        source: urlUsuario,
        minLength: 2,
        select: function(event, ui) {
            $("#usuarios_id").val(ui.item.id);
        }
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/controllers/vendas.js"></script>