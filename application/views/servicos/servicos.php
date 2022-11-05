<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatable.css" />

<div class="new122">
    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aServico')) { ?>
    <a href="<?php echo base_url() ?>index.php/servicos/adicionar" class="button btn btn-mini btn-success" style="max-width: 160px">
      <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Add. Serviços</span></a>
<?php } ?>

<div class="widget-box">
    <div class="widget-title" style="margin: -20px 0 0">
        <span class="icon">
            <i class="fas fa-wrench"></i>
        </span>
        <h5>Serviços</h5>
    </div>
    <div class="widget-content nopadding tab-content">
        <table id="tabela" class="table table-bordered ">
            <thead>
                <tr>
                    <th>Cod.</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
   
        </table>
    </div>
</div>
</div>
<?php echo $this->pagination->create_links(); ?>

<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/servicos/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Excluir Serviço</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" id="idServico" name="id" value="" />
            <h5 style="text-align: center">Deseja realmente excluir este serviço?</h5>
        </div>
        <div class="modal-footer" style="display:flex;justify-content: center">
          <button class="button btn btn-warning" data-dismiss="modal" aria-hidden="true"><span class="button__icon"><i class="bx bx-x"></i></span><span class="button__text2">Cancelar</span></button>
          <button class="button btn btn-danger"><span class="button__icon"><i class='bx bx-trash'></i></span> <span class="button__text2">Excluir</span></button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var servico = $(this).attr('servico');
            $('#idServico').val(servico);
        });

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
  
        $('#tabela').DataTable({
            ajax: '/servicos/getServicos',
            "oLanguage": DATATABLE_PTBR,
            "processing": true,
            "lengthChange": true,
            "autoWidth": true,
            "deferRender": true,

            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,
            "pagingType": $(window).width() < 768 ? 'simple' : 'numbers',
        });

  
  });
</script>
