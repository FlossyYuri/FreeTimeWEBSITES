$(document).ready(function () {

    $('form#login').submit(function (e) {
        e.preventDefault();
        var uri = $('#base').val() + 'usuario/entrar';
        $.ajax({
            url: uri,
            method: 'POST',
            beforeSend: function () {
                $(".loader-bg").addClass("dis-bl");
            },
            complete: function () {
                $(".loader-bg").removeClass("dis-bl");
            },
            data: $('form#login').serialize(),
            success: function (result) {
                console.log(result);
                if (result.indexOf('|') == -1) {
                    window.location.href = result;
                } else {
                    var e = result.split("|");
                    e.forEach(element => {
                        if (element.charAt(0) != '' && element.charAt(0) != '\n') {
                            M.toast({ html: element, displayLength: 5000, classes: 'rounded' });
                        }
                    });
                }
            }
        });
    });

    //Form Registrar
    $('form#registro').submit(function (e) {
        e.preventDefault();
        if ($('#cbxTermos').is(":checked")) {
            var uri = $('#base').val() + 'usuario/cadastrar';
            $.ajax({
                url: uri,
                method: 'POST',
                data: $('form#registro').serialize(),
                beforeSend: function () {
                    $(".loader-bg").addClass("dis-bl");
                },
                complete: function () {
                    $(".loader-bg").removeClass("dis-bl");
                },
                success: function (result) {
                    if (result.indexOf('|') == -1) {
                        window.location.href = result;
                    } else {
                        var e = result.split("|");
                        e.forEach(element => {
                            if (element.charAt(0) != '' && element.charAt(0) != '\n') {
                                M.toast({ html: element, displayLength: 5000, classes: 'rounded' });
                            }
                        });
                    }
                }
            });
        } else
            M.toast({ html: "Precisa concordar com os termos e condições. Marque a caixa de validação.", displayLength: 5000, classes: 'rounded' });
    });

});

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var userID = profile.getId();
    var userName = profile.getName();
    var userImg = profile.getImageUrl();
    var userEmail = profile.getEmail();
    var userToken = googleUser.getAuthResponse().id_token;
    if (userName !== '') {
        var dados = {
            userID: userID,
            userName: userName,
            userImg: userImg,
            userEmail: userEmail,
            userToken: userToken
        };
        var uri = $('#base').val() + 'User_auth';
        console.log(uri);
        // $.post(uri, dados,
        //     function (retorno) {
        //         M.toast({ html: retorno, displayLength: 5000, classes: 'rounded' });
        //     }
        // );
    } else {
        console.log("ERRORI");
    }



}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}
