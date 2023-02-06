<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uploadImage.css" />


<div class="span6" style="margin-left: 0">
    <div class="widget-box">
        <div class="widget-title" style="margin: -20px 0 0">
            <span class="icon">
                <i class="fas fa-user"></i>
            </span>
            <h5>Editar <?= ucfirst($config) ?></h5>
        </div>
        <form action="<?php echo current_url(); ?>" id="formSettings" enctype="multipart/form-data" method="post" class="form-horizontal">
            <input type="hidden" name="abreviatura" value="">
            <input type="hidden" alt="URL Logo" name="urlLogo" id="urlLogo" value="<?= $urlLogo ?>" value="">
            <div class="widget-contentMC">
                <main class="main_full">
                    <div class="container">
                        <div class="panel">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input type="file" id="upload_file" name="userfile">
                                    Selecione a Logo
                                </div>
                                <div class="processing_bar"></div>
                                <div class="success_box"></div>
                            </div>
                        </div>
                        <div class="error_msg"></div>
                        <div class="uploaded_file_view" id="uploaded_view">
                            <span class="file_remove">X</span>
                        </div>
                    </div>
                </main>
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_ls span12">
                                <strong><?= ucfirst($config) ?>:</strong>
                                <input type="text" alt="nome" name="nome" value="<?= $result->$id ?>" required>
                            </li>
                            <?php if ($id == 'medida') : ?>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Multiplicador</strong>
                                    <input type="number" alt="multiplicador" name="multiplicador" value="<?= $result->multiplicador ?>" required>
                                </li>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Medida padrão</strong>
                                    <select name="medidaSistema">
                                        <?php 
                                            foreach($medidasSistema as $medidaSistema){
                                                if($medidaSistema->id_estoque_sistema_medida == $result->estoque_sistema_medida_id){
                                                    echo  "<option value='$medidaSistema->id_estoque_sistema_medida' selected>$medidaSistema->medidaSistema</option>";
                                                }else{
                                                    echo  "<option value='$medidaSistema->id_estoque_sistema_medida'>$medidaSistema->medidaSistema</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                    
                                </li>
                            <?php endif ?>

                            <?php if ($id == 'location') : ?>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Ambiente</strong>
                                    <input type="text" alt="ambiente" name="ambiente" value="<?=$result->ambiente ?>" required>
                                </li>
                               
                            <?php endif ?>

                            <?php if ($id == 'tipo_produto') : ?>
                                
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Categoria</strong>
                                    <select name="categoria">
                                        <?php 
                                            foreach($categorias as $categoria){
                                                if($categoria->id_estoque_categoria == $result->estoque_categoria_id){
                                                    echo  "<option value='$categoria->id_estoque_categoria' selected>$categoria->categoria</option>";
                                                }else{
                                                    echo  "<option value='$categoria->id_estoque_categoria'>$categoria->categoria</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                </li>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Setor</strong>
                                    <select name="sector">
                                    <?php 
                                            foreach($setores as $setor){
                                                if($setor->id_estoque_sector == $result->estoque_sector_id){
                                                    echo  "<option value='$setor->id_estoque_sector' selected>$setor->sector</option>";
                                                }else{
                                                    echo  "<option value='$setor->id_estoque_sector'>$setor->sector</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                </li>
                            <?php endif ?>
                            <!-- <li class="bg_lg span12" style="margin-left: 0">
                                <strong>URL Logo</strong>
                                <input type="text" alt="URL Logo" name="urlLogo" id="urlLogo" value="<?= $urlLogo ?>" placeholder="http://urldaimagem" value="">
                            </li> -->
                            <li class="bg_lo span12" style="margin-left: 0">
                                <strong>Descrição </strong>
                                <textarea class="editor" rows="5" cols="60" name="descricao" placeholder="Breve descrição"><?= $descricao ?></textarea>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="form-actions">
                <div class="span12">
                    <div class="span6 offset3" style="display: flex;justify-content: center">
                        <button type="submit" class="button btn btn-mini btn-success" style="max-width: 160px"><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2" id="adcionarProduto">Editar</span></button>
                        <button type="submit" id="editarProduto" class="button btn btn-mini btn-info" style="max-width: 160px; display: none;" disabled><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Editar</span></button>
                        <a href="<?php echo base_url() ?>produtos/settings#tab<?= ucfirst($id) ?>" id="voltar" class="button btn btn-mini btn-warning"><span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>assets/js/uploadImagem.js"></script>
