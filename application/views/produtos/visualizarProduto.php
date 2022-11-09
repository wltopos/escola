<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/controllers/visualizarProdutos.css" />

<div class="widget-box">

    <div class="widget-content tab-content">
        <div id="tab1" class="tab-pane active" style="min-height: 300px">
            <div class="accordion" id="collapse-group">
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                <span><i class='bx bx-user icon-cli'></i></span>
                                <h5 style="padding-left: 28px">Descrição</h5>
                            </a>
                        </div>
                        <?php if($result->imagemProduto != NULL and $result->imagemProduto != ''):?>
                            <div class="drop-zone"> 
                                 <input type="file" name="myFile" class="drop-zone__input">
                                  <div class="drop-zone__thumb" data-label="<?= "Imagem do produto"?>"> 
                                  <img src="<?= $result->imagemProduto?>" >
                                </div>
                            </div>
                   
                   <?php elseif($result->urlLogoMarca != NULL and $result->urlLogoMarca != ''):?>
                        
                    <div class="drop-zone"> 
                         <input type="file" name="myFile" class="drop-zone__input"> 
                         <div class="drop-zone__thumb" data-label="<?= "Imagem da logomarca" ?>" >
                          <img src="<?= $result->urlLogoMarca?>">
                        </div>
                    </div>
                   
                    <?else:?>
                        <div class="drop-zone"> 
                         <input type="file" name="myFile" class="drop-zone__input"> 
                         <div class="drop-zone__thumb" data-label="<?= "Sem imagem" ?>" >
                         <img src="https://sistema.wltopos.com/assets/img/sem_logo.png">
                        </div>
                    </div>
                   
                    
                    <?endif?>
                    <div class="collapse in accordion-body" id="collapseGOne">
                        <div class="widget-content">
                            <table class="table table-bordered" style="border: 1px solid #ddd">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Codigo</strong></td>
                                        <td>
                                            <?php echo $result->codDeBarra ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Produto</strong></td>
                                        <td>
                                            <?php echo $result->tipo_produto ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Descrição</strong></td>
                                        <td>
                                            <?php echo $result->produtoDescricao ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Marca</strong></td>
                                        <td>
                                            <?php echo $result->marca ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Setor</strong></td>
                                        <td>
                                            <?php echo $result->sector ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Categoria</strong></td>
                                        <td>
                                            <?php echo $result->categoria ?>
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
                                <h5 style="padding-left: 28px">Estoque</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGTwo">
                        <div class="widget-content">
                            <table class="table table-bordered" style="border: 1px solid #ddd">
                                <tbody id="divAddCampo">
                                <tr>
                                        <td style="text-align: right"><strong>Ambiente de estoque</strong></td>
                                        <td>
                                            <?php echo $result->ambiente ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Localização</strong></td>
                                        <td>
                                            <?php echo $result->location ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Descrição de localização</strong></td>
                                        <td>
                                            <?php echo $result->descricaoLocation ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Estoque atual</strong></td>
                                        <td>
                                            <?php echo $estoque['texto'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Estoque minimo</strong></td>
                                        <td>
                                            <?php echo $estoque['textoEstoqueMinimo'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Descrição de medida padrão</strong></td>
                                        <td>
                                            <?php echo $result->descricaoMedida ?>
                                        </td>
                                    </tr>
                                    <?php

                                    $resultCampos = explode("||", $result->observacao);

                                    $i = 0;
                                    foreach ($resultCampos as $rCampo) {
                                        $i++;

                                        $var3 = explode('::', $rCampo);
                                        $idCampo = trim($var3[0]);

                                        foreach ($resultAddCampo as $r) {

                                            if ($idCampo != '' && $r->id_estoque_addCampo == $idCampo) {

                                    ?>

                                                <script>
                                                    $('#divAddCampo').append(`<tr> <td style="text-align: right"><strong><?php echo $r->addCampo; ?></strong></td> <td> <?php echo $var3[1]; ?> </td>  </tr>`);
                                                </script>

                                    <?php
                                            }
                                        }
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-group widget-box">
                    <div class="accordion-heading">
                        <div class="widget-title">
                            <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                <span><i class='bx bx-map-alt icon-cli'></i></span>
                                <h5 style="padding-left: 28px">Preço</h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGThree">
                        <div class="widget-content">
                            <table class="table table-bordered th" style="border: 1px solid #ddd;border-left: 1px solid #ddd">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%;"><strong>Preço de compra</strong></td>
                                        <td>
                                            <?php echo "R$ $result->precoCompra" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Preço de venda</strong></td>
                                        <td>
                                            <?php echo "R$ $result->precoVenda" ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Margem de lucro</strong></td>
                                        <td>
                                            <?php echo "$result->margemLucro%" ?>
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
                            <a data-parent="#collapse-group" href="#collapseGFour" data-toggle="collapse">
                                <span><i class='bx bx-phone icon-cli'></i></span>
                                <h5 style="padding-left: 28px">Mais detalhes </h5>
                            </a>
                        </div>
                    </div>
                    <div class="collapse accordion-body" id="collapseGFour">
                        <div class="widget-content">
                            <table class="table table-bordered" style="border: 1px solid #ddd">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Numero de NF</strong></td>
                                        <td>
                                            <?php echo ($result->notaFiscal != null) ? $result->notaFiscal : 'Não informado'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Fornecedor</strong></td>
                                        <td>
                                            <?php echo ($result->nomeCliente != null) ? $result->nomeCliente : 'Não informado'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Data de cadastro</strong></td>
                                        <td>
                                            <?php echo $dateCadastro; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right; width: 30%"><strong>Data de atualização</strong></td>
                                        <td>
                                            <?php echo $dateUpdate; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Data de emissão NF</strong></td>
                                        <td>
                                            <?php echo $dateEmissao; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right"><strong>Data de vencimento</strong></td>
                                        <td>
                                            <?php echo $dateVencimento; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="modal-footer" style="display:flex;justify-content: center">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
            echo '<a title="Editar produto" class="button btn btn-mini btn-info" style="min-width: 140px; top:10px" href="' . base_url() . 'produtos/editar/' . $result->id_estoque_produto . '">
<span class="button__icon"><i class="bx bx-edit"></i></span> <span class="button__text2"> Editar</span></a>';
        } ?>
        <a title="Voltar" class="button btn btn-mini btn-warning" style="min-width: 140px; top:10px" href="<?php echo site_url() ?>/produtos">
            <span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
    </div>
</div>