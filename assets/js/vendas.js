function calcDesconto(valor, ajustaValor, ajustaValorTipo) {
    if (ajustaValorTipo == "TAXA") {
        var resultado = (valor + (ajustaValor * valor / 100)).toFixed(2);
        return resultado;
    }
    if (ajustaValorTipo == "DESCONTO") {
        var resultado = (valor - (ajustaValor * valor / 100)).toFixed(2);
        return resultado;
    }

}

function validarDesconto(resultado, valor) {
    if (resultado == valor) {
        return resultado = "";
    } else {
        return resultado.toFixed(2);
    }
}


$("#ajustaValorTipo").change(function() {
    
    let valorBackup = $("#total-venda").val();
    $("#total-venda").val(valorBackup);
    $("#valorTotalVenda").val(valorBackup);

    //this.value = this.value.replace(/[^0-9.]/g, '');
    if ($('#ajustaValor').val() > 100) {
        $('#errorAlert').text('Desconto não pode ser maior de 100%.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $("#ajustaValor").focus();
    }

    if ($("#total-venda").val() == null || $("#total-venda").val() == '') {
        $('#errorAlert').text('Valor não pode ser apagado.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $('#resultado').val('');
        $("#ajustaValor").focus();

    } else if (Number($("#ajustaValor").val()) >= 0) {
        $('#resultado').val(calcDesconto(Number($("#total-venda").val()), Number($("#ajustaValor").val()), $('#ajustaValorTipo').val()));
      //  $('#resultado').val(validarDesconto(Number($('#resultado').val()), Number($("#total-venda").val())));
    } else {
        $('#errorAlert').text('Erro desconhecido.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $('#resultado').val('');
    }
});

$("#ajustaValor").change(function() {
    let valorBackup = $("#total-venda").val();
    $("#valorTotalVenda").val(valorBackup);
    $("#total-venda").val(valorBackup);

    //this.value = this.value.replace(/[^0-9.]/g, '');
    if ($('#ajustaValor').val() > 100) {
        $('#errorAlert').text('Desconto não pode ser maior de 100%.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $("#ajustaValor").focus();
    }
    if ($("#total-venda").val() == null || $("#total-venda").val() == '') {
        $('#errorAlert').text('Valor não pode ser apagado.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $('#resultado').val('');
        $("#ajustaValor").focus();

    } else if (Number($("#ajustaValor").val()) >= 0) {
        $('#resultado').val(calcDesconto(Number($("#total-venda").val()), Number($("#ajustaValor").val()), $('#ajustaValorTipo').val()));
     //   $('#resultado').val(validarDesconto(Number($('#resultado').val()), Number($("#total-venda").val())));
    } else {
        $('#errorAlert').text('Erro desconhecido.').css("display", "inline").fadeOut(5000);
        $('#ajustaValor').val('');
        $('#resultado').val('');
    }
});

$("#total-venda").focusout(function() {
    let valorBackup = $("#total-venda").val();
    $("#valorTotalVenda").val(valorBackup);
    $("#total-venda").val(valorBackup);

    $("#total-venda").val(valorBackup);
    if ($("#total-venda").val() == '0.00' && $('#resultado').val() != '') {
        $('#errorAlert').text('Você não pode apagar o valor.').css("display", "inline").fadeOut(6000);
        $('#resultado').val('');
        $('#resultado').val(calcDesconto(Number($("#total-venda").val()), Number($("#ajustaValor").val()), $('#ajustaValorTipo').val()));
        $('#resultado').val(validarDesconto(Number($('#resultado').val()), Number($("#total-venda").val())));
        $("#ajustaValor").focus();
    } else {
        $('#resultado').val(calcDesconto(Number($("#total-venda").val()), Number($("#ajustaValor").val()), $('#ajustaValorTipo').val()));
      //  $('#resultado').val(validarDesconto(Number($('#resultado').val()), Number($("#total-venda").val())));
    }
});

$('#resultado').focusout(function() {

    if (Number($('#resultado').val()) > Number($("#total-venda").val())) {
        $('#errorAlert').text('Desconto não pode ser maior que o Valor.').css("display", "inline").fadeOut(6000);
        $('#resultado').val('');
    }
    if ($("#ajustaValor").val() != "" || $("#ajustaValor").val() != null) {
        $('#resultado').val(calcDesconto(Number($("#total-venda").val()), Number($("#ajustaValor").val()), $('#ajustaValorTipo').val()));
        //  $('#resultado').val(validarDesconto(Number($('#resultado').val()), Number($("#total-venda").val())));
    }
});