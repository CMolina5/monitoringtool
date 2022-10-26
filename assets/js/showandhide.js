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

    //Multiple Select for FHE Category
    function btnDeleteFHECategory() {
        if ($('input[name="fhe_category_checkbox"]:checked').length > 0) {
            $('#btn-delete-fhe-category').html('');
            $('#btn-delete-fhe-category').append('REMOVE CATEGORY (' + $('input[name="fhe_category_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-fhe-category').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="fhe_category_checkbox"]', function () {
        if ($('input[name="fhe_category_checkbox"]').length == $('input[name="fhe_category_checkbox"]:checked').length) {
            $('input[name="main_fhe_category_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_fhe_category_checkbox"]').prop('checked', false);
        }
        btnDeleteFHECategory();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_fhe_category_checkbox]', function () {
        if (this.checked) {
            $('input[name="fhe_category_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="fhe_category_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteFHECategory();
    });

    //Multiple Select for FHE Dropouts
    function btnDeleteFHEDropouts() {
        if ($('input[name="fhe_dropouts_checkbox"]:checked').length > 0) {
            $('#btn-delete-fhe-dropouts').html('');
            $('#btn-delete-fhe-dropouts').append('REMOVE DROP OUTS (' + $('input[name="fhe_dropouts_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-fhe-dropouts').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="fhe_dropouts_checkbox"]', function () {
        if ($('input[name="fhe_dropouts_checkbox"]').length == $('input[name="fhe_dropouts_checkbox"]:checked').length) {
            $('input[name="main_fhe_dropouts_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_fhe_dropouts_checkbox"]').prop('checked', false);
        }
        btnDeleteFHEDropouts();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_fhe_dropouts_checkbox]', function () {
        if (this.checked) {
            $('input[name="fhe_dropouts_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="fhe_dropouts_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteFHEDropouts();
    });

    //Multiple Select for FHE Loa
    function btnDeleteFHELoa() {
        if ($('input[name="fhe_loa_checkbox"]:checked').length > 0) {
            $('#btn-delete-fhe-loa').html('');
            $('#btn-delete-fhe-loa').append('REMOVE LOA (' + $('input[name="fhe_loa_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-fhe-loa').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="fhe_loa_checkbox"]', function () {
        if ($('input[name="fhe_loa_checkbox"]').length == $('input[name="fhe_loa_checkbox"]:checked').length) {
            $('input[name="main_fhe_loa_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_fhe_loa_checkbox"]').prop('checked', false);
        }
        btnDeleteFHELoa();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_fhe_loa_checkbox]', function () {
        if (this.checked) {
            $('input[name="fhe_loa_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="fhe_loa_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteFHELoa();
    });

    //Multiple Select for TES Category
    function btnDeleteTESCategory() {
        if ($('input[name="tes_category_checkbox"]:checked').length > 0) {
            $('#btn-delete-tes-category').html('');
            $('#btn-delete-tes-category').append('REMOVE CATEGORY (' + $('input[name="tes_category_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-tes-category').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="tes_category_checkbox"]', function () {
        if ($('input[name="tes_category_checkbox"]').length == $('input[name="tes_category_checkbox"]:checked').length) {
            $('input[name="main_tes_category_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_tes_category_checkbox"]').prop('checked', false);
        }
        btnDeleteTESCategory();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_tes_category_checkbox]', function () {
        if (this.checked) {
            $('input[name="tes_category_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="tes_category_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteTESCategory();
    });

    //Multiple Select for TES Dropouts
    function btnDeleteTESDropouts() {
        if ($('input[name="tes_dropouts_checkbox"]:checked').length > 0) {
            $('#btn-delete-tes-dropouts').html('');
            $('#btn-delete-tes-dropouts').append('REMOVE DROP OUTS (' + $('input[name="tes_dropouts_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-tes-dropouts').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="tes_dropouts_checkbox"]', function () {
        if ($('input[name="tes_dropouts_checkbox"]').length == $('input[name="tes_dropouts_checkbox"]:checked').length) {
            $('input[name="main_tes_dropouts_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_tes_dropouts_checkbox"]').prop('checked', false);
        }
        btnDeleteTESDropouts();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_tes_dropouts_checkbox]', function () {
        if (this.checked) {
            $('input[name="tes_dropouts_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="tes_dropouts_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteTESDropouts();
    });

    //Multiple Select for TES Loa
    function btnDeleteTESLoa() {
        if ($('input[name="tes_loa_checkbox"]:checked').length > 0) {
            $('#btn-delete-tes-loa').html('');
            $('#btn-delete-tes-loa').append('REMOVE LOA (' + $('input[name="tes_loa_checkbox"]:checked').length + ')').removeClass('d-none');
        } else {
            $('#btn-delete-tes-loa').addClass('d-none');
        }
    }

    //all checkbox in a page is checked
    $(document).on('change', 'input[name="tes_loa_checkbox"]', function () {
        if ($('input[name="tes_loa_checkbox"]').length == $('input[name="tes_loa_checkbox"]:checked').length) {
            $('input[name="main_tes_loa_checkbox"]').prop('checked', true);
        } else {
            $('input[name="main_tes_loa_checkbox"]').prop('checked', false);
        }
        btnDeleteTESLoa();
    });

    //Main check box is checked
    $(document).on('click', 'input[name=main_tes_loa_checkbox]', function () {
        if (this.checked) {
            $('input[name="tes_loa_checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[name="tes_loa_checkbox"]').each(function () {
                this.checked = false;
            });
        }
        btnDeleteTESLoa();
    });

//Multiple Select for TDP Dropouts
function btnDeleteTDPDropouts() {
    if ($('input[name="tdp_dropouts_checkbox"]:checked').length > 0) {
        $('#btn-delete-tdp-dropouts').html('');
        $('#btn-delete-tdp-dropouts').append('REMOVE DROP OUTS (' + $('input[name="tdp_dropouts_checkbox"]:checked').length + ')').removeClass('d-none');
    } else {
        $('#btn-delete-tdp-dropouts').addClass('d-none');
    }
}

//all checkbox in a page is checked
$(document).on('change', 'input[name="tdp_dropouts_checkbox"]', function () {
    if ($('input[name="tdp_dropouts_checkbox"]').length == $('input[name="tdp_dropouts_checkbox"]:checked').length) {
        $('input[name="main_tdp_dropouts_checkbox"]').prop('checked', true);
    } else {
        $('input[name="main_tdp_dropouts_checkbox"]').prop('checked', false);
    }
    btnDeleteTDPDropouts();
});

//Main check box is checked
$(document).on('click', 'input[name=main_tdp_dropouts_checkbox]', function () {
    if (this.checked) {
        $('input[name="tdp_dropouts_checkbox"]').each(function () {
            this.checked = true;
        });
    } else {
        $('input[name="tdp_dropouts_checkbox"]').each(function () {
            this.checked = false;
        });
    }
    btnDeleteTDPDropouts();
});

//Multiple Select for TDP Loa
function btnDeleteTDPLoa() {
    if ($('input[name="tdp_loa_checkbox"]:checked').length > 0) {
        $('#btn-delete-tdp-loa').html('');
        $('#btn-delete-tdp-loa').append('REMOVE LOA (' + $('input[name="tdp_loa_checkbox"]:checked').length + ')').removeClass('d-none');
    } else {
        $('#btn-delete-tdp-loa').addClass('d-none');
    }
}

//all checkbox in a page is checked
$(document).on('change', 'input[name="tdp_loa_checkbox"]', function () {
    if ($('input[name="tdp_loa_checkbox"]').length == $('input[name="tdp_loa_checkbox"]:checked').length) {
        $('input[name="main_tdp_loa_checkbox"]').prop('checked', true);
    } else {
        $('input[name="main_tdp_loa_checkbox"]').prop('checked', false);
    }
    btnDeleteTDPLoa();
});

//Main check box is checked
$(document).on('click', 'input[name=main_tdp_loa_checkbox]', function () {
    if (this.checked) {
        $('input[name="tdp_loa_checkbox"]').each(function () {
            this.checked = true;
        });
    } else {
        $('input[name="tdp_loa_checkbox"]').each(function () {
            this.checked = false;
        });
    }
    btnDeleteTDPLoa();
});

});