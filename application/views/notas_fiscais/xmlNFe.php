<link rel="stylesheet" type="text/css" href="assets/css/bootstrap4.css" />

<h2>Documento de conferência fiscal </h2>

<!-- Topo da NFe - campo de confirmação de recebimento - Assinatura do recebedor -->
<table>
    <tr>
        <td colspan="2" class="cap" style="width:161mm; height:7mm; border:1px solid">Recebemos de <?php echo $dadosNFe['dadosFornecedor']['pessoa_fisica'] ?> os produtos contantes da nota fical indicada ao lado</td>


        <td rowspan="2" style="width:1mm; border: none;"> </td>

        <td rowspan="2" class="center " style="width:22mm; border:1px solid;">
            <ol>NF-e</ol>
            <ol class="titulo1 bold">Nº <?php echo $dadosNFe['dadosFornecedor']['numeroNF'] ?></ol>
            <ol>Série <?php echo $dadosNFe['dadosFornecedor']['serie'] ?></ol>
        </td>
    </tr>
    <tr>
        <td class="titulo1" style="width:56mm; height:7mm;  border:1px solid;">Data de recebimento</td>
        <td class="titulo1" style="width:105mm; border:1px solid;">Identificação e assinatura do recebedor</td>

    </tr>

</table>
<hr style="border-top:1px dotted #f00;" />
<!-- Seção dois, nome e endereço da empresa, chave de acesso e numero da DANFE -->
<table>
    <tr>
        <td rowspan="5" style=" width:60mm;  padding:3mm; border:1px solid; ">
            <img style="width:15mm; padding:2mm; margin-left:3%; margin-right:3%; " src="<?= base_url('assets/img/logo_1.jpg') ?>">

            <ol class="cap bold" style="font-weight: bold;"><?php echo $dadosNFe['dadosFornecedor']['pessoa_fisica'] ?></ol>
            <ol class="cap"><?php echo $dadosNFe['dadosFornecedor']['endereco']['rua'] ?>, <?php echo $dadosNFe['dadosFornecedor']['endereco']['numero'] ?>, <?php echo $dadosNFe['dadosFornecedor']['endereco']['complemento'] ?></ol>
            <ol><?php echo $dadosNFe['dadosFornecedor']['endereco']['bairro'] ?></ol>
            <ol><?php echo $dadosNFe['dadosFornecedor']['endereco']['cep'] ?>, <?php echo $dadosNFe['dadosFornecedor']['endereco']['municipio'] ?>-<?php echo $dadosNFe['dadosFornecedor']['endereco']['uf'] ?></ol>
            <ol><?php echo strtolower($dadosNFe['dadosFornecedor']['contato']['fone']) ?> / <?php echo strtolower($dadosNFe['dadosFornecedor']['contato']['email']) ?></ol>

        </td>

        <td rowspan="5" class="center" style=" width:25mm; ">
            <ol class="cap bold">DANFE</ol>
            <ol>Documento Auxiliar da Nota Fiscal</ol>
            <ol>0 - Entrada</ol>
            <ol>1 - Saida</ol>
            <ol>Nº <?php echo $dadosNFe['dadosFornecedor']['numeroNF'] ?></ol>
            <ol>SERIE: <?php echo $dadosNFe['dadosFornecedor']['serie'] ?></ol>
            <ol>Pagina: 1 de <span style="padding:0 ;">{PAGENO}</span></ol>
        </td>
        <td style=" width:5mm; ">

        </td>
        <td style=" width:2mm;  ">

        </td>
        <td rowspan="2" class="titulo2" style=" width:84mm; height:3mm; border:1px solid; ">
            <ol>Controle do fisco</ol>
            <barcode code="<?= $dadosNFe['nfe']['chaveNF']  ?>" text="0" type="C128C" size="0.8" disableborder="0" class="barcode" />
        </td>
    </tr>
    <tr>
        <td>

        </td>

        <td>

        </td>



    </tr>
    <tr>
        <td style="border:1px solid; height: 1px">
            <span><?php echo $dadosNFe['dadosFornecedor']['tipo'] ?></span>
        </td>

        <td>

        </td>
        <td class="titulo2" style="border-left:1px solid; border-top:1px solid; border-right:1px solid; ">
            <ol>Chave de acesso</ol>
        </td>

    </tr>
    <tr>
        <td>

        </td>

        <td>

        </td>
        <td class="center" style="border-left:1px solid; border-bottom:1px solid; border-right:1px solid;">
            <span><?php echo $dadosNFe['nfe']['chaveNF'] ?></span>
        </td>

    </tr>
    <tr>
        <td>

        </td>
        <td>

        </td>
        <td style="border-left:1px solid; border-bottom:1px solid; border-right:1px solid;">
            <ol>Consulta de autencidade no portal nacional da NF-e</ol>
            <ol>www.nfe.fazenda.gov.br/portal</ol>
            <ol>ou no site da Sefaz autorizada</ol>
        </td>




    </tr>
