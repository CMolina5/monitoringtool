$(document).ready(function () {
    //STUFAP PART

    //select degree program from table and display to modal
    $(document).on('click', '.edit_data_fhe', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_stufap_select_degree_programs.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#program_name').val(data.program_name);

                $('#total_fhe_1sem_1yr_male').val(data.total_fhe_1sem_1yr_male);
                $('#total_fhe_1sem_1yr_female').val(data.total_fhe_1sem_1yr_female);
                $('#total_fhe_1sem_2yr_male').val(data.total_fhe_1sem_2yr_male);
                $('#total_fhe_1sem_2yr_female').val(data.total_fhe_1sem_2yr_female);
                $('#total_fhe_1sem_3yr_male').val(data.total_fhe_1sem_3yr_male);
                $('#total_fhe_1sem_3yr_female').val(data.total_fhe_1sem_3yr_female);
                $('#total_fhe_1sem_4yr_male').val(data.total_fhe_1sem_4yr_male);
                $('#total_fhe_1sem_4yr_female').val(data.total_fhe_1sem_4yr_female);
                $('#total_fhe_1sem_5yr_male').val(data.total_fhe_1sem_5yr_male);
                $('#total_fhe_1sem_5yr_female').val(data.total_fhe_1sem_5yr_female);
                $('#total_fhe_1sem_6yr_male').val(data.total_fhe_1sem_6yr_male);
                $('#total_fhe_1sem_6yr_female').val(data.total_fhe_1sem_6yr_female);
                
                $('#total_fhe_2sem_1yr_male').val(data.total_fhe_2sem_1yr_male);
                $('#total_fhe_2sem_1yr_female').val(data.total_fhe_2sem_1yr_female);
                $('#total_fhe_2sem_2yr_male').val(data.total_fhe_2sem_2yr_male);
                $('#total_fhe_2sem_2yr_female').val(data.total_fhe_2sem_2yr_female);
                $('#total_fhe_2sem_3yr_male').val(data.total_fhe_2sem_3yr_male);
                $('#total_fhe_2sem_3yr_female').val(data.total_fhe_2sem_3yr_female);
                $('#total_fhe_2sem_4yr_male').val(data.total_fhe_2sem_4yr_male);
                $('#total_fhe_2sem_4yr_female').val(data.total_fhe_2sem_4yr_female);
                $('#total_fhe_2sem_5yr_male').val(data.total_fhe_2sem_5yr_male);
                $('#total_fhe_2sem_5yr_female').val(data.total_fhe_2sem_5yr_female);
                $('#total_fhe_2sem_6yr_male').val(data.total_fhe_2sem_6yr_male);
                $('#total_fhe_2sem_6yr_female').val(data.total_fhe_2sem_6yr_female);

                $('#total_fhe_3sem_1yr_male').val(data.total_fhe_3sem_1yr_male);
                $('#total_fhe_3sem_1yr_female').val(data.total_fhe_3sem_1yr_female);
                $('#total_fhe_3sem_2yr_male').val(data.total_fhe_3sem_2yr_male);
                $('#total_fhe_3sem_2yr_female').val(data.total_fhe_3sem_2yr_female);
                $('#total_fhe_3sem_3yr_male').val(data.total_fhe_3sem_3yr_male);
                $('#total_fhe_3sem_3yr_female').val(data.total_fhe_3sem_3yr_female);
                $('#total_fhe_3sem_4yr_male').val(data.total_fhe_3sem_4yr_male);
                $('#total_fhe_3sem_4yr_female').val(data.total_fhe_3sem_4yr_female);
                $('#total_fhe_3sem_5yr_male').val(data.total_fhe_3sem_5yr_male);
                $('#total_fhe_3sem_5yr_female').val(data.total_fhe_3sem_5yr_female);
                $('#total_fhe_3sem_6yr_male').val(data.total_fhe_3sem_6yr_male);
                $('#total_fhe_3sem_6yr_female').val(data.total_fhe_3sem_6yr_female);

                $('#total_fhe_sum_mid_1yr_male').val(data.total_fhe_sum_mid_1yr_male);
                $('#total_fhe_sum_mid_1yr_female').val(data.total_fhe_sum_mid_1yr_female);
                $('#total_fhe_sum_mid_2yr_male').val(data.total_fhe_sum_mid_2yr_male);
                $('#total_fhe_sum_mid_2yr_female').val(data.total_fhe_sum_mid_2yr_female);
                $('#total_fhe_sum_mid_3yr_male').val(data.total_fhe_sum_mid_3yr_male);
                $('#total_fhe_sum_mid_3yr_female').val(data.total_fhe_sum_mid_3yr_female);
                $('#total_fhe_sum_mid_4yr_male').val(data.total_fhe_sum_mid_4yr_male);
                $('#total_fhe_sum_mid_4yr_female').val(data.total_fhe_sum_mid_4yr_female);
                $('#total_fhe_sum_mid_5yr_male').val(data.total_fhe_sum_mid_5yr_male);
                $('#total_fhe_sum_mid_5yr_female').val(data.total_fhe_sum_mid_5yr_female);
                $('#total_fhe_sum_mid_6yr_male').val(data.total_fhe_sum_mid_6yr_male);
                $('#total_fhe_sum_mid_6yr_female').val(data.total_fhe_sum_mid_6yr_female);

                $('#total_fhe_graduated_male').val(data.total_fhe_graduated_male);
                $('#total_fhe_graduated_female').val(data.total_fhe_graduated_female);
                $('#total_fhe_exceeded_mrr_male').val(data.total_fhe_exceeded_mrr_male);
                $('#total_fhe_exceeded_mrr_female').val(data.total_fhe_exceeded_mrr_female);
                $('#add_program_fhe_modal').modal({backdrop: 'static', keyboard: false},'show')
            }
        })
    });

    //update degree program to the table fhe
    $('#add_program_fhe_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_stufap_fhe_update_degree_programs.php",
            method: "POST",
            data: $('#add_program_fhe_form').serialize(),
            success: function (data) {
                $('#tbl_programs_fhe_div').html(data);
                $('#add_program_fhe_form')[0].reset();
                $('#add_program_fhe_modal').modal('hide');

                $('#tbl_programs_fhe').DataTable({
                    "order": [[0, "desc"]],
                    "lengthChange": false,
                    "pageLength": 5,
                    orderCellsTop: true,
                    fixedHeader: true,
                    "deferRender": true,
                    scrollX: 200,
                    scrollY: false,
                    scrollCollapse: true,
                    // scroller: true,
                    fixedColumns:   {
                        left: 1,
                        right: 1
                    },
                    columnDefs: [
                        { orderable: false, targets: -1 }
                     ]
                })

                $('#tbl_programs_fhe').editable({
                    mode: 'inline',
                    container: 'body',
                    selector: 'td.beneficiaries',
                    // title: 'Total Beneficiaries',
                    url: "includes/stufap/inc_stufap_fhe_update_degree_programs_1.php",
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
                
                Swal.fire(
                    'Success!',
                    'You updated a record!',
                    'success'
                )
            }
            
        });
    });

    //FHE Category Part
    //add fhe category to the table

    // $('#add_fhe_category_modal').on('shown.bs.modal', function (event) {
    //     var es = document.getElementById("#fhe_category");
    //     var values = es.values;
    //     alert(values);
    //     alert(es);
    //     // if(value === '' || value === null){
    //     //     document.getElementById("btn_fhe_category_save").disabled = true;
    //     // }else{
    //     //     document.getElementById("btn_fhe_category_save").disabled = false;
    //     // }
    // })
    
    $('#add_fhe_category_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#fhe_category').val() === null || $('#fhe_category').val() === "") || (($('#total_fhe_1st_male').val() === "" || $('#total_fhe_1st_male').val() === null) && ($('#total_fhe_2nd_male').val() === "" || $('#total_fhe_2nd_male').val() === null) && ($('#total_fhe_3rd_male').val() === "" || $('#total_fhe_3rd_male').val() === null) && ($('#total_fhe_sum_mid_male').val() === "" || $('#total_fhe_sum_mid_male').val() === null) && ($('#total_fhe_1st_female').val() === "" || $('#total_fhe_1st_female').val() === null) && ($('#total_fhe_2nd_female').val() === "" || $('#total_fhe_2nd_female').val() === null) && ($('#total_fhe_3rd_female').val() === "" || $('#total_fhe_3rd_female').val() === null) && ($('#total_fhe_sum_mid_female').val() === "" || $('#total_fhe_sum_mid_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a category and the no. of beneficiaries to continue!',
                'warning'
              )
        }else{
        $.ajax({
            url: "includes/stufap/inc_fhe_add_category.php",//php file
            method: "POST",
            data: $('#add_fhe_category_form').serialize(),//modal form id
            success: function (data) {
                // alert($('#fhe_category').val());
                // alert($('#total_fhe_1st_male').val());
                // console.log($('#fhe_category').val());
                $('#tbl_fhe_category_div').html(data);//table div id
                $('#add_fhe_category_form')[0].reset();//modal form id
                $('#add_fhe_category_modal_body').load(' #add_fhe_category_modal_body');//modal content id
                $('#add_fhe_category_modal').modal('hide');//modal id

                $('#tbl_fhe_category').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [{
                        "targets": 0,
                        "orderable": false
                    }]

                })

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
            }
        });
    }
    });

    //FHE Add Dropouts
    //add reason for dropouts to the table
    $('#add_dropouts_fhe').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#fhe_drop_reason').val() === null || $('#fhe_drop_reason').val() === "") || (($('#fhe_drop_1st_male').val() === "" || $('#fhe_drop_1st_male').val() === null) && ($('#fhe_drop_2nd_male').val() === "" || $('#fhe_drop_2nd_male').val() === null) && ($('#fhe_drop_3rd_male').val() === "" || $('#fhe_drop_3rd_male').val() === null) && ($('#fhe_drop_summer_midyear_male').val() === "" || $('#fhe_drop_summer_midyear_male').val() === null) && ($('#fhe_drop_1st_female').val() === "" || $('#fhe_drop_1st_female').val() === null) && ($('#fhe_drop_2nd_female').val() === "" || $('#fhe_drop_2nd_female').val() === null) && ($('#fhe_drop_3rd_female').val() === "" || $('#fhe_drop_3rd_female').val() === null) && ($('#fhe_drop_summer_midyear_female').val() === "" || $('#fhe_drop_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for dropping and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#fhe_drop_reason').val() === "Others" && $('#fhe_drop_other').val() === "") && ($('#fhe_drop_2nd_male').val() === "" || $('#fhe_drop_2nd_male').val() === null) && ($('#fhe_drop_3rd_male').val() === "" || $('#fhe_drop_3rd_male').val() === null) && ($('#fhe_drop_summer_midyear_male').val() === "" || $('#fhe_drop_summer_midyear_male').val() === null) && ($('#fhe_drop_1st_female').val() === "" || $('#fhe_drop_1st_female').val() === null) && ($('#fhe_drop_2nd_female').val() === "" || $('#fhe_drop_2nd_female').val() === null) && ($('#fhe_drop_3rd_female').val() === "" || $('#fhe_drop_3rd_female').val() === null) && ($('#fhe_drop_summer_midyear_female').val() === "" || $('#fhe_drop_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for dropping.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_fhe_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_fhe_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_fhe_dropouts_div').html(data);//table div id
                $('#add_dropouts_fhe_form')[0].reset();//modal form id
                $('#add_dropouts_fhe').modal('hide');//modal id

                $('#tbl_fhe_dropouts').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });

    //FHE Add LOA
    //add reason for loa to the table
    $('#add_loa_fhe').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#fhe_loa_reason').val() === null || $('#fhe_loa_reason').val() === "") || (($('#fhe_loa_1st_male').val() === "" || $('#fhe_loa_1st_male').val() === null) && ($('#fhe_loa_2nd_male').val() === "" || $('#fhe_loa_2nd_male').val() === null) && ($('#fhe_loa_3rd_male').val() === "" || $('#fhe_loa_3rd_male').val() === null) && ($('#fhe_loa_summer_midyear_male').val() === "" || $('#fhe_loa_summer_midyear_male').val() === null) && ($('#fhe_loa_1st_female').val() === "" || $('#fhe_loa_1st_female').val() === null) && ($('#fhe_loa_2nd_female').val() === "" || $('#fhe_loa_2nd_female').val() === null) && ($('#fhe_loa_3rd_female').val() === "" || $('#fhe_loa_3rd_female').val() === null) && ($('#fhe_loa_summer_midyear_female').val() === "" || $('#fhe_loa_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for loa and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#fhe_loa_reason').val() === "Others" && $('#fhe_loa_other').val() === "") && ($('#fhe_loa_2nd_male').val() === "" || $('#fhe_loa_2nd_male').val() === null) && ($('#fhe_loa_3rd_male').val() === "" || $('#fhe_loa_3rd_male').val() === null) && ($('#fhe_loa_summer_midyear_male').val() === "" || $('#fhe_loa_summer_midyear_male').val() === null) && ($('#fhe_loa_1st_female').val() === "" || $('#fhe_loa_1st_female').val() === null) && ($('#fhe_loa_2nd_female').val() === "" || $('#fhe_loa_2nd_female').val() === null) && ($('#fhe_loa_3rd_female').val() === "" || $('#fhe_loa_3rd_female').val() === null) && ($('#fhe_loa_summer_midyear_female').val() === "" || $('#fhe_loa_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for loa.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_fhe_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_fhe_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_fhe_loa_div').html(data);//table div id
                $('#add_loa_fhe_form')[0].reset();//modal form id
                $('#add_loa_fhe').modal('hide');//modal id

                $('#tbl_fhe_loa').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });

    //TES Add LOA
    //add reason for loa to the table
    $('#add_loa_tes').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tes_loa_reason').val() === null || $('#tes_loa_reason').val() === "") || (($('#tes_loa_1st_male').val() === "" || $('#tes_loa_1st_male').val() === null) && ($('#tes_loa_2nd_male').val() === "" || $('#tes_loa_2nd_male').val() === null) && ($('#tes_loa_3rd_male').val() === "" || $('#tes_loa_3rd_male').val() === null) && ($('#tes_loa_summer_midyear_male').val() === "" || $('#tes_loa_summer_midyear_male').val() === null) && ($('#tes_loa_1st_female').val() === "" || $('#tes_loa_1st_female').val() === null) && ($('#tes_loa_2nd_female').val() === "" || $('#tes_loa_2nd_female').val() === null) && ($('#tes_loa_3rd_female').val() === "" || $('#tes_loa_3rd_female').val() === null) && ($('#tes_loa_summer_midyear_female').val() === "" || $('#tes_loa_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for loa and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#tes_loa_reason').val() === "Others" && $('#tes_loa_other').val() === "") && ($('#tes_loa_2nd_male').val() === "" || $('#tes_loa_2nd_male').val() === null) && ($('#tes_loa_3rd_male').val() === "" || $('#tes_loa_3rd_male').val() === null) && ($('#tes_loa_summer_midyear_male').val() === "" || $('#tes_loa_summer_midyear_male').val() === null) && ($('#tes_loa_1st_female').val() === "" || $('#tes_loa_1st_female').val() === null) && ($('#tes_loa_2nd_female').val() === "" || $('#tes_loa_2nd_female').val() === null) && ($('#tes_loa_3rd_female').val() === "" || $('#tes_loa_3rd_female').val() === null) && ($('#tes_loa_summer_midyear_female').val() === "" || $('#tes_loa_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for loa.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_tes_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_loa_div').html(data);//table div id
                $('#add_loa_tes_form')[0].reset();//modal form id
                $('#add_loa_tes').modal('hide');//modal id

                $('#tbl_tes_loa').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });

    //TDP Add LOA
    //add reason for loa to the table
    $('#add_loa_tdp').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tdp_loa_reason').val() === null || $('#tdp_loa_reason').val() === "") || (($('#tdp_loa_1st_male').val() === "" || $('#tdp_loa_1st_male').val() === null) && ($('#tdp_loa_2nd_male').val() === "" || $('#tdp_loa_2nd_male').val() === null) && ($('#tdp_loa_3rd_male').val() === "" || $('#tdp_loa_3rd_male').val() === null) && ($('#tdp_loa_summer_midyear_male').val() === "" || $('#tdp_loa_summer_midyear_male').val() === null) && ($('#tdp_loa_1st_female').val() === "" || $('#tdp_loa_1st_female').val() === null) && ($('#tdp_loa_2nd_female').val() === "" || $('#tdp_loa_2nd_female').val() === null) && ($('#tdp_loa_3rd_female').val() === "" || $('#tdp_loa_3rd_female').val() === null) && ($('#tdp_loa_summer_midyear_female').val() === "" || $('#tdp_loa_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for loa and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#tdp_loa_reason').val() === "Others" && $('#tdp_loa_other').val() === "") && ($('#tdp_loa_2nd_male').val() === "" || $('#tdp_loa_2nd_male').val() === null) && ($('#tdp_loa_3rd_male').val() === "" || $('#tdp_loa_3rd_male').val() === null) && ($('#tdp_loa_summer_midyear_male').val() === "" || $('#tdp_loa_summer_midyear_male').val() === null) && ($('#tdp_loa_1st_female').val() === "" || $('#tdp_loa_1st_female').val() === null) && ($('#tdp_loa_2nd_female').val() === "" || $('#tdp_loa_2nd_female').val() === null) && ($('#tdp_loa_3rd_female').val() === "" || $('#tdp_loa_3rd_female').val() === null) && ($('#tdp_loa_summer_midyear_female').val() === "" || $('#tdp_loa_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for loa.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_tdp_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tdp_loa_div').html(data);//table div id
                $('#add_loa_tdp_form')[0].reset();//modal form id
                $('#add_loa_tdp').modal('hide');//modal id

                $('#tbl_tdp_loa').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });


    /*--------------------------------------------------------------------------------------------*/
    //TES Category Part
    //add tes category to the table
    $('#add_tes_category_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tes_category').val() === null || $('#tes_category').val() === "") || (($('#total_tes_1st_male').val() === "" || $('#total_tes_1st_male').val() === null) && ($('#total_tes_1st_female').val() === "" || $('#total_tes_1st_female').val() === null) && ($('#total_tes_2nd_male').val() === "" || $('#total_tes_2nd_male').val() === null) && ($('#total_tes_2nd_female').val() === "" || $('#total_tes_2nd_female').val() === null) && ($('#total_tes_3rd_male').val() === "" || $('#total_tes_3rd_male').val() === null) && ($('#total_tes_3rd_female').val() === "" || $('#total_tes_3rd_female').val() === null) && ($('#total_tes_summer_midyear_male').val() === "" || $('#total_tes_summer_midyear_male').val() === null) && ($('#total_tes_summer_midyear_female').val() === "" || $('#total_tes_summer_midyear_female').val() === null) &&
        ($('#total_pwd_1st_male').val() === "" || $('#total_pwd_1st_male').val() === null) && ($('#total_pwd_1st_female').val() === "" || $('#total_pwd_1st_female').val() === null) && ($('#total_pwd_2nd_male').val() === "" || $('#total_pwd_2nd_male').val() === null) && ($('#total_pwd_2nd_female').val() === "" || $('#total_pwd_2nd_female').val() === null) && ($('#total_pwd_3rd_male').val() === "" || $('#total_pwd_3rd_male').val() === null) && ($('#total_pwd_3rd_female').val() === "" || $('#total_pwd_3rd_female').val() === null) && ($('#total_pwd_summer_midyear_male').val() === "" || $('#total_pwd_summer_midyear_male').val() === null) && ($('#total_pwd_summer_midyear_female').val() === "" || $('#total_pwd_summer_midyear_female').val() === null) &&
        ($('#total_ip_1st_male').val() === "" || $('#total_ip_1st_male').val() === null) && ($('#total_ip_1st_female').val() === "" || $('#total_ip_1st_female').val() === null) && ($('#total_ip_2nd_male').val() === "" || $('#total_ip_2nd_male').val() === null) && ($('#total_ip_2nd_female').val() === "" || $('#total_ip_2nd_female').val() === null) && ($('#total_ip_3rd_male').val() === "" || $('#total_ip_3rd_male').val() === null) && ($('#total_ip_3rd_female').val() === "" || $('#total_ip_3rd_female').val() === null) && ($('#total_ip_summer_midyear_male').val() === "" || $('#total_ip_summer_midyear_male').val() === null) && ($('#total_ip_summer_midyear_female').val() === "" || $('#total_ip_summer_midyear_female').val() === null) &&
        ($('#total_with_board_1st_male').val() === "" || $('#total_with_board_1st_male').val() === null) && ($('#total_with_board_1st_female').val() === "" || $('#total_with_board_1st_female').val() === null) && ($('#total_with_board_2nd_male').val() === "" || $('#total_with_board_2nd_male').val() === null) && ($('#total_with_board_2nd_female').val() === "" || $('#total_with_board_2nd_female').val() === null) && ($('#total_with_board_3rd_male').val() === "" || $('#total_with_board_3rd_male').val() === null) && ($('#total_with_board_3rd_female').val() === "" || $('#total_with_board_3rd_female').val() === null) && ($('#total_with_board_summer_midyear_male').val() === "" || $('#total_with_board_summer_midyear_male').val() === null) && ($('#total_with_board_summer_midyear_female').val() === "" || $('#total_with_board_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a category and the no. of grantees to continue!',
                'warning'
              )
        }else{
        $.ajax({
            url: "includes/stufap/inc_tes_add_category.php",//php file
            method: "POST",
            data: $('#add_tes_category_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_category_div').html(data);//table div id
                $('#add_tes_category_form')[0].reset();//modal form id
                $('#add_tes_category_modal_body').load(' #add_tes_category_modal_body');//modal content id
                $('#add_tes_category_modal').modal('hide');//modal id

                $('#tbl_tes_category').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ],
                    "deferRender": true,
                    scrollX: 200,
                    scrollY: false,
                    scrollCollapse: true,
                    // scroller: true,
                    fixedColumns:   {
                        left: 2
                    }
                })

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

            }
        });
    }
    });

    /*--------------------------------------------------------------------------------------------*/
    //TES Program Part
    //add tes program to the table**
    $('#add_program_tes_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tes_program_name').val() === null || $('#tes_program_name').val() === "") || (($('#total_tes_mrr_male').val() === "" || $('#total_tes_mrr_male').val() === null) && ($('#total_tes_mrr_female').val() === "" || $('#total_tes_mrr_female').val() === null) && ($('#total_tes_est_grad_male').val() === "" || $('#total_tes_est_grad_male').val() === null) && ($('#total_tes_est_grad_female').val() === "" || $('#total_tes_est_grad_female').val() === null))){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a category and the no. of grantees to continue!',
                'warning'
              )
        }else{
        $.ajax({
            url: "includes/stufap/inc_tes_update_program.php",//php file
            method: "POST",
            data: $('#add_program_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_programs_tes_div').html(data);//table div id
                $('#add_program_tes_form')[0].reset();//modal form id
                $('#add_program_tes_modal_body').load(' #add_program_tes_modal_body');//modal id
                $('#add_program_tes_modal').modal('hide');//modal id

                $('#tbl_programs_tes').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });

    //update tes program to the table tes
    $('#edit_program_tes_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tes_update_program_2.php",//php file
            method: "POST",
            data: $('#edit_program_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_programs_tes_div').html(data);//table div id
                $('#edit_program_tes_form')[0].reset();//modal form id
                $('#add_program_tes_modal_body').load(' #add_program_tes_modal_body');//modal id
                $('#edit_program_tes_modal').modal('hide');//modal id

                $('#tbl_programs_tes').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    });


    /*--------------------------------------------------------------------------------------------*/
    //TDP Program Part
    //add tdp program to the table**
    $('#add_program_tdp_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tdp_program_name').val() === null || $('#tdp_program_name').val() === "") || (($('#total_tdp_1sem_1yr_male').val() === "" || $('#total_tdp_1sem_1yr_male').val() === null) && ($('#total_tdp_1sem_1yr_female').val() === "" || $('#total_tdp_1sem_1yr_female').val() === null) && ($('#total_tdp_1sem_2yr_male').val() === "" || $('#total_tdp_1sem_2yr_male').val() === null) && ($('#total_tdp_1sem_2yr_female').val() === "" || $('#total_tdp_1sem_2yr_female').val() === null) && ($('#total_tdp_1sem_3yr_male').val() === "" || $('#total_tdp_1sem_3yr_male').val() === null) && ($('#total_tdp_1sem_3yr_female').val() === "" || $('#total_tdp_1sem_3yr_female').val() === null) && ($('#total_tdp_1sem_4yr_male').val() === "" || $('#total_tdp_1sem_4yr_male').val() === null) && ($('#total_tdp_1sem_4yr_female').val() === "" || $('#total_tdp_1sem_4yr_female').val() === null) && ($('#total_tdp_1sem_5yr_male').val() === "" || $('#total_tdp_1sem_5yr_male').val() === null) && ($('#total_tdp_1sem_5yr_female').val() === "" || $('#total_tdp_1sem_5yr_female').val() === null) && ($('#total_tdp_1sem_6yr_male').val() === "" || $('#total_tdp_1sem_6yr_male').val() === null) && ($('#total_tdp_1sem_6yr_female').val() === "" || $('#total_tdp_1sem_6yr_female').val() === null) && 
        ($('#total_tdp_2sem_1yr_male').val() === "" || $('#total_tdp_2sem_1yr_male').val() === null) && ($('#total_tdp_2sem_1yr_female').val() === "" || $('#total_tdp_2sem_1yr_female').val() === null) && ($('#total_tdp_2sem_2yr_male').val() === "" || $('#total_tdp_2sem_2yr_male').val() === null) && ($('#total_tdp_2sem_2yr_female').val() === "" || $('#total_tdp_2sem_2yr_female').val() === null) && ($('#total_tdp_2sem_3yr_male').val() === "" || $('#total_tdp_2sem_3yr_male').val() === null) && ($('#total_tdp_2sem_3yr_female').val() === "" || $('#total_tdp_2sem_3yr_female').val() === null) && ($('#total_tdp_2sem_4yr_male').val() === "" || $('#total_tdp_2sem_4yr_male').val() === null) && ($('#total_tdp_2sem_4yr_female').val() === "" || $('#total_tdp_2sem_4yr_female').val() === null) && ($('#total_tdp_2sem_5yr_male').val() === "" || $('#total_tdp_2sem_5yr_male').val() === null) && ($('#total_tdp_2sem_5yr_female').val() === "" || $('#total_tdp_2sem_5yr_female').val() === null) && ($('#total_tdp_2sem_6yr_male').val() === "" || $('#total_tdp_2sem_6yr_male').val() === null) && ($('#total_tdp_2sem_6yr_female').val() === "" || $('#total_tdp_2sem_6yr_female').val() === null) &&
        ($('#total_tdp_3sem_1yr_male').val() === "" || $('#total_tdp_3sem_1yr_male').val() === null) && ($('#total_tdp_3sem_1yr_female').val() === "" || $('#total_tdp_3sem_1yr_female').val() === null) && ($('#total_tdp_3sem_2yr_male').val() === "" || $('#total_tdp_3sem_2yr_male').val() === null) && ($('#total_tdp_3sem_2yr_female').val() === "" || $('#total_tdp_3sem_2yr_female').val() === null) && ($('#total_tdp_3sem_3yr_male').val() === "" || $('#total_tdp_3sem_3yr_male').val() === null) && ($('#total_tdp_3sem_3yr_female').val() === "" || $('#total_tdp_3sem_3yr_female').val() === null) && ($('#total_tdp_3sem_4yr_male').val() === "" || $('#total_tdp_3sem_4yr_male').val() === null) && ($('#total_tdp_3sem_4yr_female').val() === "" || $('#total_tdp_3sem_4yr_female').val() === null) && ($('#total_tdp_3sem_5yr_male').val() === "" || $('#total_tdp_3sem_5yr_male').val() === null) && ($('#total_tdp_3sem_5yr_female').val() === "" || $('#total_tdp_3sem_5yr_female').val() === null) && ($('#total_tdp_3sem_6yr_male').val() === "" || $('#total_tdp_3sem_6yr_male').val() === null) && ($('#total_tdp_3sem_6yr_female').val() === "" || $('#total_tdp_3sem_6yr_female').val() === null) &&
        ($('#total_tdp_sum_mid_1yr_male').val() === "" || $('#total_tdp_sum_mid_1yr_male').val() === null) && ($('#total_tdp_sum_mid_1yr_female').val() === "" || $('#total_tdp_sum_mid_1yr_female').val() === null) && ($('#total_tdp_sum_mid_2yr_male').val() === "" || $('#total_tdp_sum_mid_2yr_male').val() === null) && ($('#total_tdp_sum_mid_2yr_female').val() === "" || $('#total_tdp_sum_mid_2yr_female').val() === null) && ($('#total_tdp_sum_mid_3yr_male').val() === "" || $('#total_tdp_sum_mid_3yr_male').val() === null) && ($('#total_tdp_sum_mid_3yr_female').val() === "" || $('#total_tdp_sum_mid_3yr_female').val() === null) && ($('#total_tdp_sum_mid_4yr_male').val() === "" || $('#total_tdp_sum_mid_4yr_male').val() === null) && ($('#total_tdp_sum_mid_4yr_female').val() === "" || $('#total_tdp_sum_mid_4yr_female').val() === null) && ($('#total_tdp_sum_mid_5yr_male').val() === "" || $('#total_tdp_sum_mid_5yr_male').val() === null) && ($('#total_tdp_sum_mid_5yr_female').val() === "" || $('#total_tdp_sum_mid_5yr_female').val() === null) && ($('#total_tdp_sum_mid_6yr_male').val() === "" || $('#total_tdp_sum_mid_6yr_male').val() === null) && ($('#total_tdp_sum_mid_6yr_female').val() === "" || $('#total_tdp_sum_mid_6yr_female').val() === null) &&
        ($('#total_tdp_graduated_male').val() === "" || $('#total_tdp_graduated_male').val() === null) &&
        ($('#total_tdp_graduated_female').val() === "" || $('#total_tdp_graduated_female').val() === null) &&
        ($('#total_tdp_exceeded_mrr_male').val() === "" || $('#total_tdp_exceeded_mrr_male').val() === null) &&
        ($('#total_tdp_exceeded_mrr_female').val() === "" || $('#total_tdp_exceeded_mrr_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a program and the no. of beneficiaries to continue!',
                'warning'
              )
        }else{
        $.ajax({
            url: "includes/stufap/inc_tdp_update_program.php",//php file
            method: "POST",
            data: $('#add_program_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_programs_tdp_div').html(data);//table div id
                $('#add_program_tdp_form')[0].reset();//modal form id
                $('#add_program_tdp_modal_body').load(' #add_program_tdp_modal_body');//modal content id
                $('#add_program_tdp_modal').modal('hide');//modal id

                $('#tbl_programs_tdp').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    "lengthChange": false,
                    "pageLength": 5,
                    orderCellsTop: true,
                    fixedHeader: true,         
                    "columnDefs": [{
                        "targets": 0,
                        "orderable": false
                    }],
                    "deferRender": true,
                    scrollX: 200,
                    scrollY: false,
                    scrollCollapse: true,
                    // scroller: true,
                    fixedColumns:   {
                        left: 2
                    }
                })

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

            }
        });
    }
    });


    /*--------------------------------------------------------------------------------------------*/
    //tdp dropouts part
    //add reason for tdp dropouts
    $('#add_dropouts_tdp_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tdp_drop_reason').val() === null || $('#tdp_drop_reason').val() === "") || (($('#tdp_drop_1st_male').val() === "" || $('#tdp_drop_1st_male').val() === null) && ($('#tdp_drop_2nd_male').val() === "" || $('#tdp_drop_2nd_male').val() === null) && ($('#tdp_drop_3rd_male').val() === "" || $('#tdp_drop_3rd_male').val() === null) && ($('#tdp_drop_summer_midyear_male').val() === "" || $('#tdp_drop_summer_midyear_male').val() === null) && ($('#tdp_drop_1st_female').val() === "" || $('#tdp_drop_1st_female').val() === null) && ($('#tdp_drop_2nd_female').val() === "" || $('#tdp_drop_2nd_female').val() === null) && ($('#tdp_drop_3rd_female').val() === "" || $('#tdp_drop_3rd_female').val() === null) && ($('#tdp_drop_summer_midyear_female').val() === "" || $('#tdp_drop_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for dropping and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#tdp_drop_reason').val() === "Others" && $('#tdp_drop_other').val() === "") && ($('#tdp_drop_2nd_male').val() === "" || $('#tdp_drop_2nd_male').val() === null) && ($('#tdp_drop_3rd_male').val() === "" || $('#tdp_drop_3rd_male').val() === null) && ($('#tdp_drop_summer_midyear_male').val() === "" || $('#tdp_drop_summer_midyear_male').val() === null) && ($('#tdp_drop_1st_female').val() === "" || $('#tdp_drop_1st_female').val() === null) && ($('#tdp_drop_2nd_female').val() === "" || $('#tdp_drop_2nd_female').val() === null) && ($('#tdp_drop_3rd_female').val() === "" || $('#tdp_drop_3rd_female').val() === null) && ($('#tdp_drop_summer_midyear_female').val() === "" || $('#tdp_drop_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for dropping.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_tdp_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tdp_dropouts_div').html(data);//table div id
                $('#add_dropouts_tdp_form')[0].reset();//modal form id
                $('#add_dropouts_tdp_modal').modal('hide');//modal id

                $('#tbl_tdp_dropouts').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });
    
    //tes dropouts part
    //add reason for tes dropouts
    $('#add_dropouts_tes_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        if(($('#tes_drop_reason').val() === null || $('#tes_drop_reason').val() === "") || (($('#tes_drop_1st_male').val() === "" || $('#tes_drop_1st_male').val() === null) && ($('#tes_drop_2nd_male').val() === "" || $('#tes_drop_2nd_male').val() === null) && ($('#tes_drop_3rd_male').val() === "" || $('#tes_drop_3rd_male').val() === null) && ($('#tes_drop_summer_midyear_male').val() === "" || $('#tes_drop_summer_midyear_male').val() === null) && ($('#tes_drop_1st_female').val() === "" || $('#tes_drop_1st_female').val() === null) && ($('#tes_drop_2nd_female').val() === "" || $('#tes_drop_2nd_female').val() === null) && ($('#tes_drop_3rd_female').val() === "" || $('#tes_drop_3rd_female').val() === null) && ($('#tes_drop_summer_midyear_female').val() === "" || $('#tes_drop_summer_midyear_female').val() === null) )){
            // console.log($('#gr_no').val() + $('#copc_no').val());
            Swal.fire(
                'You missed something!',
                'Please select a reason for dropping and the no. of beneficiaries to continue!',
                'warning'
              )
        }else if(($('#tes_drop_reason').val() === "Others" && $('#tes_drop_other').val() === "") && ($('#tes_drop_2nd_male').val() === "" || $('#tes_drop_2nd_male').val() === null) && ($('#tes_drop_3rd_male').val() === "" || $('#tes_drop_3rd_male').val() === null) && ($('#tes_drop_summer_midyear_male').val() === "" || $('#tes_drop_summer_midyear_male').val() === null) && ($('#tes_drop_1st_female').val() === "" || $('#tes_drop_1st_female').val() === null) && ($('#tes_drop_2nd_female').val() === "" || $('#tes_drop_2nd_female').val() === null) && ($('#tes_drop_3rd_female').val() === "" || $('#tes_drop_3rd_female').val() === null) && ($('#tes_drop_summer_midyear_female').val() === "" || $('#tes_drop_summer_midyear_female').val() === null)) {
            Swal.fire(
                'You missed something!',
                'Please specify reason for dropping.',
                'warning'
            )
        }
        else{
        $.ajax({
            url: "includes/stufap/inc_tes_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_dropouts_div').html(data);//table div id
                $('#add_dropouts_tes_form')[0].reset();//modal form id
                $('#add_dropouts_tes_modal').modal('hide');//modal id

                $('#tbl_tes_dropouts').DataTable({//datatable id
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [ {
                        "targets": 0,
                        "orderable": false
                        } ]
                })

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

            }
        });
    }
    });

    //delete fhe category to the table
    $('#remove_fhe_category_modal').on('submit', function (event) {
        event.preventDefault();
        var checkedCategory = [];
        $($('input[name="fhe_category_checkbox"]:checked')).each(function () {
            checkedCategory.push($(this).val());
        });
        let uid = checkedCategory;
        $.ajax({
            url: "includes/stufap/inc_fhe_remove_category.php",
            type: "POST",
            data: {
                uid: uid
            },
            // dataType: "json",
            success: function (data) {
                $('#tbl_fhe_category_div').html(data);

                $('#tbl_fhe_category').DataTable({
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [{
                        "targets": 0,
                        "orderable": false
                    }]
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
                $('#btn-delete-fhe-category').addClass('d-none');
                $('#add_fhe_category_form')[0].reset();//modal form id
                $('#add_fhe_category_modal_body').load(' #add_fhe_category_modal_body');//modal content id
                $('#remove_fhe_category_modal').modal('hide')
            }
        });
    });

    //delete fhe dropouts to the table
    $('#remove_fhe_dropouts_modal').on('submit', function (event) {
        event.preventDefault();
        var checkedDropouts = [];
        $($('input[name="fhe_dropouts_checkbox"]:checked')).each(function () {
            checkedDropouts.push($(this).val());
        });
        let uid = checkedDropouts;
        $.ajax({
            url: "includes/stufap/inc_fhe_remove_dropouts.php",
            type: "POST",
            data: {
                uid: uid
            },
            // dataType: "json",
            success: function (data) {
                $('#tbl_fhe_dropouts_div').html(data);

                $('#tbl_fhe_dropouts').DataTable({
                    "order": [[1, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "columnDefs": [{
                        "targets": 0,
                        "orderable": false
                    }]
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
                $('#btn-delete-fhe-dropouts').addClass('d-none');
                $('#remove_fhe_dropouts_modal').modal('hide')
            }
        });
    });

//delete fhe loa to the table
$('#remove_fhe_loa_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedLoa = [];
    $($('input[name="fhe_loa_checkbox"]:checked')).each(function () {
        checkedLoa.push($(this).val());
    });
    let uid = checkedLoa;
    $.ajax({
        url: "includes/stufap/inc_fhe_remove_loa.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_fhe_loa_div').html(data);

            $('#tbl_fhe_loa').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
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
            $('#btn-delete-fhe-loa').addClass('d-none');
            $('#remove_fhe_loa_modal').modal('hide')
        }
    });
});

//delete tes category to the table
$('#remove_tes_category_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedCategory = [];
    $($('input[name="tes_category_checkbox"]:checked')).each(function () {
        checkedCategory.push($(this).val());
    });
    let uid = checkedCategory;
    $.ajax({
        url: "includes/stufap/inc_tes_remove_category.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_tes_category_div').html(data);

            $('#tbl_tes_category').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
            });

            $('#tbl_tes_category').editable({
                mode: 'inline',
                container: 'body',
                selector: 'td.beneficiaries',
                // title: 'Total Beneficiaries',
                url: "includes/stufap/inc_stufap_tes_update_category.php",
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
            $('#btn-delete-tes-category').addClass('d-none');
            $('#add_tes_category_form')[0].reset();//modal form id
            $('#add_tes_category_modal_body').load(' #add_tes_category_modal_body');//modal content id
            $('#remove_tes_category_modal').modal('hide')
        }
    });
});

  //delete tes dropouts to the table
  $('#remove_tes_dropouts_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedDropouts = [];
    $($('input[name="tes_dropouts_checkbox"]:checked')).each(function () {
        checkedDropouts.push($(this).val());
    });
    let uid = checkedDropouts;
    $.ajax({
        url: "includes/stufap/inc_tes_remove_dropouts.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_tes_dropouts_div').html(data);

            $('#tbl_tes_dropouts').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
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
            $('#btn-delete-tes-dropouts').addClass('d-none');
            $('#remove_tes_dropouts_modal').modal('hide')
        }
    });
});

