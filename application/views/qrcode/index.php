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
        width: 85%;
    }

    #selectCam {
        margin-left: 3em;
    }

    #resposta {
        text-align: center;
        margin: 0 auto;
        font-size: 12px;
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
                <form class="form-horizontal">
                    <input type="hidden" value="" id="fornecedor_id" name="fornecedor_id">
                    <div class="control-group">

                        <div class="controls">
                            <label for="userfile" class="control-label"><span class="required">Scan de url do sistema</span></label>

                            <select id='camera-select'>
                                <option>Selecione a camera</option>
                            </select>
                            <button id="flashButton">Ativar flash</button>
                            <button id="flash-toggle">Acender/Apagar flash</button>
                            </a>
                            <video id="preview"></video>
                            <p id="resposta">Aguardando Scan</p>




                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?= base_url() ?>assets/js/uploadImagem.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var $cameraSelect = $("#camera-select");
        var $preview = $("#preview");
        var $flash = $("#flash");

        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {

                cameras.forEach(function(camera, index) {
                    var option = $("<option>", {
                        value: camera.id,
                        text: camera.name || "Camera " + (index + 1)
                    });
                    $cameraSelect.append(option);
                    $cameraSelect.change(camera.id);
                });

                $cameraSelect.on("change", function() {
                    var selectedCameraId = this.value;
                    var selectedCamera = cameras.find(function(camera) {
                        return camera.id === selectedCameraId;
                    });
                    var scanner = new Instascan.Scanner({
                        video: $preview[0],
                        mirror: false,
                        backgroundScan: false,
                        captureImage: false,
                        refractoryPeriod: 5000,
                        scanPeriod: 1,

                    });
                    scanner.start(selectedCamera);
                    $('#flashButton').click(function() {
                        if (scanner.torch) {
                            scanner.stop();
                            scanner.start(selectedCameraId);
                        } else {
                            scanner.stop();
                            scanner.start(selectedCameraId, {
                                torch: true
                            });
                        }
                    });
                    scanner.addListener('scan', function(content) {
                        $('#resposta').html(`Escaneou o conteudo: <a href="${content}" target="_blank">${content}</a>`);
                        window.open(content, "_blank");
                    });
                });

            } else {
                console.error("Nenhuma câmera encontrada.");
            }
        });


    });
</script>

<!-- <script type="text/javascript">
$(document).ready(function() {
    var selectedCameraId;
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            selectedCameraId = cameras[0].id;
            for (var i = 0; i < cameras.length; i++) {
                $('#cameraSelect').append($('<option>', {
                    value: cameras[i].id,
                    text: cameras[i].name
                }));
            }
        } else {
            console.error('No cameras found.');
        }
    }).catch(function (e) {
        console.error(e);
    });
    $('#cameraSelect').on('change', function() {
        selectedCameraId = this.value;
        console.log(selectedCameraId);
        scanner.start(selectedCameraId);
    });
    var scanner = new Instascan.Scanner({
        video: document.getElementById('preview'),
        mirror: false,
        backgroundScan: true,
        captureImage: false,
        refractoryPeriod: 5000,
        scanPeriod: 1,
        videoSource: selectedCameraId
    });
    scanner.addListener('scan', function (content) {
        $('#resposta').append(content + '<br>');
    });
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]);
        } else {
            console.error('No cameras found.');
        }
    }).catch(function (e) {
        console.error(e);
    });
    
    $('#flashButton').click(function () {
        if (scanner.torch) {
            scanner.stop();
            scanner.start(selectedCameraId);
        } else {
            scanner.stop();
            scanner.start(selectedCameraId, { torch: true });
        }
    });
});
</script> -->
