//tbl_program_offerings
$(document).ready(function () {
    $('#tbl_program_offerings').DataTable({
        "order": [[0, "desc"]],
        "lengthChange": false,
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_program_offerings').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.degree_programs',
        // title: 'Total Beneficiaries',
        url: "includes/heiprofile/inc_update_degree_programs.php",
        type: "POST",
        // min: 0,
        // placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        // defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    $('#tbl_other_stufaps').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true,
    });

    $('#tbl_other_stufaps').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.other_stufap_name',
        // title: 'Total Beneficiaries',
        url: "includes/heiprofile/inc_update_other_stufap.php",
        type: "POST",
        // min: 0,
        // placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        // defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    $('#tbl_other_stufaps').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.select_type',
        // title: 'Total Beneficiaries',
        url: "includes/heiprofile/inc_update_other_stufap.php",
        type: "POST",
        // value : 'Local',
        source: [
            {value: 'Local', text: 'Local'},
            {value: 'National', text: 'National'},
         ],
        // min: 0,
        // placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        // defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    $('#tbl_other_stufaps').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/heiprofile/inc_update_other_stufap.php",
        type: "POST",
        // value : 'Local',
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_list_of_forms
    $('#tbl_list_of_forms').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    //tbl_list_programs_fhe
    $('#tbl_programs_fhe').DataTable({
        "order": [[0, "desc"]],
        "lengthChange": false,
        "pageLength": 5,
        orderCellsTop: true,
        fixedHeader: true,
        
    });

    // $('#tbl_programs_fhe').Tabledit({
    //     editButton: false,
    //     deleteButton: false,
    //  columns:{
    //     identifier: [0, 'id'],
    //   editable:[[2, 'first_name']]
    //  }
    // });

    $('#tbl_programs_fhe').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_stufap_fhe_update_degree_programs.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        toggle: 'dblclick',
        defaultValue: 0,
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    $('#tbl_fhe_category').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_fhe_category').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_stufap_fhe_update_category.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_fhe_dropouts
    $('#tbl_fhe_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_fhe_dropouts').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_fhe_update_dropouts.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

     //tbl_fhe_loa
     $('#tbl_fhe_loa').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_fhe_loa').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_fhe_update_loa.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_tes_loa
    $('#tbl_tes_loa').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_tes_loa').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tes_update_loa.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_tdp_loa
    $('#tbl_tdp_loa').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_tdp_loa').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tdp_update_loa.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_tes_category
    $('#tbl_tes_category').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_tes_category').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tes_update_category.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_programs_tes
    $('#tbl_programs_tes').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_programs_tes').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tes_update_program_2.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_tes_dropouts
    $('#tbl_tes_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_tes_dropouts').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tes_update_dropouts.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_programs_tdp
    $('#tbl_programs_tdp').DataTable({
        "order": [[0, "desc"]],
        "lengthChange": false,
        "pageLength": 5,
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_programs_tdp').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tdp_update_program_2.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });

    //tbl_tdp_dropouts
    $('#tbl_tdp_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_tdp_dropouts').editable({
        mode: 'inline',
        container: 'body',
        selector: 'td.beneficiaries',
        // title: 'Total Beneficiaries',
        url: "includes/stufap/inc_tdp_update_dropouts.php",
        type: "POST",
        min: 0,
        placeholder: 'No. of Beneficiaries',
        // showbuttons: false,
        defaultValue: 0,
        toggle: 'dblclick',
        //dataType: 'json',
        validate: function (value) {
            if ($.trim(value) == '') {
                return 'This field is required';
            }
        }
    });
});//end tag