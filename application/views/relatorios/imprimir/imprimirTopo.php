<?php if ($emitente[0]): ?>
    <div>
        <br>
        <div style="width: 60%; float: left; margin-top:-15px" class="float-left col-md-2">
            <img style="width: 180px" src="<?= $emitente[0]->url_logo; ?>" alt=""><br><br>
        </div>
        <div style="float: right">
            <b><?= $emitente[0]->empresa ?></b> <br> <b>CNPJ: </b> <?= $emitente[0]->cnpj ?><br>
            <b>END.: </b> <?= $emitente[0]->ruaEmitente ?>, <?= $emitente[0]->numeroEmitente ?>, <?= $emitente[0]->bairroEmitente ?>, <?= $emitente[0]->cidadeEmitente ?> - <?= $emitente[0]->estado ?> <br>

            <?php if (isset($title)): ?>
                <b>RELATÓRIO: </b> <?= $title ?> <br>
            <?php endif ?>

            <?php if (isset($dataInicial)): ?>
                <b>DATA INICIAL: </b> <?= $dataInicial ?>
            <?php endif ?>

            <?php if (isset($dataFinal)): ?>
                <b>DATA FINAL: </b> <?= $dataFinal ?>
            <?php endif ?>
        </div>
    </div>
<?php endif ?>