</table>


<!-- Dados da empresa -->
<table style="margin-top:3mm">
    <tr>
        <td style="border:1px solid; width:92mm;">
            <span>Natureza da operação</span> <br />
            <span><?php echo $dadosNFe['dadosFornecedor']['natureza'] ?></span>
        </td>
        <td colspan="2" style="border:1px solid; width: 92mm; ">
            <span>Protocolo de autorização de uso</span> <br />
            <span><?php echo $dadosNFe['nfe']['protocolo'] ?></span>
        </td>
    </tr>

</table>
<table>
    <tr>
        <td style="border-left:1px solid; border-bottom:1px solid; border-right:1px solid; width:55mm; height: 7mm">
            <span>Inscrição estadual</span> <br />
            <span><?php echo $dadosNFe['dadosFornecedor']['ie'] ?></span>
        </td>
        <td style="border-left:1px solid; border-bottom:1px solid; border-right:1px solid; width:63mm">
            <span>inscr. est. subst. trib.</span> <br />
            <span>-</span>
        </td>
        <td style="border-left:1px solid; border-bottom:1px solid; border-right:1px solid; width:66mm">
            <span>CNPJ</span> <br />
            <span><?php echo $dadosNFe['dadosFornecedor']['cnpj'] ?></span>
        </td>
    </tr>
</table>


<!-- Destinatário/Remetente -->
<div style="margin-top:2mm" class="titulo bold">Destinatário/Remetente</div>
<table>
    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:109mm; height: 7mm">
            <span>Nome / Razão Social</span> <br />
            <span><?php echo $dadosNFe['dadosDestinatario']['destinatario'] ?></span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:25mm; ">
            <span>CNPJ/CPF</span> <br />
            <span><?php echo $dadosNFe['dadosDestinatario']['documento'] ?></span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:27mm;">
            <span>Inscrição estadual</span> <br />
            <span>-</span>
        </td>
        <td style=" width:3mm">

        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:20mm">
            <span>Data emissão</span> <br />
            <span><?php echo $dadosNFe['nfe']['dataEmissao'] ?></span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; height: 7mm">
            <span>Endereço</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['endereco']['rua'] ?></span></span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; ">
            <span>Bairro</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['endereco']['bairro'] ?></span></span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; ">
            <span>CEP</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['endereco']['cep'] ?></span></span>
        </td>
        <td>

        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;">
            <span>Data saída</span> <br />
            <span><?php echo $dadosNFe['nfe']['dataSaida'] ?></span>
        </td>
    </tr>
    <tr>

    <tr>
        <td style="border:1px solid; height: 7mm">
            <span>Município</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['endereco']['municipio'] ?></span></span>
        </td>
        <td style="border:1px solid;  ">
            <span>Fone/Fax</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['contato']['fone'] ?></span></span>
        </td>
        <td style="border:1px solid; ">
            <span>UF</span> <br />
            <span><span><?php echo $dadosNFe['dadosDestinatario']['endereco']['uf'] ?></span></span>
        </td>
        <td>

        </td>
        <td style="border:1px solid; ">
            <span>Hora saída</span> <br />
            <span><?php echo $dadosNFe['nfe']['horaSaida'] ?></span>
        </td>
    </tr>
    <tr>
</table>

<!-- Faturas -->
<div style="margin-top:2mm" class="titulo bold">Faturas</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:19mm; height: 4mm">
            <ol class="bold">Número</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:28mm">
            <ol class="bold">Vencimento</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:16mm">
            <ol class="bold">Valor</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:19mm">
            <ol class="bold">Número</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:28mm">
            <ol class="bold">Vencimento</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:13mm">
            <ol class="bold">Valor</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:19mm">
            <ol class="bold">Número</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:28mm">
            <ol class="bold">Vencimento</ol>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:14mm">
            <ol class="bold">Valor</ol>
        </td>
    </tr>

    <tr>
        <td style="border:1px solid; width:19mm; height: 5mm">
            <ol><?php echo $dadosNFe['faturas']['numero'] ?></ol>
        </td>
        <td style="border:1px solid; width:28mm">
            <ol><?php echo $dadosNFe['faturas']['vencimento'] ?></ol>
        </td>
        <td style="border:1px solid; width:16mm">
            <ol><?php echo $dadosNFe['faturas']['valor'] ?></ol>
        </td>
        <td style="border:1px solid; width:19mm">
            <ol> </ol>
        </td>
        <td style="border:1px solid; width:28mm">
            <ol> </ol>
        </td>
        <td style="border:1px solid; width:13mm">
            <ol> </ol>
        </td>
        <td style="border:1px solid; width:19mm">
            <ol> </ol>
        </td>
        <td style="border:1px solid; width:28mm">
            <ol> </ol>
        </td>
        <td style="border:1px solid; width:14mm">
            <ol> </ol>
        </td>
    </tr>

