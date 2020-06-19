$(document).ready(function () {
    $('input[name=fotoperfil]').change(function (e) {
        previewImagem(this.files[0], '#imgPerfil');

    });



    $('form#perfil').submit(function (e) {
        e.preventDefault();
        if ($('input[name=fotoperfil]')[0].files.length > 0) {
            var uri = $('#base').val() + 'usuario/atualizar_perfil';
            const formdata = new FormData();
            formdata.append('fotoperfil', $('#campoFoto')[0].files[0]);
            $.ajax({
                url: uri,
                method: 'POST',
                data: formdata,
                cache: false,
                beforeSend: function () {
                    $(".loader-bg").addClass("dis-bl");
                },
                complete: function () {
                    $(".loader-bg").removeClass("dis-bl");
                },
                processData: false,
                contentType: false,
                success: function (result) {
                    M.toast({ html: result, displayLength: 2000, classes: 'rounded' });
                    location.reload(); 
                }
            });
        }else{
            M.toast({ html: "Selecione uma imagem", displayLength: 2000, classes: 'rounded' });
        }
    });
});