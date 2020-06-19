$(document).ready(function () {
	$("a.btn2[val]").click(function (e) {
		e.preventDefault();
		$("#modalMPESA").modal("show");
		const price = Number(e.target.getAttribute("val"));
		document.querySelector("#modalMPESA .pague span").innerHTML =
			price + " MZN";
	});

	$("a#pagar").click(function (e) {
		e.preventDefault();
		$('#modalMPESA').modal('hide')
		$("#modalCupom").modal("show");

	});
});