</table>

<!-- Cálculo do imposto -->
<div style="margin-top:2mm" class="titulo bold">Cálculo do imposto</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:34mm; vertical-align: top;">
            <span>Base de cálculo do ICMS</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:20mm; vertical-align: top;">
            <span>Valor do ICMS</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:44mm; vertical-align: top;">
            <span>Base de cálculo do ICMS Subst.</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:30mm; vertical-align: top;">
            <span>Valor do ICMS Subst.</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:23mm; vertical-align: top;">
            <span>Valor do FCP ST</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:33mm; vertical-align: top;">
            <span>Valor total dos produtos</span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid;  width:34mm;  vertical-align: bottom;">
            <ol><?php echo $dadosNFe['imposto']['baseICMS'] ?></ol>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:20mm; vertical-align: bottom;">
            <ol><?php echo $dadosNFe['imposto']['valorICMS'] ?></ol>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:44mm; vertical-align: bottom;">
            <ol>0.00</ol>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:30mm; vertical-align: bottom;">
            <ol>0.00</ol>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:23mm; vertical-align: bottom;">
            <ol><?php echo $dadosNFe['imposto']['valorFCPST'] ?></ol>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:33mm; vertical-align: bottom;">
            <ol><?php echo $dadosNFe['imposto']['valorProdutos'] ?></ol>
        </td>
    </tr>

</table>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:25mm; vertical-align: top;">
            <span>Valor do frete</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:30mm; vertical-align: top;">
            <span>Valor do seguro</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:20mm; vertical-align: top;">
            <span>Desconto</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:52mm; vertical-align: top;">
            <span>Outras despesas acessórias</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:22mm; vertical-align: top;">
            <span>Valor do IPI</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:35mm; vertical-align: top;">
            <span>Valor total da nota</span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:25mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorFrete'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:30mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorSeguro'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:20mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorDesconto'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:52mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorOutros'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:22mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorIPI'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:35mm; vertical-align: bottom;">
            <span><?php echo $dadosNFe['imposto']['valorNF'] ?></span>
        </td>
    </tr>

</table>

