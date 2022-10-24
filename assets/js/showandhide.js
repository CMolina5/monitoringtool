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

    $("input.fhe_loa").change(function () {
        if ($(this).is(':checked')) {
            $("#fhe_loa_div").show(300);
        } else {
            $("#fhe_loa_div").hide(300);
        }
    }).change();

    $("input.tes_loa").change(function () {
        if ($(this).is(':checked')) {
            $("#tes_loa_div").show(300);
        } else {
            $("#tes_loa_div").hide(300);
        }
    }).change();

    $("input.tdp_loa").change(function () {
        if ($(this).is(':checked')) {
            $("#tdp_loa_div").show(300);
        } else {
            $("#tdp_loa_div").hide(300);
        }
    }).change();

    //Multiple Select for Degree Program
    function btnDeleteProgram() {
        if ($('input[name="degree_program_checkbox"]:checked').length > 0) {
            $('#btn-delete-program').html('');
            $('#btn-delete-program').append('REMOVE PROGRAM (' + $('input[name="degree_program_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-program').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="degree_program_checkbox"]', function () {
        if ($('input[name="degree_program_checkbox"]').length == $('input[name="degree_program_checkbox"]:checked').length) {
            $('input[name="main_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_checkbox"]').prop('checked', false);
        }
        btnDeleteProgram();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_checkbox]', function () {
        if (this.checked) {
            $('input[name="degree_program_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="degree_program_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteProgram();
    });


    //Multiple Select for Other StuFAP
    function btnDeleteOtherStufap() {
        if ($('input[name="other_stufap_checkbox"]:checked').length > 0) {
            $('#btn-delete-other-stufap').html('');
            $('#btn-delete-other-stufap').append('REMOVE STUFAP (' + $('input[name="other_stufap_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-other-stufap').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="other_stufap_checkbox"]', function () {
        if ($('input[name="other_stufap_checkbox"]').length == $('input[name="other_stufap_checkbox"]:checked').length) {
            $('input[name="main_other_stufap_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_other_stufap_checkbox"]').prop('checked', false);
        }
        btnDeleteOtherStufap();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_other_stufap_checkbox]', function () {
        if (this.checked) {
            $('input[name="other_stufap_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="other_stufap_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteOtherStufap();
    });

});