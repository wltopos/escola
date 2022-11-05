//Com variaveis de vinculo php
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

      
        estoque = (!parametro.control_estoque)?1000000:parametro.control_estoque;
        

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
                url: urlAdicionarProduto,
                data: dados,
                dataType: 'json',
                success: function(data) {
                    if (data.result == true) {
                        $("#divProdutos").load(parametro.urlAtual," #divProdutos");
                        $("#quantidade").val('');
                        $("#preco").val('');
                        $("#estoque").val('');
                        $("#unidade").val(0).change();
                        $("#produto").val('').focus();
                        $("#resultado").val('');
                        $("#ajustaValor").val('');
                        $("#ajustaValorTipo").val(0).change();
                    } else {
                        Swal.fire({
                            type: "error",
                            title: "Atenção",
                            html: "Ocorreu um erro ao tentar adicionar produto. <br /><br />Error: " + data.messages
                        });
                        $("#divProdutos").load(parametro.urlAtual," #divProdutos");
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
            url: urlExcluirProduto,
            data: "idProduto=" + idProduto + "&idVendas=" + paramentro.idVenda + "&quantidade=" + quantidade + "&produto=" + produto,
            dataType: 'json',
            success: function(data) {
                if (data.result == true) {
                    $("#divProdutos").load(paramentro.urlAtual," #divProdutos");
                    $("#resultado").val("");
                    $("#ajustaValor").val("");
                      $("#ajustaValorTipo").val(0).change();
                } else {
                    Swal.fire({
                        type: "error",
                        title: "Atenção",
                        html: "Ocorreu um erro ao tentar excluir produto." + data.messages
                    });
                    $("#divProdutos").load(paramentro.urlAtual," #divProdutos");
                }
            }
        });
        return false;
    }