//delete tes loa to the table
$('#remove_tes_loa_modal').on('submit', function (event) {
event.preventDefault();
var checkedLoa = [];
$($('input[name="tes_loa_checkbox"]:checked')).each(function () {
    checkedLoa.push($(this).val());
});
let uid = checkedLoa;
$.ajax({
    url: "includes/stufap/inc_tes_remove_loa.php",
    type: "POST",
    data: {
        uid: uid
    },
    // dataType: "json",
    success: function (data) {
        $('#tbl_tes_loa_div').html(data);

        $('#tbl_tes_loa').DataTable({
            "order": [[1, "desc"]],
            orderCellsTop: true,
            fixedHeader: true,
            "columnDefs": [{
                "targets": 0,
                "orderable": false
            }]
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
        $('#btn-delete-tes-loa').addClass('d-none');
        $('#remove_tes_loa_modal').modal('hide')
    }
});
});

//delete tdp dropouts to the table
$('#remove_tdp_dropouts_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedDropouts = [];
    $($('input[name="tdp_dropouts_checkbox"]:checked')).each(function () {
        checkedDropouts.push($(this).val());
    });
    let uid = checkedDropouts;
    $.ajax({
        url: "includes/stufap/inc_tdp_remove_dropouts.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_tdp_dropouts_div').html(data);

            $('#tbl_tdp_dropouts').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
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
            $('#btn-delete-tdp-dropouts').addClass('d-none');
            $('#remove_tdp_dropouts_modal').modal('hide')
        }
    });
});

