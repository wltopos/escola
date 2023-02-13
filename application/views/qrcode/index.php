<link rel="stylesheet" href="<?= base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/uploadImage.css" />
<style>
    .uploaded_file_view img {
        max-width: 45%;
    }

    .file_uploading {
        width: 87%;

    }

    .button_outer.file_uploading.file_uploaded {
        width: 8%;
    }

    .uploaded_file_view {
        margin: 10px 2px;
    }

    video {
        margin-left: 51px;
        margin-bottom: 26px;
        width: 40em;
    }
    #selectCam{
        margin-left: 3em;
    }
</style>

<div class="row-fluid" style="margin-top:0">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-hdd"></i>
                </span>
                <h5>Cadastro de Notas Fiscais</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <?= $custom_error ?>
                <video id="preview"></video>
                <select id='selectCam' onchange="selectCamera(this.value)">
                    <option>Selecione a camera</option>
                </select>
                <p id="resposta">Aguardando Scan</p>

            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>assets/js/uploadImagem.js"></script>
<script type="text/javascript">
    
    
    let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
    });
    scanner.addListener('scan', function(content) {
        alert('Escaneou o conteudo: ' + content);
        window.open(content, "_blank");
    });
    Instascan.Camera.getCameras().then(cameras => {
        console.log(cameras);

        $.each(cameras, function(index, camera) {
            console.log(camera.name);
            $('#selectCam').append(`<option value="${index}">${camera.name}</option>`);
            // Will stop running after "three"

        });
        function selectCamera(idCamera = 0){
        console.log(idCamera);
        if (cameras.length > 0) {
            
            scanner.start(cameras[1]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    }
        
    });
</script>