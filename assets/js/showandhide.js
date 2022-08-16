$(document).ready(function () {
    $("input.fhe_dropouts").change(function () {
        if ($(this).is(':checked')) {
            $("#fhe_dropouts_div").show(300);
        } else {
            $("#fhe_dropouts_div").hide(300);
        }
    }).change();

    $("input.tes_dropouts").change(function () {
        if ($(this).is(':checked')) {
            $("#tes_dropouts_div").show(300);
        } else {
            $("#tes_dropouts_div").hide(300);
        }
    }).change();

    $("input.tdp_dropouts").change(function () {
        if ($(this).is(':checked')) {
            $("#tdp_dropouts_div").show(300);
        } else {
            $("#tdp_dropouts_div").hide(300);
        }
    }).change();
});