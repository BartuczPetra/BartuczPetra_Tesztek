$(function() {
    let tesztek = "/tesztek";
    let kategoriak = "/api/kategoriak";
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new Ajax(token);

    ajax.getAjax(tesztek, adatbeolvas);

    const szuloElem = $(".szulo");
    const sablonElem = $(".sablon");

    function adatbeolvas(tomb) {
        $(".szulo").empty();
        tomb.forEach(function(adat) {
            if (adat.kategoriaId == $(".kategoriaSelect").val()) {
                let ujElem = sablonElem.clone().appendTo(szuloElem);
                const teszt = new Teszt(ujElem, adat);
                console.log(adat);
            }
        });
    }
    sablonElem.remove();



    this.kategoriaSelect = $(".kategoriaSelect")

    ajax.getAjax(kategoriak, optionKategoriaFeltolt);

    function optionKategoriaFeltolt(tomb) {
        console.log(tomb);
        tomb.forEach((element) => {
            $(".kategoriaSelect").append(
                `<option value='${element.id}'>${element.kategorianev}</option>`
            );
        });
    }

    $(".kategoriaSelect").on("change", function() {
        ajax.getAjax(tesztek, adatbeolvas);
    });

    $(window).on("valaszKattintas", (event) => {
        let adat = event.detail;
        console.log(adat);
    });
});