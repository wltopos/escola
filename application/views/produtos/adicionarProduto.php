<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/controllers/adcionarProduto.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/auth/login.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <h5>Cadastro de Produto</h5>
            </div>
            <div id="imageLogo"> </div>
            <form action="<?php echo current_url(); ?>" id="formProduto" method="post" enctype='multipart/form-data' class="form-horizontal">
                <div class="drop-zone">
                    <span class="drop-zone__prompt">Arraste o arquivo ou clique para upload</span>
                    <input type="file" name="userfile" class="drop-zone__input">
                </div>
                <div class="widget-content nopadding tab-content" style="margin-bottom: 2%;">
                    <div class="span6">
                        <?php echo $custom_error; ?>
                        <input onkeydown='handleEnter(event)' type="hidden" id="adNotaFiscal_id" name="adNotaFiscal_id" value="" />
                        <input onkeydown='handleEnter(event)' type="hidden" id="produto_id" name="codDeBarra" value="" />
                        <input onkeydown='handleEnter(event)' type="hidden" id="imagemProduto" name="imagemProduto" value="" />

                        <div class="control-group">

                            <div class="control-group">
                                <label for="codDeBarra" class="control-label">Código<span class="required">*</span></label>
                                <div class="controls">
                                    <input required onkeydown='handleEnter(event)' autocomplete="off" name="codigo" id="codDeBarra" type="text" value="<?php echo set_value('codDeBarra'); ?>" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="adNotaFiscal" class="control-label">Nota Fiscal<span class="required">*</span></label>
                                <div class="controls">
                                    <input required onkeydown='handleEnter(event)' type="text" autocomplete="off" id="adNotaFiscal" name="adNotaFiscal" value="<?php echo set_value('adNotaFiscal'); ?>" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="selectMarca" class="control-label">Marca<span class="required">*</span></label>
                                <div class="controls">
                                    <select required onkeydown='handleEnter(event)' id="selectMarca" name="marca" value="<?php echo set_value('marca'); ?>">

                                        <?php if (!$resultMarca) {
                                            echo '<option disabled selected>Sem marcas cadastradas</option>';
                                        } else {
                                            echo '<option value="" disabled selected>Selecione uma marca</option>';
                                            foreach ($resultMarca as $rmc) {
                                                echo "<option value=$rmc->id_estoque_marca >$rmc->marca</option>";
                                            }
                                        }


                                        ?>
                                    </select>


                                </div>
                            </div>
                            <div class="control-group">
                                <label for="tipoMarca" class="control-label">Produto<span class="required">*</span></label>
                                <div class="controls">
                                    <select required onkeydown='handleEnter(event)' name="complemento" id="tipoMarca" value="<?php echo set_value('complemento'); ?>">

                                        <?php if (!$resultTipo) {
                                            echo '<option disabled selected>Sem itens cadastrados</option>';
                                        } else {
                                            echo '<option value="" disabled selected>Selecione um item</option>';

                                            foreach ($resultTipo as $rt) {
                                                echo "<option value=$rt->id_estoque_tipo_produto >$rt->tipo_produto</option>";
                                            }
                                        }


                                        ?>
                                    </select>


                                </div>
                            </div>

                        </div>
                        <div class="control-group">
                            <label for="descricao" class="control-label">Descrição<span class="required">*</span></label>
                            <div class="controls">
                                <input required onkeydown='handleEnter(event)' id="descricao" type="text" name="descricao" value="<?php echo set_value('descricao'); ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="precoCompra" class="control-label">Preço de Compra(R$)<span class="required">*</span></label>
                            <div class="controls">
                                <input required onkeydown='handleEnter(event)' style="width: 5em;" id="precoCompra" class="money" data-affixes-stay="true" data-thousands="" data-decimal="." type="text" name="precoCompra" value="<?php echo set_value('precoCompra'); ?>" />
                                Margem (%) <input required onkeydown='handleEnter(event)' style="width: 3em;" id="margemLucro" name="margemLucro" value="<?php echo set_value('margemLucro'); ?>" type="text" placeholder="%" maxlength="3" size="2" />
                                <strong><span style="color: red" id="errorAlert"></span></strong>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="precoVenda" class="control-label">Preço de Venda<span class="required">*</span></label>
                            <div class="controls">
                                <input required onkeydown='handleEnter(event)' id="precoVenda" class="money" data-affixes-stay="true" data-thousands="" data-decimal="." type="text" name="precoVenda" value="<?php echo set_value('precoVenda'); ?>" readonly />
                                <a class="btn btn-primary" onclick="calcPrecoVenda()" id="calcular" role="button">Calcular</a>
                            </div>
                        </div>

                    </div>

                    <div class="span6">



                        <div class="control-group">
                            <label for="estoque" class="control-label">Estoque<span class="required">*</span></label>
                            <div class="controls">
                                <input required onkeydown='handleEnter(event)' style="width: 5em;" id="estoque" type="number" name="estoque" value="<?php echo set_value('estoque'); ?>" />
                                <select required onkeydown='handleEnter(event)' class="wh30" id="unidade" name="unidade">

                                    <?php if (!$resultMedida) {
                                        echo '<option disabled selected>Sem madidas cadastradas</option>';
                                    } else {
                                        echo '<option value="" disabled selected>Medida</option>';
                                        foreach ($resultMedida as $r) {
                                            if ($r->statusMedida == 1) {
                                                echo "<option value=$r->id_estoque_medida >$r->medida $r->multiplicador $r->siglaMedidaSistema </option>";
                                            } else if ($r->statusMedida == 2) {
                                                echo "<option value=$r->id_estoque_medida >$r->medida </option>";
                                            }
                                        }
                                    }


                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="estoqueMinimo" class="control-label">Estoque Mínimo</label>
                            <div class="controls">
                                <input required onkeydown='handleEnter(event)' style="width: 5em;" id="estoqueMinimo" type="number" name="estoqueMinimo" value="<?php echo set_value('estoqueMinimo'); ?>" />
                                <select required onkeydown='handleEnter(event)' class="wh30" title="locations" name="location" id="locations" value="<?php echo set_value('location'); ?>">

                                    <?php if (!$resultLocations) {
                                        echo '<option disabled selected>Sem Localizações</option>';
                                    } else {
                                        echo '<option value="" disabled selected>Localização</option>';
                                        foreach ($resultLocations as $r) {
                                            echo "<option value=$r->id_estoque_location >$r->location</option>";
                                        }
                                    }


                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="divAddCampo">
                            <label for="addCampo" class="control-label">Adicionar campo<span class="required">*</span></label>
                            <div class="controls">

                                <select required onkeydown='handleEnter(event)' onchange="btAddCampo()" title="Adicionar campo" name="addCampo" id="addCampo" value="<?php echo set_value('addCampo'); ?>">

                                    <?php if (!$resultAddCampo) {
                                        echo '<option disabled selected>Sem tipos cadastrados</option>';
                                    } else {
                                        echo  '<option value="0" disabled selected>Tipo de observação</option>';
                                        foreach ($resultAddCampo as $r) {
                                            if (isset($r->addCampo)) {
                                                echo "<option value=$r->id_estoque_addCampo > $r->addCampo</option>";
                                            } else {
                                                echo '<option disabled selected>Sem tipos cadastrados</option>';
                                            }
                                        }
                                    }


                                    ?>
                                </select>
                                <button title="adicionar campo" class="btn btn-light" type="button" id="add-campo" style="margin-left: 5px;"><i class="fa fa-plus"></i></button>

                            </div>

                        </div>

                        <!--  <div class="control-group">
                        <label class="control-label">Tipo de Movimento</label>
                        <div class="controls">
                            <label for="entrada" class="btn btn-default" style="margin-top: 5px;">Entrada
                                <input required  onkeydown='handleEnter(event)' type="checkbox" id="entrada" name="entrada" class="badgebox" value="1" checked>
                                <span class="badge">&check;</span>
                            </label>
                            <label for="saida" class="btn btn-default" style="margin-top: 5px;">Saída
                                <input required  onkeydown='handleEnter(event)' type="checkbox" id="saida" name="saida" class="badgebox" value="1" checked>
                                <span class="badge">&check;</span>
                            </label>
                        </div>
                    </div> -->

                        <div class="control-group">
                            <label for="dataVencimento" class="control-label">Data de Vencimento</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="dataVencimento" type="date" name="dataVencimento" value="<?php echo set_value('dataVencimento'); ?>" readonly />
                                <input onkeydown='handleEnter(event)' id="ativaVencimento" type="checkbox">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-actions">
                    <div class="span12">
                        <div class="span6 offset3" style="display: flex;justify-content: center">
                            <button type="submit" class="button btn btn-mini btn-success" style="max-width: 160px"><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2" id="adcionarProduto">Adicionar</span></button>
                            <button type="submit" id="editarProduto" class="button btn btn-mini btn-info" style="max-width: 160px; display: none;" disabled><span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Editar</span></button>
                            <a href="<?php echo base_url() ?>index.php/produtos" id="voltar" class="button btn btn-mini btn-warning"><span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="<?php echo base_url() ?>assets/js/controllers/imagemDragAndDrop.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script src="<?php echo base_url(); ?>assets/js/controllers/margemLucro.js"></script>
