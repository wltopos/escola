<?php $totalProdutos = 0; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sis_Loja_<?php echo $result->id_comercial_venda ?>_<?php echo $result->nomeCliente ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
    <style>
       
        .table {

            width: 58mm;
            margin: 0 0;
        }

        @media print {
            footer {
                page-break-after:unset;
            }
        }

        @media print {
            * {
                background: transparent;
                color: #000;
                text-shadow: none;
                filter: none;
                -ms-filter: none;
            }
        }

        @page {
           
            margin-top: 0.0in;
            margin-left: 0.01in;
            margin-right: 0.1in;
            margin-bottom: 0.0in;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="invoice-content">
                    <div class="invoice-head">
                        <table class="table">
                            <tbody>
                                <?php if ($emitente == null) { ?>
                                    <tr>
                                        <td colspan="12" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a>
                                            <<<< </td>
                                    </tr> <?php
                                        } else { ?>
                                    <td colspan="12" style="text-align: center"> <span style="font-size: 17px; ">
                                            <img src=" <?php echo $emitente->url_logo; ?>" alt="Logo" />
                                            <tr>
                                                <td colspan="12" style="text-align: center;"> <span style="font-size: 17px;">
                                                        <?php echo $emitente->empresa; ?></span> </br><span style="padding-right:10%;">
                                                        <?php echo 'CNPJ: ' . $emitente->cnpj; ?> </br>
                                                        <?php echo $emitente->ruaEmitente . ', ' . $emitente->numeroEmitente . ', ' . $emitente->bairroEmitente ?> </span> <span> <?php echo $emitente->cidadeEmitente . ' - ' . $emitente->ufEmitente; ?> </span> </br>
                                                    <span><?php echo 'Fone: ' . $emitente->telefoneEmitente; ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="12" style="width: 95%;">#Venda: <span>
                                                        <?php echo $result->id_comercial_venda ?></span>
                                                    <span style="padding-inline: 1em">Emissão: <?php echo date('d/m/Y'); ?></span>
                                                    <?php if ($result->faturado) : ?>
                                                        <br>
                                                        Vencimento:
                                                        <?php echo date('d/m/Y', strtotime($result->data_vencimento)); ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php
                                        } ?>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="12" style="width: 50%; padding-left: 5px">
                                        <ul>
                                            <li>
                                                <span>
                                                    <h5 style="text-align: center;"> CUPOM NÃO FISCAL </h5>
                                                    <span style="font-size: 13px; margin-top:5px;">Dados do Cliente </span><br />
                                                    <span style="font-size: 10px;">
                                                        <?php echo $result->nomeCliente ?></span><br />
                                                    <span>
                                                         <?php echo $result->rua != "" ? $result->rua : "Não informado"; ?>,
                                                        <?php echo $result->numero ?>,
                                                        <?php echo $result->bairro ?></span><br />
                                                    <span>
                                                        <?php echo $result->cidade ?> -
                                                        <?php echo $result->estado ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 0; padding-top: 0;">
                        <?php if ($produtos != null) { ?>
                            <table class="table table-bordered " id="tblProdutos">
                                <thead>
                                    <tr>
                                        <th style="font-size: 10px; width:35%">Produto</th>
                                        <th style="font-size: 10px">Quant.</th>
                                        <th style="font-size: 9px">Prço unt.</th>
                                        <th style="font-size: 9px">S.total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produtos as $p) {
                                        $totalProdutos = $totalProdutos + $p->subTotal;
                                        echo '<tr>';
                                        echo '<td style="font-size: 9px">' . $p->tipo_produto . '</td>';
                                        echo '<td style="font-size: 10px">' . $p->quantidade . '</td>';
                                        echo '<td style="font-size: 8px">R$ ' . number_format($p->preco ?: $p->precoVenda, 2, ',', '.') . '</td>';
                                        echo '<td style="font-size: 8px">R$ ' . number_format($p->subTotal, 2, ',', '.') . '</td>';
                                        echo '</tr>';
                                    } ?>
                                    <?php if ($result->valor_ajuste !=0 && $result->ajustaValorTipo == 'DESCONTO') { ?>
                                        <tr>
                                            <td colspan="12" style="text-align: right; padding-right:7%"><strong>Desconto: R$</strong></td>
                                            <td>
                                                <strong>
                                                    <?php echo number_format($result->valor_ajuste - $totalProdutos, 2, ',', '.'); ?>
                                                </strong>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <?php if ($result->valor_ajuste !=0 && $result->ajustaValorTipo == 'TAXA') { ?>
                                        <tr>
                                            <td colspan="12" style="text-align: right; padding-right:7%"><strong>Taxa: R$</strong></td>
                                            <td>
                                                <strong>
                                                    <?php echo number_format($result->valor_ajuste + $totalProdutos, 2, ',', '.'); ?>
                                                </strong>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="12" style="text-align: right; padding-right:2%">
                                            <h4 style="text-align: right">Valor Total: R$</h4>
                                                <?php echo number_format($totalProdutos, 2, ',', '.'); ?>
                                            
                                        </td>
                                    </tr>

                                    
                                </tbody>
                                
                            </table>

                            <table>
                            <tr>
                                        <td>
                                    <?php if ($qrCode) : ?>
                                        <td colspan="12" style="text-align: center">
                                            <img style="margin:0px auto; width:100%; " src="<?= $qrCode ?>" alt="QR Code de Pagamento" />
                                            <h3>Volte sempre!</h3>
                                        </td>
                                    <?php endif ?>
                                        </td>
                                    </tr>
                            </table>
                        <?php
                        } ?>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/matrix.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>