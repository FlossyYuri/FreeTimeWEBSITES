$(document).ready(function () {
  const ordem = {
    recent: true,
    preco: true,
    views: true,
  };
  const filterPrice = (anuncio) => {
    const min = Number($("#preco-min").val())
    const max = Number($("#preco-max").val())
    if (min && max) {
      return (
        anuncio.preco >= min &&
        anuncio.preco <= max
      );
    } else if (min)
      return anuncio.preco >= min;
    else return anuncio.preco <= max;
  };

  let anuncios = data.anuncios;

  $("#preco-min").blur(function () {
    data.anuncios = anuncios.filter(filterPrice);
  });
  $("#preco-max").blur(function () {
    data.anuncios = anuncios.filter(filterPrice);
  });

  $("a#recent").click(function () {
    const ordemUpRecent = (a, b) => Date.parse(a.data) - Date.parse(b.data);
    const ordemDownRecent = (a, b) => Date.parse(b.data) - Date.parse(a.data);
    if (ordem.recent) {
      data.anuncios.sort(ordemUpRecent);
      ordem.recent = false;
    } else {
      data.anuncios.sort(ordemDownRecent);
      ordem.recent = true;
    }
    listarProdutos();
  });
  $("a#views").click(function () {
    const ordemUpViews = (a, b) => a.views - b.views;
    const ordemDownViews = (a, b) => b.views - a.views;
    if (ordem.views) {
      data.anuncios.sort(ordemUpViews);
      ordem.views = false;
    } else {
      data.anuncios.sort(ordemDownViews);
      ordem.views = true;
    }
    listarProdutos();
  });
  $("a#preco").click(function () {
    const ordemUpPreco = (a, b) => a.preco - b.preco;
    const ordemDownPreco = (a, b) => b.preco - a.preco;
    if (ordem.preco) {
      data.anuncios.sort(ordemUpPreco);
      ordem.preco = false;
    } else {
      data.anuncios.sort(ordemDownPreco);
      ordem.preco = true;
    }
    listarProdutos();
  });

  $("a#listagem").click(function () {
    if (data.tipo_cartao == "vertical_complete") {
      data.tipo_cartao = "horizontal_half";
    } else {
      data.tipo_cartao = "vertical_complete";
    }
    listarProdutos();
  });

  const listarProdutos = function () {
    $.ajax({
      url: url,
      method: "POST",
      data: { dados: data },
      beforeSend: function () {
        $(".loader-bg").addClass("dis-bl");
      },
      complete: function () {
        $(".loader-bg").removeClass("dis-bl");
      },
      success: function (result) {
        $("#painelListagem").html(result);
      },
    });
  };
});
