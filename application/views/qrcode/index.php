<link rel="stylesheet" href="<?= base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uploadImage.css" />
<style>
    .uploaded_file_view img {
        max-width: 45%;
    }

    .file_uploading {
        width: 87%;

    }

    .button_outer.file_uploading.file_uploaded {
        width: 8%;
    }

    .uploaded_file_view {
        margin: 10px 2px;
    }
</style>

<div class="row-fluid" style="margin-top:0">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-hdd"></i>
                </span>
                <h5>Cadastro de Notas Fiscais</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <?= $custom_error ?>

                <form action="<?= current_url() ?>" id="formNotaFiscal" enctype="multipart/form-data" method="post" class="form-horizontal">
                    <input type="hidden" value="" id="fornecedor_id" name="fornecedor_id">
                    <video id="preview"></video>

                    <div class="control-group">
                        <label for="userfile" class="control-label"><span class="required">Nota Fiscal*</span></label>
                        <div class="controls">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input type="file" id="upload_file" name="userfile">
                                    Selecione o arquivo
                                </div>
                                <div class="processing_bar"></div>
                                <div class="success_box"></div>
                            </div>
                            <div class="error_msg"></div>
                            <div class="uploaded_file_view" id="uploaded_view">
                                <span class="file_remove">X</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <label for="userfile" class="control-label"><span class="required">Nota Fiscal*</span></label>
                        <div class="controls">
                            <input id="userfile" type="file" name="userfile" /> (Arquivos suportados .xml .pdf .png .jpg)
                        </div>
                    </div> -->

                    <div class="control-group">
                        <label for="notaFiscal" class="control-label">Numero da Nota*</label>
                        <div class="controls">
                            <input id="notaFiscal" type="number" name="notaFiscal" value="<?php echo set_value('notaFiscal'); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="fornecedor" class="control-label">Fornecedor*</label>
                        <div class="controls">
                            <input id="fornecedor" type="text" name="fornecedor" value="<?php echo set_value('pessoa_fisica') ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <textarea rows="3" cols="30" name="descricao" id="descricao" value="<?php echo set_value('descricao') ?>"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="dataEmissao" class="control-label">Datade emissão</label>
                        <div class="controls">
                            <input id="data" type="hidden" name="data" value="<?php echo set_value('data') ?>">
                            <input id="dataEmissao" type="date" class="" name="dataEmissao" value="<?php echo set_value('dataEmissao') ?>" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" style="display:flex;justify-content: center">
                                <button type="submit" class="button btn btn-mini btn-success" style="max-width: 160px">
                                    <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Adicionar</span></a></button>
                                <a href="<?= base_url() ?>index.php/NotasFiscais" class="button btn btn-mini btn-warning" style="max-width: 160px">
                                    <span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>assets/js/uploadImagem.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#formNotaFiscal').validate({

            rules: {
                notaFiscal: {
                    required: true
                },
                fornecedor: {
                    required: true
                },
                userfile: {
                    required: true
                }
            },
            messages: {
                notaFiscal: {
                    required: 'Campo Requerido.'
                },
                fornecedor: {
                    required: 'Campo Requerido.'
                },
                userfile: {
                    required: 'Campo Requerido.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
                $(element).parents('.control-group').removeClass('success');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
        $(".datepicker").datepicker({
            dateFormat: 'dd/mm/yy'
        });

        $("#fornecedor").autocomplete({
            source: "<?php echo base_url(); ?>index.php/autoComplete/autoCompleteFornecedor",
            minLength: 1,
            close: function(ui) {
                if (ui.label == 'Adicionar fornecedor...') ui.target.value = '';
            },
            select: function(event, ui) {
                if (ui.item.label == 'Adicionar fornecedor...')
                    $('.addclient').show();
                else {
                    $("#fornecedor_id").val(ui.item.id);

                    $('.addclient').hide();
                }
            }
        });
    });
</script>