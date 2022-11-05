<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
<style>
    #imgSenha {
        width: 18px;
        cursor: pointer;
    }

    /* Hiding the checkbox, but allowing it to be focused */
    .badgebox {
        opacity: 0;
    }

    .badgebox+.badge {
        /* Move the check mark away when unchecked */
        text-indent: -999999px;
        /* Makes the badge's width stay the same checked and unchecked */
        width: 27px;
    }

    .badgebox:focus+.badge {
        /* Set something to make the badge looks focused */
        /* This really depends on the application, in my case it was: */
        /* Adding a light border */
        box-shadow: inset 0px 0px 5px;
        /* Taking the difference out of the padding */
    }

    .badgebox:checked+.badge {
        /* Move the check mark back when checked */
        text-indent: 0;
    }

    .control-group.error .help-inline {
        display: flex;
    }

    .form-horizontal .control-group {
        border-bottom: 1px solid #ffffff;
    }

    .form-horizontal .controls {
        margin-left: 20px;
        padding-bottom: 8px 0;
    }

    .form-horizontal .control-label {
        text-align: left;
        padding-top: 15px;
    }

    .nopadding {
        padding: 0 20px !important;
        margin-right: 20px;
    }

    .widget-title h5 {
        padding-bottom: 30px;
        text-align-last: left;
        font-size: 2em;
        font-weight: 500;
    }

    @media (max-width: 480px) {
        form {
            display: block !important;
        }

        .form-horizontal .control-label {
            margin-bottom: -6px;
        }

        .btn-xs {
            position: initial !important;
        }
    }
</style>
<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-user"></i>
                </span>
                <h5>Editar Cliente</h5>
            </div>
            <?php if ($custom_error != '') {
                echo '<div class="alert alert-danger">' . $custom_error . '</div>';
            } ?>
            <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal">
                <div class="widget-content nopadding tab-content">
                    <div class="span6">
                        <div class="control-group">
                            <label for="documento" class="control-label">CPF/CNPJ</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="documento" class="cpfcnpj" type="text" name="documento" value="<?php echo $result->documento; ?>" />
                                <button id="buscar_info_cnpj" class="btn btn-xs" type="button">Buscar(CNPJ)</button>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo form_hidden('id_comercial_cliente', $result->id_comercial_cliente) ?>
                            <label for="nomeCliente" class="control-label">Nome/Razão Social<span class="required">*</span></label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="nomeCliente" type="text" name="nomeCliente" value="<?php echo $result->nomeCliente; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="apelido" class="control-label">Apelido/Nome Fantasia<span class="required">*</span></label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="apelido" type="text" name="apelido" value="<?php echo $result->nomeCliente; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="contato" class="control-label">Contato:</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' class="contato" type="text" name="contato" value="<?php echo $result->contato; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="telefone" class="control-label">Telefone</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="telefone" type="text" name="telefone" value="<?php echo $result->telefone; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="celular" class="control-label">Celular</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="celular" type="text" name="celular" value="<?php echo $result->celular; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email" class="control-label">Email</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="email" type="text" name="email" value="<?php echo $result->email; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="senha" class="control-label">Senha</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="senha" type="password" name="senha" value="" placeholder="Não preencha se não quiser alterar." />
                                <img id="imgSenha" src="<?php echo base_url() ?>assets/img/eye-off.svg" alt="">
                            </div>
                        </div>
                        
                    </div>

                    <div class="span6">
                        <div class="control-group" class="control-label">
                            <label for="cep" class="control-label">CEP</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="cep" type="text" name="cep" value="<?php echo $result->cep; ?>" />
                            </div>
                        </div>
                        <div class="control-group" class="control-label">
                            <label for="rua" class="control-label">Rua</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="rua" type="text" name="rua" value="<?php echo $result->rua; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="numero" class="control-label">Número</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="numero" type="text" name="numero" value="<?php echo $result->numero; ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="complemento" class="control-label">Complemento</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="complemento" type="text" name="complemento" value="<?php echo $result->complemento; ?>" />
                            </div>
                        </div>
                        <div class="control-group" class="control-label">
                            <label for="bairro" class="control-label">Bairro</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="bairro" type="text" name="bairro" value="<?php echo $result->bairro; ?>" />
                            </div>
                        </div>
                        <div class="control-group" class="control-label">
                            <label for="cidade" class="control-label">Cidade</label>
                            <div class="controls">
                                <input onkeydown='handleEnter(event)' id="cidade" type="text" name="cidade" value="<?php echo $result->cidade; ?>" />
                            </div>
                        </div>
                        <div class="control-group" class="control-label">
                            <label for="estado" class="control-label">Estado</label>
                            <div class="controls">
                                <select onkeydown='handleEnter(event)'  id="estado" name="estado" class="">
                                    <option value="">Selecione...</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Tipo de Cliente</label>
                            <div class="controls">
                                <label for="fornecedor" class="btn btn-default">Fornecedor
                                    <input onkeydown='handleEnter(event)' type="checkbox" id="fornecedor" name="fornecedor" class="badgebox" value="1" <?= ($result->fornecedor == 1) ? 'checked' : '' ?>>
                                    <span class="badge">&check;</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="span12">
                        <div class="span6 offset3" style="display:flex;justify-content: center">
                            <button type="submit" class="button btn btn-primary" style="max-width: 160px">
                                <span class="button__icon"><i class="bx bx-sync"></i></span><span class="button__text2">Atualizar</span></button>
                            <a title="Voltar" class="button btn btn-warning" href="<?php echo site_url() ?>/clientes"><span class="button__icon"><i class="bx bx-undo"></i></span> <span class="button__text2">Voltar</span></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">

    function handleEnter(event) {
        if (event.key === "Enter") {
            const form = document.getElementById('formCliente')
            const index = [...form].indexOf(event.target);
            form.elements[index + 1].focus();
           // event.preventDefault();
        }
    }

    $(document).ready(function() {
        let container = document.querySelector('div');
        let input = document.querySelector('#senha');
        let icon = document.querySelector('#imgSenha');

        icon.addEventListener('click', function() {
            container.classList.toggle('visible');
            if (container.classList.contains('visible')) {
                icon.src = '<?php echo base_url() ?>assets/img/eye.svg';
                input.type = 'text';
            } else {
                icon.src = '<?php echo base_url() ?>assets/img/eye-off.svg'
                input.type = 'password';
            }
        });

        $.getJSON('<?php echo base_url() ?>assets/json/estados.json', function(data) {
            for (i in data.estados) {
                $('#estado').append(new Option(data.estados[i].nome, data.estados[i].sigla));
                var curState = '<?php echo $result->estado; ?>';
                if (curState) {
                    $("#estado option[value=" + curState + "]").prop("selected", true);
                }
            }
        });
        $('#formCliente').validate({
            rules: {
                nomeCliente: {
                    required: true
                },
            },
            messages: {
                nomeCliente: {
                    required: 'Campo Requerido.'
                },
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>