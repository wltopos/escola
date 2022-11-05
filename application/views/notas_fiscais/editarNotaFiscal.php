<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
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
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-hdd"></i>
                </span>
                <h5>Cadastro de Arquivo</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formArquivo" enctype="multipart/form-data"  method="post" class="form-horizontal">
                    <input type="hidden" alt="URL Logo" name="urlLogo" id="urlLogo" value="<?= $result->url ?>" value="">
                    <input id="idNotaFiscal" type="hidden" name="idNotaFiscal" value="<?php echo $result->id_financeiro_nota; ?> " />
                    <input id="fornecedor_id" type="hidden" name="fornecedor_id" value="<?php echo $result->comercial_cliente_id; ?>" />
                   

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

                    <div class="control-group">
                        <label for="nome" class="control-label">Chave do arquivo*</label>
                        <div class="controls">
                          <label> <?php echo $file[0]; ?>  </label>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nome" class="control-label">Numero da nota*</label>
                        <div class="controls">
                            <input id="notaFiscal" type="text" name="notaFiscal" value="<?php echo $result->notaFiscal; ?> " />
                        </div>
                    </div>
                    <div class="control-group">

                        <label for="fornecedor" class="control-label">Fornecedor*</label>
                        <div class="controls">
                            <input id="fornecedor" type="text" name="fornecedor" value="<?php echo $result->nomeCliente ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <textarea rows="3" cols="30" name="descricao" id="descricao"><?php echo $result->descricao; ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="dataEmissao" class="control-label">Data de emissão</label>
                        <div class="controls">


                            <input id="dataEmissao" type="date" class="" autocomplete="FALSE" name="dataEmissao" value="<?= $result->dataEmissao != null ?  $result->dataEmissao : ""; ?>">
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" style="display:flex;justify-content: center">
                                <button type="submit" class="button btn btn-primary"><span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
                                <a href="<?php echo base_url() ?>index.php/NotasFiscais" class="button btn btn-mini btn-warning"><span class="button__icon"><i class="bx bx-undo"></i></span> <span class="button__text2">Voltar</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
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