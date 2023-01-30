<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/controllers/visualizarSettings.css" />

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
                        
                            <div class="col" id="imageLogo">
                                <img alt="logomarca" src='<?= $urlLogo ?>' id="imgLogo" class="img-responsive">
                            </div>
                    </div>
                </div>
        
        <div class="collapse in accordion-body" id="collapseGOne">
            <div class="widget-content">
                <table class="table table-bordered" style="border: 1px solid #ddd">
                    <tbody>
                    <?php if ($config == 'marca') : ?>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Marca</strong></td>
                            <td>
                                <?php echo $nome ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Descrição</strong></td>
                            <td>
                                <?php echo $descricao ?>
                            </td>
                        </tr>
                        <?php endif ?>
                    <?php if ($config == 'setor') : ?>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Setor</strong></td>
                            <td>
                                <?php echo $nome ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Descrição</strong></td>
                            <td>
                                <?php echo $descricao ?>
                            </td>
                        </tr>
                        <?php endif ?>
                    <?php if ($config == 'categoria') : ?>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Categoria</strong></td>
                            <td>
                                <?php echo $nome ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Descrição</strong></td>
                            <td>
                                <?php echo $descricao ?>
                            </td>
                        </tr>
                        <?php endif ?>
                        <?= $config ?>
                    <?php if ($config == 'local') : ?>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Localização</strong></td>
                            <td>
                                <?php echo $nome ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Ambiente</strong></td>
                            <td>
                                <?php echo $descricao ?>
                            </td>
                        </tr>
                        <?php endif ?>
                        <?php if ($config == 'medida') : ?>
                            <tr>
                                <td style="text-align: right"><strong>Multiplicador</strong></td>
                                <td>
                                    <?php echo $nome ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="text-align: right"><strong>Medida padrão</strong></td>
                                <td>
                                    <?php echo $descricao ?>
                                </td>
                            </tr>
                        <?php endif ?>
                        <?php if ($config == 'tipo_produto') : ?>
                            <tr>
                                <td style="text-align: right"><strong>Categoria</strong></td>
                                <td>
                                    <?php echo $nome ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="text-align: right"><strong>Setor</strong></td>
                                <td>
                                    <?php echo $descricao ?>
                                </td>
                            </tr>
                        <?php endif ?>
                        <?php if ($config == 'campo') : ?>
                            <tr>
                                <td style="text-align: right"><strong>Campo</strong></td>
                                <td>
                                    <?php echo $nome ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td style="text-align: right"><strong>Descrição</strong></td>
                                <td>
                                    <?php echo $descricao ?>
                                </td>
                            </tr>
                        <?php endif ?>
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
                        <h5 style="padding-left: 28px">Mais detalhes </h5>
                    </a>
                </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo">
                <div class="widget-content">
                    <table class="table table-bordered" style="border: 1px solid #ddd">
                        <tbody>

                            <tr>
                                <td style="text-align: right; width: 30%"><strong>Data de cadastro</strong></td>
                                <td>
                                    <?php echo $dataCadastro; ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right; width: 30%"><strong>Data de atualização</strong></td>
                                <td>
                                    <?php echo $dataUpdate; ?>
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
        echo '<a title="Editar produto" class="button btn btn-mini btn-info" style="min-width: 140px; top:10px" href="' . base_url() . 'settings/editar/' . $this->uri->segment(3) . '/' . $this->uri->segment(4) . '">
<span class="button__icon"><i class="bx bx-edit"></i></span> <span class="button__text2"> Editar</span></a>';
    } ?>
    <a title="Voltar" class="button btn btn-mini btn-warning" style="min-width: 140px; top:10px" href="<?php echo site_url() ?>/produtos/settings">
        <span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
</div>
</div>