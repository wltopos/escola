<?php $totalProdutos = 0; ?>
<div class="row-fluid" style="margin-top: 0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-cash-register"></i>
                </span>
                <h5>Dados da Venda</h5>
                <div class="buttons">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eVenda')) {
                        echo '<a title="Editar Venda" class="button btn btn-mini btn-success" href="' . base_url() . 'index.php/vendas/editar/' . $result->id_comercial_venda . '">
    <span class="button__icon"><i class="bx bx-edit"></i> </span> <span class="button__text">Editar</span></a>';
                    } ?>
                    <a target="_blank" title="Imprimir Papel A4" class="button btn btn-mini btn-inverse" href="<?php echo site_url() ?>vendas/imprimir/<?php echo $result->id_comercial_venda; ?>">
                        <span class="button__icon"><i class="bx bx-printer"></i></span> <span class="button__text">Papel A4</span></a>
                    <a target="_blank" title="Imprimir Cupom Não Fiscal" class="button btn btn-mini btn-inverse" href="<?php echo site_url() ?>vendas/imprimirTermica/<?php echo $result->id_comercial_venda; ?>">
                        <span class="button__icon"><i class="bx bx-printer"></i></span> <span class="button__text">CP Não Fiscal</span></a>
                    <a href="#modal-gerar-pagamento" id="btn-forma-pagamento" role="button" data-toggle="modal" class="button btn btn-mini btn-info">
                        <span class="button__icon"><i class='bx bx-qr'></i></span><span class="button__text">Gerar Pagamento</span></a></i>
                </div>
            </div>
            <div class="widget-content" id="printOs">
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
                                        <td> <span style="font-size: 20px; ">
                                                <?php echo $emitente->nome; ?></span> </br><span>
                                                <?php echo $emitente->cnpj; ?> </br>
                                                <?php echo $emitente->ruaEmitente . ', nº:' . $emitente->numeroEmitente . ', ' . $emitente->bairroEmitente . ' - ' . $emitente->cidadeEmitente . ' - ' . $emitente->ufEmitente; ?> </span> </br> <span> E-mail:
                                                <?php echo $emitente->emailEmitente . ' - Fone: ' . $emitente->telefoneEmitente; ?></span></td>
                                        <td style="width: 18%; text-align: center">Venda: <span>
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
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span>
                                                    <h5>Cliente</h5>
                                                    <span>
                                                        <?php echo $result->nomeCliente ?></span><br />
                                                    <span>
                                                        <?php echo $result->rua ?>,
                                                        <?php echo $result->numero ?>,
                                                        <?php echo $result->bairro ?></span><br />
                                                    <span>
                                                        <?php echo $result->cidade ?> -
                                                        <?php echo $result->estado ?><br />
                                                        <span>Email:
                                                            <?php echo $result->email ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td style="width: 50%; padding-left: 0">
                                        <ul>
                                            <li>
                                                <span>
                                                    <h5>Vendedor</h5>
                                                </span>
                                                <span>
                                                    <?php echo $funcionario->nome ?></span> <br />
                                                <span>Telefone:
                                                    <?php echo $funcionario->telefone ?></span><br />
                                                <span>Email:
                                                    <?php echo $funcionario->email ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 0; padding-top: 0">
                        <?php if ($produtos != null) { ?>
                            <table class="table table-bordered table-condensed" id="tblProdutos">
                                <thead>
                                    <tr>
                                        <th style="font-size: 15px">Cód. de barra</th>
                                        <th style="font-size: 15px">Produto </th>
                                        <th style="font-size: 15px">Quantidade</th>
                                        <th style="font-size: 15px">Preço unit.</th>
                                        <th style="font-size: 15px">Sub-total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produtos as $p) {
                                        $totalProdutos = $totalProdutos + $p->subTotal;
                                        $preco = ($p->preco ?: $p->precoVenda);
                                        echo '<tr>';
                                        echo '<td>' . $p->codDeBarra . '</td>';
                                        echo '<td>' . $p->produtoDescricao . '</td>';
                                        echo '<td>' . number_format($p->quantidade, $p->casasDecimais, ',', '.').' '.$p->unidadeVenda . '</td>';
                                        echo '<td>R$' . number_format($preco, 2, ',', '.') . '</td>';
                                        echo '<td>R$ ' . number_format($p->subTotal, 2, ',', '.') . '</td>';
                                        echo '</tr>';
                                    } ?>
                                    <tr>
                                        <td colspan="4" style="text-align: right"><strong>Total:</strong></td>
                                        <td><strong>R$
                                                <?php echo number_format($totalProdutos, 2, ',', '.'); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php
                        } ?>
                        <hr />
                        <h4 style="text-align: right">Total: R$
                            <?php echo number_format($totalProdutos, 2, ',', '.'); ?>
                        </h4>
                        <?php if ($result->ajustaValor != 0 && $result->valor_ajuste != 0 && $result->ajustaValorTipo != "") {
                        ?>
                            <h4 style="text-align: right"><?php echo ucwords(strtolower($result->ajustaValorTipo)) ?>: R$
                                <?php echo number_format($result->ajustaValor, 2, ',', '.'); ?>
                            </h4>
                            <h4 style="text-align: right">Total Com <?php echo ucwords(strtolower($result->ajustaValorTipo)) ?>: R$
                                <?php echo number_format($result->valor_ajuste, 2, ',', '.'); ?>
                            </h4>
                        <?php
                        } ?>
                    </div>
                    <hr />
                    <h4 style="text-align: left">Observações:
                    </h4>
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
                    <hr />
                </div>
            </div>
        </div>

        <?= $modalGerarPagamento ?>
    </div>
</div>