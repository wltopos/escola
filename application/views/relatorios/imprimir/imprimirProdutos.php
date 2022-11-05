<!DOCTYPE html>
<html>

<head>
    <title><?= $configuration['app_name'] ?: 'Sistema de Loja' ?></title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blue.css" class="skin-color" />
    <script type="text/javascript" src="<?= base_url('assets/js/calculador.js')?>" ></script>

    
</head>

<body style="background-color: transparent">

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box  marca">
                 <h4 style="font-size: 0.7em; padding: 0px;">   <?= $topo ?> </h4>
                    <div class="widget-title">
                        <h4 style="text-align: center; font-size: 1.9em; padding: 15px;">
                            <?= ucfirst($title) ?>
                        </h4>
                    </div>
                    <div class="widget-content nopadding tab-content">
                        <table class="table table-bordered transparencia" >
                            <thead>
                                <tr>
                                    <th width="auto" >Codigo</th>
                                    <th width="auto" >Nome</th>
                                    <th width="150" >Tipo</th>
                                    <th width="130" >Marca</th>
                                    <th width="130" >Preço Compra</th>
                                    <th width="120" >Estoque</th>
                                    <th width="130" >Valor Estoque</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                              $this->load->model('produtos_model');
                                    foreach ($produtos as $p) {
                                        $estoque =  $this->produtos_model->converteMedida($p->estoque, $p->estoque_medida_id, 'D');
                                        $quantidadeProdutos += $estoque['valorConvertido'];
                                        echo '<tr>';
                                        echo '<td>' . $p->codDeBarra . '</td>';
                                        echo '<td>' . $p->produtoDescricao . '</td>';
                                        echo '<td align="center">' . $p->tipo_produto . '</td>';
                                        echo '<td align="center">' . $p->marca . '</td>';
                                        echo '<td align="center">R$: ' . $p->precoCompra . '</td>';
                                        echo '<td align="center">' . $estoque['textoRS'] . '</td>';
                                        echo '<td align="center">R$: ' . number_format($p->valorEstoque, 2, ',', '.') . '</td>';
                                        echo '</tr>';

                                    }

                                    
                                ?>
                                <tr>
                                    <td colspan="7">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="5"></td>
                                    <td align="center"><b>Itens em Estoque</b></td>
                                    <td align="center"><b>Valor do Estoque</b></td>
                                </tr>
                                <tr style="background-color: gainsboro;">
                                    <td colspan="5"></td>
                                    <td align="center"><?= $quantidadeProdutos ?></td>
                                    <td align="center">R$: <?=  number_format(array_sum(array_column($produtos, 'valorEstoque')), 2, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h5 style="text-align: right; font-size: 0.8em; padding: 5px;">
                    Data do Relatório: <?php echo date('d/m/Y'); ?>
                </h5>
            </div>
        </div>
    </div>
</body>

</html>
