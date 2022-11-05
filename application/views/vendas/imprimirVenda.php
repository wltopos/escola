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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
   
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
                                        <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a>
                                            <<<< </td>
                                    </tr> <?php
                                        } else { ?> <tr>
                                        <td style="width: 25%"><img src=" <?php echo $emitente->url_logo; ?> "></td>

                                        <td> <span style="font-size: 17px;">

                                                <?php echo $emitente->empresa; ?></span> </br>
                                            <span style="font-size: 12px; ">
                                                <span class="icon">
                                                    <i class="fas fa-fingerprint" style="margin:5px 1px"></i>
                                                    <?php echo $emitente->cnpj; ?> </br>
                                                    <span class="icon">
                                                        <i class="fas fa-map-marker-alt" style="margin:4px 3px"></i>
                                                        <?php echo $emitente->ruaEmitente . ', nº:' . $emitente->numero . ', ' . $emitente->bairroEmitente . ' - ' . $emitente->cidadeEmitente . ' - ' . $emitente->ufEmitente; ?>

                                                    </span> </br> <span>
                                                        <span class="icon">
                                                            <i class="fas fa-comments" style="margin:5px 1px"></i>
                                                            E-mail:
                                                            <?php echo $emitente->emailEmitente . ' - Fone: ' . $emitente->telefoneEmitente; ?> </br>
                                                            <span class="icon">
                                                                <i class="fas fa-user-check"></i>
                                                                Vendedor: <?php echo $emitente->nome ?>
                                                            </span>
                                        </td>
                                        <td style="width: 18%; text-align: center">#Venda: <span>
                                                <?php echo $result->id_comercial_venda ?></span></br> </br> <span>Emissão:
                                                <?php echo date('d/m/Y'); ?></span>

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
                                    <td style="width: 85%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span>
                                                    <h5>Cliente</h5>
                                                    <?php echo $result->nomeCliente ?> -
                                                    <?php echo $result->documento ?></br>
                                                    <?php echo $result->rua ?>,
                                                    <?php echo $result->numero ?>,
                                                    <?php echo $result->bairro ?>,
                                                    <?php echo $result->cidade ?> -
                                                    <?php echo $result->estado ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </td>

                                    <?php if ($qrCode) : ?>
                                        <td style="width: 15%; padding-left: 0">
                                            <img style="margin:0;" src="<?= $qrCode ?>" alt="QR Code de Pagamento" />
                                        </td>
                                    <?php endif ?>
                                </tr>
                            </tbody>
                        </table>
                        <hr style="margin:0;";>
                    </div>
                    <div style="margin-top: 0; padding-top: 0">
                        <?php if ($produtos != null) { ?>
                            <table class="table table-bordered table-condensed" id="tblProdutos">
                                <thead>
                                    <tr>
                                        <th style="font-size: 12px; width:20%">Cód</th>
                                        <th style="font-size: 12px">Produto</th>
                                        <th style="font-size: 12px; width:10%">Qt</th>
                                        <th style="font-size: 12px; width:15%">Valor Unit. R$</th>
                                        <th style="font-size: 12px; width:10%">Sub-total R$</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produtos as $p) {
                                        $totalProdutos = $totalProdutos + $p->subTotal;
                                        echo '<tr>';
                                        echo '<td>' . $p->codDeBarra . '</td>';
                                        echo '<td>' . $p->produtoDescricao . '</td>';
                                        echo '<td>' . number_format($p->quantidade, $p->casasDecimais, ',', '.').' '.$p->unidadeVenda . '</td>';
                                        echo '<td> R$' .number_format($p->preco ?: $p->precoVenda, 2, ',', '.'). '</td>';
                                        echo '<td> R$' .number_format($p->subTotal, 2, ',', '.'). '</td>';
                                        echo '</tr>';
                                    } ?>
                                    <?php if ($result->valor_ajuste !=0 && $result->ajustaValorTipo == '') { ?>
                                    <tr>
                                        <td colspan="4" style="text-align: right"><strong><?= $result->ajustaValorTipo ?>: R$ </strong></td>
                                        <td>
                                            <strong>
                                                <?php 
                                                $totalProdutos = $totalProdutos - $result->valor_ajuste; 
                                                echo number_format($result->valor_ajuste, 2, ',', '.'); 
                                                ?>
                                            </strong>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php if ($result->valor_ajuste !=0 && $result->ajustaValorTipo == 'TAXA') { ?>
                                    <tr>
                                        <td colspan="4" style="text-align: right"><strong>Taxa: R$</strong></td>
                                        <td>
                                            <strong>
                                                <?php 
                                                $totalProdutos =$totalProdutos + $result->valor_ajuste;
                                                 echo number_format($result->valor_ajuste, 2, ',', '.'); 
                                                 ?>
                                            </strong>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="4" style="text-align: right"><strong>Total: R$</strong></td>
                                        <td><strong>
                                        <?php echo number_format( $totalProdutos, 2, ',', '.'); ?>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        } ?>
                        <h5 style="text-align: left">Observações:</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 100%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span><?php echo htmlspecialchars_decode($result->observacoes_cliente) ?></span><br />
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
