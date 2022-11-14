<div class="widget-box">
    <div class="widget-title" style="margin: 0;font-size: 1.4em">
        <ul class="nav nav-pills">
            <li class="nav-item active"><a data-toggle="tab" href="#tab1" class="nav-link">Dados do Cliente</a></li>
            <li class="nav-item"><a data-toggle="tab" href="#tab2" class="nav-link">Vendas</a></li>

        </ul>
        <hr style="margin-top:5px">
    </div>
    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">
            <div class="accordion" id="collapse-group">
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span><i class='bx bx-user icon-cli' ></i></span>
                                <h5 style="padding-left: 28px">Dados Pessoais</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered" style="border: 1px solid #ddd">
                                <tbody>
                                <tr>
                                    <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                    <td>
                                        <?php echo $result->nomeCliente ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Documento</strong></td>
                                    <td>
                                        <?php echo $result->documento ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Data de Cadastro</strong></td>
                                    <td>
                                        <?php echo $dataCadastro; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Tipo do Cliente</strong></td>
                                    <td>
                                        <?php echo $result->fornecedor == true ? 'pessoa_fisica' : 'Cliente'; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                <span><i class='bx bx-phone icon-cli'></i></span>
                                <h5 style="padding-left: 28px">Contatos</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGTwo">
                        <div class="widget-content">
                            <table class="table table-bordered" style="border: 1px solid #ddd">
                                <tbody>
                                <tr>
                                    <td style="text-align: right; width: 30%"><strong>Contato:</strong></td>
                                    <td>
                                        <?php echo $result->contato ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right; width: 30%"><strong>Telefone</strong></td>
                                    <td>
                                        <?php echo $result->telefone ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Celular</strong></td>
                                    <td>
                                        <?php echo $result->celular ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Email</strong></td>
                                    <td>
                                        <?php echo $result->email ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                <span><i class='bx bx-map-alt icon-cli' ></i></span>
                                <h5 style="padding-left: 28px">Endereço</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGThree">
                        <div class="widget-content">
                            <table class="table table-bordered th" style="border: 1px solid #ddd;border-left: 1px solid #ddd">
                                <tbody>
                                <tr>
                                    <td style="text-align: right; width: 30%;"><strong>Rua</strong></td>
                                    <td>
                                        <?php echo $result->rua ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Número</strong></td>
                                    <td>
                                        <?php echo $result->numero ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Complemento</strong></td>
                                    <td>
                                        <?php echo $result->complemento ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Bairro</strong></td>
                                    <td>
                                        <?php echo $result->bairro ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>Cidade</strong></td>
                                    <td>
                                        <?php echo $result->cidade ?> -
                                        <?php echo $result->estado ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right"><strong>CEP</strong></td>
                                    <td>
                                        <?php echo $result->cep ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Tab 2-->
        <div id="tab2" class="tab-pane" style="min-height: 300px">
            <?php if (!$results) { ?>
                <table class="table table-bordered ">
                    <thead>
                    <tr style="background-color: #dddddd70">
                        <th style="width: 5%;">N° Venda</th>
                        <th style="width: 14%;">Data Inicial</th>
                        <th>Data Final</th>
                        <th>Valor</th>
                        <th>Obs</th>
                        <th style="width: 10%;">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="6">Nenhuma Venda Cadastrada</td>
                    </tr>
                    </tbody>
                </table>
                <?php
            } else { ?>
                <table class="table table-bordered ">
                    <thead>
                    <tr style="background-color:  #dddddd70">
                        <th style="width: 5%;">N° Venda</th>
                        <th style="width: 14%;">Data Venda</th>
                        <th>Valor Total</th>
                        <th>Obs</th>
                        <th>Info. para cliente</th>
                        <th style="width: 10%;">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($results as $r) {
                      
                        echo '<tr>';
                        echo '<td>' . $r->id_comercial_venda . '</td>';
                        echo '<td>' . $dataVenda . '</td>';
                        echo '<td>R$' . $r->valorTotal . '</td>';
                        echo '<td>' . $r->observacoes . '</td>';
                        echo '<td>' . $r->observacoes_cliente . '</td>';

                        echo '<td>';
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
                            echo '<a href="' . base_url() . 'index.php/vendas/visualizar/' . $r->id_comercial_venda . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="fas fa-eye"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
                            echo '<a href="' . base_url() . 'index.php/vendas/editar/' . $r->id_comercial_venda . '" class="btn btn-info tip-top" title="Editar OS"><i class="fas fa-edit"></i></a>';
                        }

                        echo  '</td>';
                        echo '</tr>';
                    } ?>
                    <tr>
                    </tr>
                    </tbody>
                </table>
                <?php
            } ?>
        </div>
    </div>
    <div class="modal-footer" style="display:flex;justify-content: center">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                echo '<a title="Editar cliente" class="button btn btn-mini btn-info" style="min-width: 140px; top:10px" href="' . base_url() . 'index.php/clientes/editar/' . $result->id_comercial_cliente . '">
<span class="button__icon"><i class="bx bx-edit"></i></span> <span class="button__text2"> Editar</span></a>';
            } ?>
        <a title="Voltar" class="button btn btn-mini btn-warning" style="min-width: 140px; top:10px" href="<?php echo site_url() ?>/clientes">
          <span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
    </div>
</div>