//delete tdp loa to the table
$('#remove_tdp_loa_modal').on('submit', function (event) {
event.preventDefault();
var checkedLoa = [];
$($('input[name="tdp_loa_checkbox"]:checked')).each(function () {
    checkedLoa.push($(this).val());
});
let uid = checkedLoa;
$.ajax({
    url: "includes/stufap/inc_tdp_remove_loa.php",
    type: "POST",
    data: {
        uid: uid
    },
    // dataType: "json",
    success: function (data) {
        $('#tbl_tdp_loa_div').html(data);

        $('#tbl_tdp_loa').DataTable({
            "order": [[1, "desc"]],
            orderCellsTop: true,
            fixedHeader: true,
            "columnDefs": [{
                "targets": 0,
                "orderable": false
            }]
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
        $('#btn-delete-tdp-loa').addClass('d-none');
        $('#remove_tdp_loa_modal').modal('hide')
    }
});
});

//delete tes program to the table
$('#remove_tes_program_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedCategory = [];
    $($('input[name="tes_programs_checkbox"]:checked')).each(function () {
        checkedCategory.push($(this).val());
    });
    let uid = checkedCategory;
    $.ajax({
        url: "includes/stufap/inc_tes_update_program_3.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_programs_tes_div').html(data);

            $('#tbl_programs_tes').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
            });

            $('#tbl_programs_tes').editable({
                mode: 'inline',
                container: 'body',
                selector: 'td.beneficiaries',
                // title: 'Total Beneficiaries',
                url: "includes/stufap/inc_stufap_tes_update_program.php",
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
            $('#btn-delete-tes-programs').addClass('d-none');
            $('#add_program_tes_form')[0].reset();//modal form id
            $('#add_program_tes_modal_body').load(' #add_program_tes_modal_body');//modal content id
            $('#remove_tes_program_modal').modal('hide')
        }
    });
});

