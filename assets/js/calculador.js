function calculaMedida(qtdEstoque, multiplicador, medida) {

    let estoque = {};
    let calculaKilo = qtdEstoque * multiplicador;

    estoque = {
        ['quantidade']: calculaKilo,
        ['tipo']: 'Kg'
    }

    return estoque.tipo;
}
