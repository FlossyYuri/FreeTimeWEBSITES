$(document).ready(function () {
    var subs = JSON.parse($('#subs').text());
    var info = JSON.parse($('#info_ad').text());

    $('.uploads').sortable();

    $('select[name=categoria]').change(function (e) {
        e.preventDefault();
        $('select[name=subcategoria]').removeAttr('disabled');
        var subs_options = '<option disabled selected>Selecione a subcategoria do produto</option><br>';
        subs.forEach(element => {
            if (element.referencia == $('select[name=categoria]').val()) {
                subs_options += "<option class=\"left\" value='" + element.id + "'> " + element.valor + "</option> <br>";
            }
        });
        $('select[name=subcategoria]').html(subs_options);
        $('select[name=subcategoria]').formSelect();
    });
    $('select[name=subcategoria]').change(function (e) {
        e.preventDefault();
        if (info != null) {
            var info_options = '<div class="card-panel purple white-text col"><h5 class="">Informações especificas</h5><div class="row">';
            info.forEach(element => {
                if (element.referencia == $('select[name=subcategoria]').val()) {
                    info_options += "<div class='input-field col s6 m4 l3'>" +
                        "<input type='text' id='autocomplete-" + element.valor.toLowerCase() + "' class='" + element.valor.toLowerCase() + "'>" +
                        "<label class='' for='autocomplete-" + element.valor.toLowerCase() + "'>Marca</label>" +
                        "</div>";
                }
            });
            info_options += '</div></div>';
            $('.dados-variaveis').html(info_options);
        }
    });


    $(".imagens").change(function (e) {
        var file = $(this)[0].files[0];
        if(file.size/ 1024000 >= 4){
            Swal.fire(
                'Imagem inválida',
                'A imagem inserida é muito grande. Cada imagem deve ter menos de 4MB.',
                'error'
            );
        }else{
            var id = $(this).attr('id');
            previewImagem(file, "#" + id + "-");
            $('.uploaded' + id[id.length - 1] + ' .indice').text((id[id.length - 1]));

        }
        
        // var reader = new FileReader();
        // //Read the contents of Image File.
        // reader.readAsDataURL($(this)[0].files[0]);
        // reader.onload = function (e) {

        //     //Initiate the JavaScript Image object.
        //     var image = new Image();

        //     //Set the Base64 string return from FileReader as source.
        //     image.src = e.target.result;

        //     //Validate the File Height and Width.
        //     image.onload = function () {
        //         return true;
        //     };
        // }

    });
    // $("input[name='imagens[]']").change(function (e) {
    //     for (let index = 0; index < 6; index++) {
    //         previewImagem($(this)[0].files[index], '.uploaded' + index + ' img');
    //         if (index < $(this)[0].files.length) {
    //             $('.uploaded' + index + ' .indice').text((index + 1));
    //         } else {
    //             $('.uploaded' + index + ' .indice').text('-');
    //         }
    //     }
    // });

    $('input[name=imagens]').change(function (e) {
        console.log("yes");
        // const ficheiro = $(this)[0].files[0];
        // const leitorFicheiro = new FileReader();
        // leitorFicheiro.onloadend = function () {
        //     $('.uploaded img').attr('src', leitorFicheiro.result);
        // }
        // leitorFicheiro.readAsDataURL(ficheiro);
    });

    $('textarea#descricao,input#titulo_anuncio').characterCounter();

    $('input.marca').autocomplete({
        data: {
            "Gucci": null,
            "Adidas": null,
            "Nike": 'https://placehold.it/250x250'
        },
    });
    $('input.tipo').autocomplete({
        data: {
            "Calça": null,
            "Blusa": null,
            "vestido": 'https://placehold.it/250x250'
        },
    });
    $('input.tamanho').autocomplete({
        data: {
            "S": null,
            "M": null,
            "L": 'https://placehold.it/250x250'
        },
    });
    $('input.estado').autocomplete({
        data: {
            "Novo com Etiqueta": null,
            "Novo sem Etiqueta": null,
            "Em bom estado": 'https://placehold.it/250x250'
        },
    });
    $('form#anunciar').submit(function (e) {
        e.preventDefault();
        var uri = $('#base').val() + 'usuario/cadastrar_anuncio';
        var formData = new FormData(this);
        $.ajax({
            url: uri,
            method: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                Swal.fire({
                    title: 'Criando Anuncio...',
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                    },
                });

            },
            complete: function () {
                Swal.close();
            },
            success: function (result) {
                var resultado = JSON.parse(result);
                console.log(result);
                switch (resultado.type) {
                    case 'validacao':
                        var e = resultado.message.split("|");
                        e.forEach(element => {
                            if (element.charAt(0) != '' && element.charAt(0) != '\n')
                                M.toast({ html: element, displayLength: 5000, classes: 'rounded' });
                        });
                        break;
                    case 'sessao':
                        M.toast({ html: "This aint no fucking Disney MOTHERFUCKER", displayLength: 5000, classes: 'rounded' });
                        break;
                    case 'fotos':
                        var e = resultado.message.split("|");
                        e.forEach(element => {
                            if (element.charAt(0) != '' && element.charAt(0) != '\n')
                                M.toast({ html: element, displayLength: 5000, classes: 'rounded' });
                        });
                        break;
                    case 'ok':
                        console.log(resultado.message);
                        window.location.href = resultado.message;
                        break;
                    default:
                        M.toast({ html: "nothing happened", displayLength: 5000, classes: 'rounded' });
                        console.log("nothing happened");
                }
            }
        });
    });

});