<!-- Transportador/Volumes transportados -->
<div style="margin-top:2mm" class="titulo bold">Transportador/Volumes transportados</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:54mm; vertical-align:top;">
            <span>Nome</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:34mm; vertical-align:top;">
            <span>Frete por conta</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:31mm; vertical-align:top;">
            <span>Código ANTT</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:31mm; vertical-align:top;">
            <span>Placa do veículo</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:8mm; vertical-align:top;">
            <span>UF</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:26mm; vertical-align:top;">
            <span>CNPJ/CPF</span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid;  width:54mm; ">
            <!-- Nome -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:34mm">
            <!-- Modal -->
            <span><?php echo $dadosNFe['frete']['modal'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:31mm">
            <!-- Código ANTT -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:31mm">
            <!-- Placa do veículo -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:8mm">
            <!-- UF -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:26mm">
            <!-- CNPJ/CPF -->
            <span></span>
        </td>
    </tr>

</table>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:44mm">
            <span>Endereço</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:44mm">
            <span>Município</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:16mm">
            <span>UF</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid;  width:80mm">
            <span>Inscrição Estadual</span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid;  width:44mm">
            <!-- Endereço -->
            <span>-</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:44mm">
            <!-- Município -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:16mm">
            <!-- UF -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid;  width:80mm">
            <!-- Inscrição Estadual -->
            <span></span>
        </td>
    </tr>

</table>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:35mm; ">
            <span>Quantidade</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:25mm">
            <span>Espécie</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:20mm">
            <span>Marca</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:35mm">
            <span>Numeração</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:32mm">
            <span>Peso Bruto</span>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:37mm">
            <span>Peso Liquido</span>
        </td>
    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:35mm; ">
            <!-- Quantidade -->
            <span><?php echo $dadosNFe['frete']['quantidade'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:25mm">
            <!-- Espécie -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:20mm">
            <!-- Marca -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:35mm">
            <!-- Numeração -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:32mm">
            <!-- Peso Bruto -->
            <span><?php echo $dadosNFe['frete']['pesoBruto'] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:37mm">
            <!-- Peso Liquido -->
            <span><?php echo $dadosNFe['frete']['pesoLiquido'] ?></span>
        </td>
    </tr>

</table>

<!-- Itens da nota fiscal -->
<div style="margin-top:2mm" class="titulo bold">Itens da nota fiscal</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:23mm; height: 7mm">
            <div class="titulo2 bold">Código</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:64mm">
            <div class="titulo2 bold">Descrição do produto/serviço</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:10mm">
            <div class="titulo2 bold">NCM/SH</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:9mm">
            <div class="titulo2 bold">CSOSN</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:7mm">
            <div class="titulo2 bold">CFOP</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:4mm">
            <div class="titulo2 bold">UN</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:6mm">
            <div class="titulo2 bold">Qtde</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:9mm; text-align: right;">
            <div class="titulo2 bold">Preço<br />un</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:10mm; text-align: right;">
            <div class="titulo2 bold">Preço<br />total</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:9mm">
            <div class="titulo2 bold">BC<br />ICMS</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:10mm">
            <div class="titulo2 bold">Vlr.<br />ICMS</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:8mm">
            <div class="titulo2 bold">Vlr.<br />IPI</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:9mm">
            <div class="titulo2 bold">%ICMS</div>
        </td>
        <td style="border-left:1px solid; border-top:1px solid; border-right:1px solid; width:6mm">
            <div class="titulo2 bold">%IPI</div>
        </td>
    </tr>

</table>
<table style=" height: 22mm">

    <?php foreach ($dadosNFe['itens'] as $data) : ?>)
    <tr>
        <td  style="border:1px solid; width:23mm">
            <!-- Código     -->
            <span ><?= mb_strimwidth($data->prod->cProd, 0, 17, "..."); ?></span>
        </td>
        <td style="border:1px solid; width:64mm">
            <!-- Descrição do produto/serviço  -->
            <span><?= $data->prod->xProd ?></span>
        </td>
        <td style="border:1px solid; width:10mm">
            <!-- NCM/SH     -->
            <span style="font-size: 5.5pt ;"><?= $data->prod->NCM ?></span>
        </td>
        <td style="border:1px solid; width:9mm">
            <!-- CSOSN   -->
            <span></span>
        </td>
        <td style="border:1px solid; width:7mm">
            <!-- CFOP  -->
            <span><?= $data->prod->CFOP ?></span>
        </td>
        <td style="border:1px solid; width:4mm">
            <!-- UN  -->
            <span><?= $data->prod->uTrib ?></span>
        </td>
        <td style="border:1px solid; width:6mm">
            <!-- Qtde  -->
            <span><?= $data->prod->qCom / 1 ?></span>
        </td>
        <td style="border:1px solid; width:9mm">
            <!-- Preço/un -->
            <span><?= $data->prod->vUnCom / 1 ?></span>
        </td>
        <td style="border:1px solid; width:10mm">
            <!-- Preço Total -->
            <span><?= $data->prod->vProd / 1 ?></span>
        </td>
        <td style="border:1px solid; width:9mm">
            <!-- Base ICMS  -->
            <span><?= $data->imposto->ICMS->ICMS00->vBC ?></span>
        </td>
        <td style="border:1px solid; width:10mm">
            <!-- Vlr. ICMS    -->
            <span><?= $data->imposto->ICMS->ICMS00->vICMS ?></span>
        </td>
        <td style="border:1px solid; width:8mm">
            <!-- Vlr. IPI -->
            <span></span>
        </td>
        <td style="border:1px solid; width:9mm">
            <!-- %ICMS -->
            <span></span>
        </td>
        <td style="border:1px solid; width:6mm">
            <!-- %IPI -->
            <span></span>
        </td>
    </tr>
<?php endforeach ?>
</table>

<!-- Cálculo do ISSQN -->
<div style="margin-top:2mm" class="titulo bold">Cálculo do ISSQN</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:58mm;">
            <span>Inscrição Municípal</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:42mm">
            <span>Valor total dos serviços</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:46mm">
            <span>Base de calculo ISSQN</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:38mm">
            <span>Valor do ISSQN</span>
        </td>

    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:58mm;">
            <!-- Inscrição Municípal -->
            <span>-</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:42mm">
            <!-- Valor total dos serviços -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:46mm">
            <!-- Base de calculo ISSQN -->
            <span></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:38mm">
            <!-- Valor do ISSQN -->
            <span></span>
        </td>

    </tr>

</table>

<!-- Dados adicionais -->
<div style="margin-top:2mm" class="titulo bold">Dados adicionais</div>
<table>

    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:92mm;">
            <span>Obervaçãoes</span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-top:1px solid; width:92mm">
            <span>Reservado ao fisco</span>
        </td>

    </tr>
    <tr>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:92mm; height: 30mm">
            <!-- Obervaçãoes -->
            <span><?php echo $dadosNFe['observacoes'][0] ?></span>
        </td>
        <td style="border-left:1px solid; border-right:1px solid; border-bottom:1px solid; width:92mm">
            <!-- Reservado ao fisco -->
            <span></span>
        </td>

    </tr>

</table>

</body>