<script type="text/javascript">
    function handleEnter(event) {
        if (event.key === "Enter") {
            const form = document.getElementById('formProduto')
            const index = [...form].indexOf(event.target);
            form.elements[index + 1].focus();
            // event.preventDefault();
        }
    }

    $(document).ready(function() {
        //verificador preenchimento do preço e margem de lucro

        $('#ativaVencimento').click(function() {
            if ($('#ativaVencimento').is(":checked")) {
                $("#dataVencimento").attr("readonly", false);
            } else if ($('#ativaVencimento').is(":not(:checked)")) {
                $("#dataVencimento").attr("readonly", true);
            }
        });

        //Select com buscador
        $("#locations").select2();
        $('#marcasAgrotec').select2();
        $('#unidade').select2();
        //validação de campos
        $(".money").maskMoney();

        //auto complete produto

        $("#adNotaFiscal").autocomplete({
            source: "<?php echo base_url(); ?>index.php/AutoComplete/autoCompleteNotaFiscal",
            async: true,
            minLength: 1,

            select: function(event, ui) {
                if (ui.item.label == 'Adicionar nota fiscal...')
                    $('.addclient').show();
                else {
                    $("#adNotaFiscal_id").val(ui.item.id);

                    $('.addclient').hide();
                }
            }
        });

        const barCode = document.getElementById("codDeBarra");
        const myInput = document.querySelector("#descricao");
        const imgLogo = document.querySelector("#imageLogo");
        const image_x = document.getElementById('imgLogo');
        const marcas = document.getElementById('marcasAgrotec');
        const image = document.createElement("img");
        //  const camposDB = <?= json_encode($resultAddCampo) ?>;

        $("#codDeBarra").autocomplete({
            source: "<?php echo base_url(); ?>AutoComplete/autoCompleteProduto",
            minLength: 1,
            response: function(event, ui) {
                $("#editarProduto").hide();
                $('#adcionarProduto').text('Adicionar');
                $('#codDeBarra').css("background-color", "#d5d19d");
                $('#codDeBarra').css("font-weight", 700);

                // ui.content is the array that's about to be sent to the response callback.
                if (ui.content.length === 0) {
                    buscaProdutos();
                }

            },
            select: function(event, ui) {
                $('#codDeBarra').css("background-color", "#9dc2d5");
                $('#codDeBarra').css("font-weight", 700);
                $('#imgLogo').remove();
                $('.addCampo').remove();
                if (ui.item.id != null) {
                    $("#editarProduto").show();
                    $('#adcionarProduto').text('Duplicar');
                    $("#adNotaFiscal").val(ui.item.notaFiscal);
                    $("#adNotaFiscal_id").val(ui.item.id_financeiro_nota);
                    $("#produto_id").val(ui.item.codDeBarra);
                    $("#selectMarca").val(ui.item.marca_id);
                    $("#tipoMarca").val(ui.item.idTipo);
                    $("#descricao").val(ui.item.descricao);
                    $("#estoque").val(parseInt(ui.item.estoque / ui.item.multiplicador));
                    $("#estoqueMinimo").val(parseInt(ui.item.estoqueMinimo / ui.item.multiplicador));
                    $("#unidade").val(ui.item.idMedida).change();
                    $("#locations").val(ui.item.location).change();
                    $("#precoCompra").val(ui.item.precoCompra);
                    $("#precoVenda").val(ui.item.precoVenda);
                    $("#margemLucro").val(ui.item.margem);
                    if (ui.item.dataVencimento != null) {
                        $("#ativaVencimento").prop("checked", true);
                        $("#dataVencimento").val(ui.item.dataVencimento);
                    }

                    if (ui.item.imagemProduto != null) {

                        image.src = ui.item.imagemProduto;
                        imgLogo.appendChild(image).setAttribute("id", "imgLogo");
                        $('#imagemProduto').val(ui.item.imagemProduto);
                    }

                    if ($('#dataVencimento').val() != '') {
                        $("#dataVencimento").attr("readonly", false);
                        $('#ativaVencimento')[0].checked = true;
                    } else {
                        $("#dataVencimento").attr("readonly", true);
                        $('#ativaVencimento')[0].checked = false;
                    }

                    $.ajax({
                        url: "<?= site_url('produtos/returnAddCampos'); ?>",
                        dataType: 'json',
                        success: function(data) {

                            let camposDB = data;
                            let dadosCampos = ui.item.observacao.split('||');
                            let i = 0;
                            dadosCampos.forEach((dadosCampo) => {
                                dadosCampo = dadosCampo.split('::');
                                i++;
                                camposDB.forEach((campo) => {
                                    if (campo.id_estoque_addCampo == dadosCampo[0]) {
                                        $('#divAddCampo').append(`<div id='rm_${campo.siglaAddCampo}_${i}' class='control-group addCampo'><label for='${campo.siglaAddCampo}_${i}' class='control-label'><?= isset($r->addCampo) ? $r->addCampo : ''; ?><span class='required'>*</span></label><div class='controls'><input required  onkeydown='handleEnter(event)' type='text'  id='${campo.siglaAddCampo}_${i}' name='addCampoInput[${campo.id_estoque_addCampo}_${i}]' value='${dadosCampo[1]} ' />   <button title="remove campo" class="btn btn-danger" type="button"  onclick="removeCampo('#rm_${campo.siglaAddCampo}_${i}')" style="margin-left: 5px;"><i class="fa fa-minus"></i></button> </div> </div>`);
                                    }
                                });

                            });
                        }
                    });

                } else if (ui.item.idTipo != null) {
                    $("#produto_id").val(ui.item.modelo);
                    $("#selectSetor").val(ui.item.idSetor);
                    $("#selectCategoria").val(ui.item.idCategoria);
                    $("#selectMarca").val(ui.item.marca);
                    $("#tipoMarca").val(ui.item.idTipo);
                    $("#editarProduto").hide();
                }

            }
        });

        function buscaProdutos() {
            let v;
            v = barCode.value;
            $('#imgLogo').remove();

            $.ajax({
                url: '<?= site_url('/produtos/consultaProduto/') ?>' + v,
                success: function(data) {
                    if (data != null && data != 0) {
                        $('#produto_id').val(v);
                        $('.addCampo').remove();

                        let dados = JSON.parse(data);
                        let json = dados;
                        let logo = '';
                        
                        $("#imagemProduto").val(logo);
                     //   updateThumbnail(logo);
                     

                        if (json.description) {
                            $('#descricao').val(dados.description);
                        }

                        try {
                            if (!json.thumbnail) {
                                throw 'erro 1: tumbnail não encontrada'
                            }

                            //image.src = json.thumbnail;
                            //imgLogo.appendChild(image).setAttribute("id", "imgLogo");
                            $('#imagemProduto').val(json.thumbnail);
                            updateThumb(json.thumbnail);

                        } catch (e) {

                            try {

                                var logoLink = json.brand.picture.split('/');

                                if (!logoLink[0]) {
                                    throw 'erro 2: picture não encontrada'
                                }

                                //image.src = (logoLink[0] == 'https:') ? json.brand.picture : 'https://api.cosmos.bluesoft.com.br/' + json.brand.picture;
                               // imgLogo.appendChild(image).setAttribute("id", "imgLogo");
                                 $('#imagemProduto').val((logoLink[0] == 'https:') ? json.brand.picture : 'https://api.cosmos.bluesoft.com.br/' + json.brand.picture);
                                updateThumb((logoLink[0] == 'https:') ? json.brand.picture : 'https://api.cosmos.bluesoft.com.br/' + json.brand.picture);


                            } catch (err) {
                                //image.src = 'https://sistema.wltopos.com/assets/img/sem_logo.png';
                               // imgLogo.appendChild(image).setAttribute("id", "imgLogo");
                               $('#imagemProduto').val('https://sistema.wltopos.com/assets/img/sem_logo.png');
                                updateThumb('https://sistema.wltopos.com/assets/img/sem_logo.png');
                            }
                        }

                        $('#codDeBarra').css("background-color", "#b8fdda");
                        $('#codDeBarra').css("font-weight", 700);

                        /* $('#description').val(json.description);
                         $('#marca').append(json.brand.name);
                         $('#avg_price').append(json.avg_price);
                         $('#updated_at').append(json.updated_at);
                         $('#barcode_image').attr('src', json.barcode_image);
                         $('#img').attr('src', logo);*/

                    } else {
                        $('#codDeBarra').css("background-color", "#f1a3a3");
                        $('#codDeBarra').css("font-weight", 700);
                        $('#produto_id').val(barCode.value);
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#codDeBarra').css("background-color", "#f1a3a3");
                    $('#codDeBarra').css("font-weight", 700);
                    $('#produto_id').val(barCode.value);
                }
            });

        }
    })


    function updateThumb(file) {
   
        $(".drop-zone__thumb").remove();
        $(".drop-zone__prompt").remove();
       
        if($(".drop-zone__thumb") && typeof file == "string"){
        
           $('.drop-zone').append(`<div class="drop-zone__thumb" data-label="${file}" style="background-position: center; background-image: url(${file}); background-color: white;"></div>`);
        }else{           
            
        $('.drop-zone').append('<span class="drop-zone__prompt">Arraste o arquivo ou clique para upload</span>');
          console.log("Remove imagem");
        }

    }


    // ===========================================================
    // SCRIPT BOTÃO ADICIONAR CAMPO
    // ===========================================================
    let i = 0;
    $('#add-campo').click(function() {

        {
            i++;
            let campo = $('#addCampo option:selected').text();
            let idCampo = $('#addCampo option:selected').val();

            if (idCampo != "0" && i < 5) {

                $('#divAddCampo').append(`<div id="rm_${idCampo}_${i}" class='control-group'><label for='${idCampo}' class='control-label'>${campo}<span class='required'>*</span></label><div class='controls'><input required  onkeydown='handleEnter(event)' type='text'  id='${idCampo}' name='addCampoInput[${idCampo}_${i}]' value='' />   <button title="remove campo" class="btn btn-danger" type="button"  onclick="removeCampo('#rm_${idCampo}_${i}')" style="margin-left: 5px;"><i class="fa fa-minus"></i></button> </div> </div>`);

            }
        }
    });


    function btAddCampo() {
        let opt = $('#addCampo option:selected').val();

        if (opt != "0") {
            $('#add-campo').attr('class', 'btn btn-primary');
        }
    }

    function removeCampo(campo) {
        $(campo).remove();
    }
</script>