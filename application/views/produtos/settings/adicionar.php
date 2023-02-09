<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uploadImage.css" />


<div class="span6" style="margin-left: 0">
    <div class="widget-box">
        <div class="widget-title" style="margin: -20px 0 0">
            <span class="icon">
                <i class="fas fa-user"></i>
            </span>
            <h5>Adicionar <?= ucfirst($config)?></h5>
        </div>
        <form action="<?php echo current_url(); ?>" id="formSettings"  enctype="multipart/form-data" method="post" class="form-horizontal">
          <input type="hidden" name="abreviatura" value="">
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
                                <strong><?= ucfirst($config) ?></strong>
                                <input type="text" alt="nome" name="nome" value="" required>
                            </li>

                            <?php if ($id == 'medida') : ?>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Multiplicador</strong>
                                    <input type="number" alt="multiplicador" name="multiplicador" value="" required>
                                </li>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Medida padrão</strong>
                                    <select name="medidaSistema">
                                        <?php 
                                        if (!$medidasSistema or $medidasSistema == '' or $medidasSistema == null) {
                                            echo '<option disabled selected>Não há medidas cadastradas</option>';
                                        }
                                            foreach($medidasSistema as $medidaSistema){
                                               
                                                    echo  "<option value='$medidaSistema->id_estoque_sistema_medida'>$medidaSistema->medidaSistema</option>";
                                                
                                            }
                                        ?>
                                    </select>
                                    
                                </li>
                            <?php endif ?>

                            <?php if ($id == 'location') : ?>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Ambiente</strong>
                                    <input type="text" alt="ambiente" name="ambiente" value="" required>
                                </li>
                               
                            <?php endif ?>

                            <?php if ($id == 'grupo') : ?>
                                
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Categoria</strong>
                                    <select name="categoria">
                                        <?php 
                                        if (!$categorias or $categorias == '' or $categorias == null) {
                                            echo '<option disabled selected>Não há categorias cadastradas</option>';
                                        }
                                            foreach($categorias as $categoria){
                                               
                                                    echo  "<option value='$categoria->id_estoque_categoria'>$categoria->categoria</option>";                                                
                                            }
                                        ?>
                                    </select>
                                </li>
                                <li class="bg_ls span12" style="margin-left: 0">
                                    <strong>Setor</strong>
                                    <select name="sector">
                                    <?php 
                                             if (!$setores or $setores == '' or $setores == null) {
                                                echo '<option disabled selected>Não há setores cadastradas</option>';
                                            }
                                            foreach($setores as $setor){
                                                
                                                    echo  "<option value='$setor->id_estoque_sector'>$setor->sector</option>";
                                            }
                                        ?>
                                    </select>
                                </li>
                            <?php endif ?>
                            <?php if ($id == 'addCampo') : ?>
                                <li id='tipoCampo' class="bg_ls span12" style="margin-left: 0">
                                    <strong>Tipo</strong>
                                    <select id='tipoCampo' name="tipoCampo">
                                    <option disabled selected>Selecione o tipo de campo</option>
                                    <option id='text' value='text'  >Texto curto</option>
                                    <option id='text2' value='text2' >Texto longo</option>
                                    <option id='number' value='number'>Numero</option>
                                    <option id='color' value='color' >Cor</option>
                                    <option id='range' value='range' >Variação</option>
                                  
                                    </select>
                                </li>
                            <?php endif ?>

                            <!-- <li class="bg_lg span12" style="margin-left: 0">
                                <strong>URL Logo:</strong>
                                <input type="text" alt="URL Logo" name="urlLogo" placeholder="http://urldaimagem" value="">
                            </li> -->
                            <li class="bg_lo span12" style="margin-left: 0">
                                <strong>Descrição </strong>
                                <textarea class="editor" rows="5" cols="60" name="descricao" placeholder="Breve descrição"></textarea>
                            </li>
                            
                        </ul>
                    </div>

                </div>
            </div>
            <div class="form-actions">
                    <div class="span12">
                        <div class="span6 offset3" style="display: flex;justify-content: center">
                            <button type="submit" class="button btn btn-mini btn-success" style="max-width: 160px"><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2" id="adcionarSetting">Adicionar</span></button>
                            <button type="submit" id="editarSetting" class="button btn btn-mini btn-info" style="max-width: 160px; display: none;" disabled><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Editar</span></button>
                            <a href="<?php echo base_url() ?>produtos/settings#tab<?= ucfirst($id) ?>" id="voltar" class="button btn btn-mini btn-warning"><span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>


<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>assets/js/uploadImagem.js"></script>
<script>
    $(document).ready(function(){
        $('#range').click(function(){
            $('tipoCampo').append('<li class="bg_ls span12" style="margin-left: 0"><strong>Parametros</strong><input type="text" name="parametros" value="" ></li>');
        });
    });
</script>