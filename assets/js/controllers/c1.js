
$("#formProdutos").validate({
    rules: {
        preco: {
            required: true
        },
        quantidade: {
            required: true
        }
    },
    messages: {
        preco: {
            required: 'Insira o preço'
        },
        quantidade: {
            required: 'Insira a quantidade'
        }
    },
    submitHandler: function(form) {
        var quantidade = parseInt($("#quantidade").val());
        var estoque = parseInt($("#estoque").val());

        <?php if (!$configuration['control_estoque']) {
                                    echo 'estoque = 1000000';
                                }; ?>

        if (estoque < quantidade) {
            Swal.fire({
                type: "warning",
                title: "Atenção",
                text: "Você não possui estoque suficiente."
            });
        } else {
            var dados = $(form).serialize();
            $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>index.php/vendas/adicionarProduto",
                data: dados,
                dataType: 'json',
                success: function(data) {
                    if (data.result == true) {
                        $("#divProdutos").load("<?php echo current_url(); ?> #divProdutos");
                        $("#quantidade").val('');
                        $("#preco").val('');
                        $("#produto").val('').focus();
                        $("#resultado").val("");
                        $("#desconto").val("");
                    } else {
                        Swal.fire({
                            type: "error",
                            title: "Atenção",
                            html: "Ocorreu um erro ao tentar adicionar produto. <br /><br />Error: " + data.messages
                        });
                        $("#divProdutos").load("<?php echo current_url(); ?> #divProdutos");
                        $('#formProdutos')[0].reset();
                    }
                }
            });
            return false;
        }
    }
});
$(document).on('click', 'a', function(event) {
    var idProduto = $(this).attr('idAcao');
    var quantidade = $(this).attr('quantAcao');
    var produto = $(this).attr('prodAcao');
    if ((idProduto % 1) == 0) {
        $("#divProdutos").html("<div class='progress progress-info progress-striped active'><div class='bar' style='width: 100%'></div></div>");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/vendas/excluirProduto",
            data: "idProduto=" + idProduto + "&idVendas=" + <?= $result->idVendas ?> + "&quantidade=" + quantidade + "&produto=" + produto,
            dataType: 'json',
            success: function(data) {
                if (data.result == true) {
                    $("#divProdutos").load("<?php echo current_url(); ?> #divProdutos");
                    $("#resultado").val("");
                    $("#desconto").val("");
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Atenção",
                        html: "Ocorreu um erro ao tentar excluir produto." + data.messages
                    });
                    $("#divProdutos").load("<?php echo current_url(); ?> #divProdutos");
                }
            }
        });
        return false;
    }
});
