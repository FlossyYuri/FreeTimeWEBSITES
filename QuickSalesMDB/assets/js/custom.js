const previewImagem = function (inputField, img_destino) {
  const uri = $("#base").val() + "assets/img/add-image.png";
  if (inputField != null) {
    const ficheiro = inputField;
    const leitorFicheiro = new FileReader();
    leitorFicheiro.onloadend = function () {
      $(img_destino).attr("src", leitorFicheiro.result);
    };
    leitorFicheiro.readAsDataURL(ficheiro);
  } else {
    $(img_destino).attr("src", uri);
  }
};

$(document).ready(function () {
  M.AutoInit();
  // inicializar caroussel
  $(".carousel").carousel();
  $(".materialboxed").materialbox();
  $(".carousel.carousel-slider").carousel({
    fullWidth: true,
    indicators: true,
    constrainWidth: false,
  });
  $(".dropdown-trigger").dropdown({
    coverTrigger: false,
    alignment: "right",
  });
  $(".tabs").tabs({
    swipeable: true,
    duration: 500,
  });

  $(".modal").modal();

  $("input.localizacoes").autocomplete({
    data: {
      Magoanine: null,
      Baixa: null,
      Zimpeto: null,
    },
  });
  let cont = 0;

  $("input.pesquisa-text").keydown(function () {
    // let uri = $('#base').val() + 'principal/pesquisa/' + $('input#search').val();
    // autoComplete(uri, false)
  });

  $("input.pesquisa-text").keydown(function (e) {
    if (e.keyCode == 13) {
      e.preventDefault();
      const uri =
        $("#base").val() + "principal/pesquisaView/" + $("input#search").val();
      window.location.href = uri;
    }
  });

  $(".open-categorias").click(function (e) {
    let inst = M.Sidenav.getInstance(this);
    inst.open();
  });

  function autoComplete(url, update) {
    $.ajax({
      type: "GET",
      url: url,
      success: function (response) {
        autoCompleteSuccess(response, update);
      },
    });
  }

  function autoCompleteSuccess(response, update) {
    let nameArray = JSON.parse(response);

    let dataName = {};

    for (let i = 0; i < nameArray.length; i++) {
      dataName[nameArray[i].titulo] = null;
    }

    if (update) {
      const pozycje_autocomplete = document.querySelector(
        "input.pesquisa-text"
      );
      let instance = M.Autocomplete.getInstance(pozycje_autocomplete);

      instance.updateData(dataName);
    } else {
      $("input.pesquisa-text").autocomplete({
        data: dataName,
        limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
      });
    }
  }
  $(".btn-filtro").click(function () {
    $(".btn-filtro").removeClass("active");
    $(this).addClass("active");
  });
  $(".btn-list").click(function () {
    $(".btn-list").toggleClass("active");
  });
});
