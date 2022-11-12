let imgLogo = $('#urlLogo').val();
let btnUpload = $("#upload_file");
let btnOuter = $(".button_outer");



if (imgLogo != '' && imgLogo != undefined) {

    $("#uploaded_view").append('<img src="' + imgLogo + '" />').addClass("show");
}


btnUpload.on("change", function (e) {
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
    var ext = btnUpload.val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg', 'pdf', 'xml']) == -1) {
        $(".error_msg").text("Not an Image...");
    } else {
        $(".error_msg").text("");
        btnOuter.addClass("file_uploading");
        setTimeout(function () {
            btnOuter.addClass("file_uploaded");
        }, 3000);
        var uploadedFile = URL.createObjectURL(e.target.files[0]);
        setTimeout(function () {
            $("#uploaded_view").append('<img src="' + uploadedFile + '" />').addClass("show");

        }, 3500);
    }
});
$(".file_remove").on("click", function (e) {
    $("#uploaded_view").removeClass("show");
    $("#uploaded_view").find("img").remove();
    btnOuter.removeClass("file_uploading");
    btnOuter.removeClass("file_uploaded");
    btnUpload.val("");

});