<div class="row-fluid" style="margin-top: 0">
    <div class="span4">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <h5>Relatórios Rápidos</h5>
            </div>
            <div class="widget-content">
                <ul style="flex-direction: row;" class="site-stats">
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/produtosRapid"><i class="fas fa-shopping-bag"></i> <small>Todos os Produtos</small></a></li>
                    <li><a target="_blank" href="<?php echo base_url() ?>index.php/relatorios/produtosRapidMin"><i class="fas fa-shopping-bag"></i> <small>Com Estoque Mínimo</small></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </span>
                <h5>Relatórios Customizáveis</h5>
            </div>
            <div class="widget-content">
                <div class="span12 well">
                    <div class="span12 alert alert-info">Deixe em branco caso não deseje utilizar o parâmetro.</div>
                    <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/produtosCustom" method="get">
                        <div class="span12 well">
                            <div class="span6">
                                <label for="">Preço de Venda de:</label>
                                <input type="text" name="precoInicial" class="span12 money" />
                            </div>
                            <div class="span6">
                                <label for="">até:</label>
                                <input type="text" name="precoFinal" class="span12 money" />
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Estoque de:</label>
                                <input type="text" name="estoqueInicial" class="span12" />
                            </div>
                            <div class="span6">
                                <label for="">até:</label>
                                <input type="text" name="estoqueFinal" class="span12" />
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Data de cadastro:</label>
                                
                               <input type="date" name="dataCadastro">
                            </div>
                            <div class="span6">
                                <label for="">Data de validade:</label>
                                
                                <input type="date" name="dataUpdate">
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Tipo de produto:</label>
                                <select name="tipoProduto" id="tipoProduto">
                                    <option value="" selected>Selecione um tipo</option>
                                    <?php if (!$resultTipo) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultTipo as $r) {
                                        echo "<option value=$r->id_estoque_tipo_produto >$r->tipo_produto</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="span6">
                                <label for="">Marca:</label>
                                <select name="marca" id="marca">
                                    <option value=""  selected>Selecione uma marca</option>
                                    <?php if (!$resultMarca) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultMarca as $r) {
                                        echo "<option value=$r->id_estoque_marca >$r->marca</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Categoria:</label>
                                
                                <select name="categoria" id="categoria" class="estoque">
                                <option value=""  selected>Selecione uma categoria</option>
                                    <?php if (!$resultCategoria) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultCategoria as $r) {
                                        echo "<option value=$r->id_estoque_categoria >$r->categoria</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="span6">
                                <label for="">Setor:</label>
                                
                                <select name="sector" id="sector" class="estoque">
                                <option value="" selected>Selecione um setor</option>
                                    <?php if (!$resultSector) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultSector as $r) {
                                        echo "<option value=$r->id_estoque_sector >$r->sector</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span6">
                                <label for="">Nota fiscal:</label>
                                
                                <select name="notaFiscal" id="notaFiscal" >
                                <option value=""  selected>Selecione uma categoria</option>
                                    <?php if (!$resultNota) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultNota as $r) {
                                        echo "<option value=$r->id_financeiro_nota >$r->notaFiscal</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="span6">
                                <label for="">Localização:</label>
                                
                                <select name="location" id="location">
                                <option value="" selected>Selecione um setor</option>
                                    <?php if (!$resultLocation) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultLocation as $r) {
                                        echo "<option value=$r->id_estoque_location >$r->location</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                            <div class="span12">
                                <label for="">Campos adcionais:</label>
                                
                                <select name="addCampo" id="addCampo" >
                                <option value=""  selected>Selecione uma categoria</option>
                                    <?php if (!$resultaddCampo) {
                                        echo '<option disabled selected>Sem marcas cadastradas</option>';
                                    }

                                    foreach ($resultaddCampo as $r) {
                                        echo "<option value=$r->id_estoque_addCampo >$r->addCampo</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                          
                        </div>

                        <div class="span12" style="display:flex;justify-content: center">
                            <input type="reset" class="button btn btn-warning" value="Limpar" / style="justify-content: center">
                            <button class="button btn btn-inverse"><span class="button__icon"><i class="bx bx-printer"></i></span> <span class="button__text2">Imprimir</span></button>
                        </div>
                    </form>
                </div>
                .
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".money").maskMoney();

        $("#tipoProduto").change(function a(){
            $(".estoque").val("");
           
        });
        
        $(".estoque").change(function b(){
            $("#tipoProduto").val("");
        });
       
    });
</script>