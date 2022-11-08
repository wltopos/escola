function calculaPrecoCompra(precoVenda, margemLucro) {
    let margem = margemLucro + 100;
    let precoCompra = ((precoVenda * 100) / margem).toFixed(2); 

    return precoCompra;
}
function calculaPrecoVenda(precoCompra, margemLucro) {
    var precoVenda = (precoCompra * margemLucro / 100 + precoCompra).toFixed(2);
  
    return precoVenda;
}
function calculaPrecoPorcentual(valor1, valor2) {
    if(valor1 > valor2){
        return ((valor1 - valor2) * (100 / valor1)).toFixed(2) ;
    }
    if(valor2 > valor1){
        return ((valor2 - valor1) * (100 / valor1)).toFixed(2) ;
    }else{
        return 0;
    }
     
  
}

function calcPrecoVenda() {
   
    if ($("#precoCompra").val() == null || $("#precoCompra").val() == '' || $("#margemLucro").val() == null || $("#margemLucro").val() == '') {
        $('#errorAlert').text('Preencher valor da compra primeiro.').css("display", "inline").fadeOut(5000);
        $('#margemLucro').val('');
        $('#precoCompra').val('');
    } else if (Number($("#precoCompra").val()) >= 0 && Number($("#margemLucro").val())  >= 0 ) {
        $('#precoVenda').val(calculaPrecoVenda(Number($("#precoCompra").val()), Number($("#margemLucro").val())));
    } else {
        $('#errorAlert').text('Não é permitido número negativo.').css("display", "inline").fadeOut(5000);
        $('#margemLucro').val('');
        $('#precoCompra').val('');
    }
}

function calcPrecoCompra() {
   
    if ($("#precoVenda").val() == null || $("#precoVenda").val() == '' || $("#margemLucro").val() == null || $("#margemLucro").val() == '') {
        $('#errorAlert').text('Preencher valor da compra primeiro.').css("display", "inline").fadeOut(5000);
        $('#margemLucro').val('');
        $('#precoVenda').val('');
    } else if (Number($("#precoVenda").val()) >= 0 && Number($("#margemLucro").val())  >= 0 ) {
        $('#precoCompra').val(calculaPrecoCompra(Number($("#precoVenda").val()), Number($("#margemLucro").val())));
    } else {
        $('#errorAlert').text('Não é permitido número negativo.').css("display", "inline").fadeOut(5000);
        $('#margemLucro').val('');
        $('#precoCompra').val('');
    }
}

function calcPrecoPorcentual() {
   
    if ($("#precoVenda").val() == null || $("#precoVenda").val() == '' || $("#precoCompra").val() == null || $("#precoCompra").val() == '') {
        $('#errorAlert').text('Preencher valor da compra primeiro.').css("display", "inline").fadeOut(5000);
        $('#precoVenda').val('');
        $('#precoCompra').val('');
    } else if (Number($("#precoVenda").val()) >= 0 && Number($("#precoCompra").val())  >= 0 ) {
        $('#margemLucro').val(calculaPrecoPorcentual(Number($("#precoCompra").val()), Number($("#precoVenda").val())));
    } else {
        $('#errorAlert').text('Não é permitido número negativo.').css("display", "inline").fadeOut(5000);
        $('#precoVenda').val('');
        $('#precoCompra').val('');
    }
}

//CONTROLE DE ATIVAÇÃO DE CAMPOS PARA CALCULO DE RESULTADOS

$('#precoVenda').click(function() {
    if ($('#precoCompra').val() == '' && $('#margemLucro').val() != 00) {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", true);
        $("#margemLucro").attr("readonly", false);

        $('#calcular').attr('onClick', 'calcPrecoCompra();');

    } else if ($('#precoCompra').val() == '' && $('#margemLucro').val() == 00) {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", true);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoPorcentual();');
        
    } else if ($('#precoCompra').val() != '' && $('#precoVenda').val() != '') {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", true);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoPorcentual();');
    }
});

$('#precoCompra').click(function() {
    if ($('#precoVenda').val() != '' && $('#margemLucro').val() == 00) {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", true);

        $('#calcular').attr('onClick', 'calcPrecoPorcentual();');
    } else if ($('#precoVenda').val() == '' && $('#margemLucro').val() != 00) {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", true);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoVenda();');
    } else if ($('#precoCompra').val() != '' && $('#precoVenda').val() != '') {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", true);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoPorcentual();');
    }
});

$('#margemLucro').click(function() {
    if ($('#precoVenda').val() != '') {
        $("#precoVenda").attr("readonly", false);
        $("#precoCompra").attr("readonly", true);
        $("#margemLucro").attr("readonly", false);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoCompra();');
    } else if ($('#precoCompra').val() != '') {
        $("#precoVenda").attr("readonly", true);
        $("#precoCompra").attr("readonly", false);
        $("#margemLucro").attr("readonly", false);
        $("#margemLucro").val("");

        $('#calcular').attr('onClick', 'calcPrecoVenda();');
    }
});




