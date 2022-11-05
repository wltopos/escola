<?= $this->extend('Layout/principal'); ?>


<?= $this->section('titulo'); ?>
<?= $titulo ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>

<link rel="stylesheet" type="text/css" href='<?= site_url("recursos/DataTables/datatables.min.css")?>' />


<?= $this->endSection(); ?>


<?= $this->section('conteudo'); ?>
<div class="row">

    <div class="col-lg-12">
        <div class="block">
            <div class="title"><strong>Usuários</strong></div>
            <div class="table-responsive">
                <table id="tabelaUsuarios" class="table table-striped table-sm" style="width:100%">
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Situação</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>


<?= $this->section('scripts'); ?>

<script type="text/javascript" src='<?= site_url("recursos/DataTables/datatables.min.js") ?>'></script>
<script>
    $(document).ready(function() {

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

        $('#tabelaUsuarios').DataTable({
            "oLanguage": DATATABLE_PTBR,
            ajax: '<?= site_url('usuarios/recuperaUsuarios'); ?>',
            columns: [
                {data: 'imagem_administrativo_usuario'},
                {data: 'nome_administrativo_usuario'},
                {data: 'email_administrativo_usuario'},
                {data: 'status_administrativo_usuario'}
            ],
            "deferRender": true,
            "processing": true,
            "language": {
                processing: '<i class="fa fa-spinner fa-spin fa-3x fa-aw"></i>',
            },
            "responsive": true,

        });
    });
</script>

<?= $this->endSection(); ?>