<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatable.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/trumbowyg/ui/trumbowyg.css">
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/trumbowyg.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/trumbowyg/langs/pt_br.js"></script>


<div class="new122" style="margin-top: 0; min-height: 100vh">
    <div class="flexxn">
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
            <a href="<?php echo base_url(); ?>produtos" class="button btn btn-mini btn-warning" style="max-width: 160px">
                <span class="button__icon"><i class='bx bx-undo'></i></span><span class="button__text2">Voltar</span>
            </a>

    </div>

<?php } ?>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-cash-register"></i>
                </span>
                <h5>Configurações de estoque</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <div class="span12" id="divProdutosServicos" style=" margin-left: 0">
                    <ul class="nav nav-tabs">
                        <li class="active" id="tDetalhes"><a href="#tabMarca" data-toggle="tab">Marcas</a></li>
                        <li id="tSetores"><a href="#tabSector" data-toggle="tab">Setores</a></li>
                        <li id="tCategorias"><a href="#tabCategoria" data-toggle="tab">Categorioas</a></li>
                        <li id="tIetns"><a href="#tabTipoProduto" data-toggle="tab">Grupos</a></li>
                        <li id="tMedidas"><a href="#tabMedida" data-toggle="tab">Medidas</a></li>
                        <li id="tLocais"><a href="#tabLocation" data-toggle="tab">Locais</a></li>
                        <li id="tCampos"><a href="#tabAddCampo" data-toggle="tab">Campos adicionais</a></li>
                        <li id="tFluxograma"><a href="#tabFluxograma" data-toggle="tab">Fluxograma</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabMarca">
                            <div class="span12 well" id="divEditarMarca">
                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/marca" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Marca</span>
                                            </a>

                                    </div>

                                <?php } ?>
                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Marcas</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaMarcas" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="campoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabSector">
                            <div class="span12 well" id="divEditarSector">
                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/sector" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Setor</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Setores</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaSetores" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Extn.</th>
                                                    
                                                    </tr>
                                                </tfoot> -->


                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabCategoria">
                            <div class="span12 well" id="divEditarCategoria">
                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/categoria" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Categoria</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Categorias</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaCategorias" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tabMedida">
                            <div class="span12 well" id="divEditarMedida">

                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/medida" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Medida</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Medidas</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaMedidas" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tabLocation">
                            <div class="span12 well" id="divEditarLocation">

                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/location" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Local</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Locais</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaLocais" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tabTipoProduto">
                            <div class="span12 well" id="divEditarTipoProduto">

                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/grupo" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Grupo</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Grupos de produtos</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaItens" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tabAddCampo">
                            <div class="span12 well" id="divEditarAddCampo">

                                <div class="widget-box">

                                    <div class="flexxn tituloDataTableMargin">
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduto')) { ?>
                                            <a href="<?php echo base_url(); ?>settings/adicionar/addCampo" class="button btn btn-mini btn-success" style="max-width: 160px">
                                                <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Campos</span>
                                            </a>

                                    </div>

                                <?php } ?>

                                <div class="widget-title">
                                    <span class="icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                    <h5>Campos Adicionais</h5>
                                </div>


                                <div class="widget-content nopadding tab-content">
                                    <table id="tabelaCampos" class="table table-bordered ">

                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Logo</th>
                                                <th style="width: 4%;">Cod.</th>
                                                <th>Nome</th>
                                                <th class="textoDescricao">Descrição</th>
                                                <th style="width: 16%;">Criação</th>
                                                <th style="width: 10%;">Ação</th>

                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Extn.</th>
                                                
                                                </tr>
                                            </tfoot> -->


                                    </table>
                                </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tabFluxograma">
                            <div class="span12 well" id="divEditarFluxograma">

                                <div class="widget-box">



                                    <div class="widget-title">
                                        <span class="icon">
                                            <i class="fas fa-shopping-bag"></i>
                                        </span>
                                        <h5>Fluxograma de cadastro </h5>
                                        <p>produtos em estoque </p>
                                    </div>


                                    <div class="widget-content nopadding tab-content">

                                        <div class="mxgraph" style="max-width:100%;border:1px solid transparent;" data-mxgraph="{&quot;highlight&quot;:&quot;#0000ff&quot;,&quot;nav&quot;:true,&quot;resize&quot;:true,&quot;toolbar&quot;:&quot;zoom layers tags lightbox&quot;,&quot;edit&quot;:&quot;_blank&quot;,&quot;xml&quot;:&quot;&lt;mxfile host=\&quot;app.diagrams.net\&quot; modified=\&quot;2023-02-06T18:36:15.264Z\&quot; agent=\&quot;5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36 Edg/109.0.1518.78\&quot; etag=\&quot;3UeyyPfv9vf1afquiGla\&quot; version=\&quot;20.8.17\&quot;&gt;&lt;diagram name=\&quot;Página-1\&quot; id=\&quot;JD815-ggscJK0oiwEquh\&quot;&gt;7VpRd6I4FP41PrYHEgL6qFa73WOnc9qzZzrzFiFqdsEwIVbdX78BEiGAHadF7TrjQyVfkktyv3u/S6gdOIw2txzHi3sWkLADrGDTgTcdID/Ik18pss0RBOwcmHMa5FAJeKL/EgVaCl3RgCTGQMFYKGhsgj5bLokvDAxzztbmsBkLzbvGeE5qwJOPwzr6hQZikaNd4BX4H4TOF/rOttvLeyKsB6udJAscsHUJgqMOHHLGRH4VbYYkTJ2n/ZLPG+/p3S2Mk6U4ZEKCvsbB9y+J33v+MwoevOG3yeQKqrWJrd4wCeT+VZOEU7YeFcCAs9UyIKlBS7YYFws2Z0scThiLJWhL8G8ixFbxiFeCSWgholD1kg0Vz6Xrr6mpa6RaNxtlOWtsVSNfYrquvTtXUMJW3CevbFdHEOZzIl4ZB3b8yMAmLCKCb+U8TkIs6Iu5DqwibL4bV5AgLxQPP8GJk9t9weFK3akD3FAudzBjcsNlttzvK6Y7rpLM6X05AMB4kzlO98uref490Lbk0nJzuqchDiZ4KtPZIBCHdL6U1770PeESeCFcUJkvfdUR0SDIY4XIBeFpZi+lMWZ0KTJfoUEH3ezumRogm6ZkVpOLFCpTvj+c67wp61fWtWOB3JSSIxX/BxOrbH9O91IY1mJlGtXz2WyWyGirhsVufW+PFLsWKXfyj/VpdD96vBs+SG5xJPNysJwmcRPHRTqn1K4XVJCnGGcZtJZybjI/o2E4ZCHj2VzoOp7b9SSeCM7+IaUeaDsQOSoqS/gs+7zGey2l91PpAdPnSDXXhUjbesiiJNCudaSsdRuy9qTSmnpbdcoIbFU2wYGyid4pm9nUPud4WxqgdGNv8l1BxwyFrlUhM7fYauZ5DWyfRUObWW9TU90faarlQMcgQMfLW1W1Yub4OgpqbD7d3U7SSnr7+Nfnh+Po5j513K+nbegmsj6YbqKa7x9H49Hj6NPwrl9z/MlKlMlwG47XsvRhHG/Xnx7OXLEqZIzHN8Aet1vJem1UqHoJciC47rrAcrs9FyHbqzxkWlIkS5+K/bysKpPti1uvgWbjOOHvXF4cF2QmBMCe1U8Q95j7+NAzxM/pZDUazGTOXddSMjo9aDBke2fPxqZT36Vno33og6W952B3mgO57Z2YCulIvn1W87NG6T1J2ixelGQt/abkQ1P43sPB+yhsUsHf6aUHds/KTf3x+5avYlYvJwsWTVfJG0qJ6etdKamUGAL9bobXnhcHVg+1VnyQZRYfaDUUH6eh+OzA9imANQqeiJC7b7ei7wn5Y1Z6WDnv7B7Dz1fp6yeeIRZkzjjFl+dv59DgPpq/wa94zskV/ZD/dFjNfJ5I+rs1bu5JQIMLSITqEQNZ6MzCA+oif/mJoD3840QA50wEvcwSNxPm4/Dy8sC1z12AddgbBTiKWSKxfkB9KmOaJv9/zyPkXCPD916D74EDW/G9bBa/ZcjfXRW/CIGj/wA=&lt;/diagram&gt;&lt;/mxfile&gt;&quot;}"></div>
                                        
                                        <script type="text/javascript" src="https://viewer.diagrams.net/js/viewer-static.min.js"></script>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                &nbsp
            </div>
        </div>
    </div>