//delete tes program to the table
$('#remove_tdp_program_modal').on('submit', function (event) {
    event.preventDefault();
    var checkedCategory = [];
    $($('input[name="tdp_programs_checkbox"]:checked')).each(function () {
        checkedCategory.push($(this).val());
    });
    let uid = checkedCategory;
    $.ajax({
        url: "includes/stufap/inc_tdp_update_program_3.php",
        type: "POST",
        data: {
            uid: uid
        },
        // dataType: "json",
        success: function (data) {
            $('#tbl_programs_tdp_div').html(data);

            $('#tbl_programs_tdp').DataTable({
                "order": [[1, "desc"]],
                orderCellsTop: true,
                fixedHeader: true,
                "columnDefs": [{
                    "targets": 0,
                    "orderable": false
                }]
            });

            $('#tbl_programs_tdp').editable({
                mode: 'inline',
                container: 'body',
                selector: 'td.beneficiaries',
                // title: 'Total Beneficiaries',
                url: "includes/stufap/inc_stufap_tdp_update_program.php",
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
            $('#btn-delete-tdp-programs').addClass('d-none');
            $('#add_program_tdp_form')[0].reset();//modal form id
            $('#add_program_tdp_modal_body').load(' #add_program_tdp_modal_body');//modal content id
            $('#remove_tdp_program_modal').modal('hide')
        }
    });
});

});//end tag