</div>

</div>

<!-- Modal Excluir-->
<div id="modal-excluir" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="" id="excluir-setting" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel"><i class="fas fa-trash-alt"></i> Excluir Produto</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" class="idSetting" name="idSetting" value="" />
            <h5 style="text-align: center">Deseja realmente excluir este produto?</h5>
        </div>
        <div class="modal-footer" style="display:flex;justify-content: center">
            <button class="button btn btn-warning" data-dismiss="modal" aria-hidden="true">
                <span class="button__icon"><i class="bx bx-x"></i></span><span class="button__text2">Cancelar</span></button>
            <button class="button btn btn-danger" id="bt-salvar"><span class="button__icon"><i class='bx bx-trash'></i></span> <span class="button__text2">Excluir</span></button>
        </div>
    </form>
</div>

<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        let url_Param = window.location.href.split("#");
        if (url_Param.length > 0) {
            let param = url_Param[1];
            $(`.nav-tabs a[href="#${param}"]`).tab('show');
        }

        const DATATABLE_PTBR = {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }

        $('#tabelaMarcas').DataTable({
            ajax: '<?= site_url('/settings/getSettings/marca') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });


        $('#tabelaSetores').DataTable({
            ajax: '<?= site_url('/settings/getSettings/sector') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $('#tabelaCategorias').DataTable({
            ajax: '<?= site_url('/settings/getSettings/categoria') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $('#tabelaMedidas').DataTable({
            ajax: '<?= site_url('/settings/getSettings/medida') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $('#tabelaLocais').DataTable({
            ajax: '<?= site_url('/settings/getSettings/location') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $('#tabelaItens').DataTable({
            ajax: '<?= site_url('/settings/getSettings/tipo_produto') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $('#tabelaCampos').DataTable({
            ajax: '<?= site_url('/settings/getSettings/addCampo') ?>',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": false,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

        $(document).on('click', 'a', function(event) {
            let idSetting = $(this).attr('idSetting');
            let setting = $(this).attr('setting');

            $('.idSetting').val(idSetting);
            $('#excluir-setting').attr('action', `https://sistema.wltopos.com/settings/excluir/${setting}`);

        });

    })
</script>