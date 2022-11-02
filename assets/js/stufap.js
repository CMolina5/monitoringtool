$(document).ready(function () {
    //STUFAP PART
    //FHE Part
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

                //1st Semester
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

                //2nd Semester
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

                //3rd Semester
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

                //Summer Midyear Semester
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
                $('#editprogramfhemodal').modal('show')
            }
        })
    });

    //update degree program to the table fhe
    $('#editprogramfhemodal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_stufap_fhe_update_degree_programs.php",
            method: "POST",
            data: $('#fhe_editprogram').serialize(),
            success: function (data) {
                $('#tbl_programs_fhe_div').html(data);
                $('#fhe_editprogram')[0].reset();
                $('#editprogramfhemodal').modal('hide');

                $('#tbl_programs_fhe').DataTable({
                    "order": [[0, "desc"]],
                    "lengthChange": false,
                    "pageLength": 5,
                    orderCellsTop: true,
                    fixedHeader: true
                })

            }
        });
    });

    //FHE Category Part
    //add fhe category to the table
    $('#add_fhe_category_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_fhe_add_category.php",//php file
            method: "POST",
            data: $('#add_fhe_category_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_fhe_category_div').html(data);//table div id
                $('#add_fhe_category_form')[0].reset();//modal form id
                $('#add_fhe_category_modal_body').load(' #add_fhe_category_modal_body');//modal content id
                $('#add_fhe_category_modal').modal('hide');//modal id

                $('#tbl_fhe_category').DataTable({//datatable id
                    "order": [[0, "desc"]],
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
    });

    //FHE Add Dropouts
    //add reason for dropouts to the table
    $('#add_dropouts_fhe').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_fhe_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_fhe_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_fhe_dropouts_div').html(data);//table div id
                $('#add_dropouts_fhe_form')[0].reset();//modal form id
                $('#add_dropouts_fhe').modal('hide');//modal id

                $('#tbl_fhe_dropouts').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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
    });

    //FHE Add LOA
    //add reason for loa to the table
    $('#add_loa_fhe').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_fhe_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_fhe_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_fhe_loa_div').html(data);//table div id
                $('#add_loa_fhe_form')[0].reset();//modal form id
                $('#add_loa_fhe').modal('hide');//modal id

                $('#tbl_fhe_loa').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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
    });

    //TES Add LOA
    //add reason for loa to the table
    $('#add_loa_tes').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tes_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_loa_div').html(data);//table div id
                $('#add_loa_tes_form')[0].reset();//modal form id
                $('#add_loa_tes').modal('hide');//modal id

                $('#tbl_tes_loa').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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
    });

    //TDP Add LOA
    //add reason for loa to the table
    $('#add_loa_tdp').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tdp_add_loa.php",//php file
            method: "POST",
            data: $('#add_loa_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tdp_loa_div').html(data);//table div id
                $('#add_loa_tdp_form')[0].reset();//modal form id
                $('#add_loa_tdp').modal('hide');//modal id

                $('#tbl_tdp_loa').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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
    });

    //select degree program from table and display to modal
    $(document).on('click', '.edit_dropouts_fhe', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_dropouts_reason.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#fhe_drop_reason_edit').val(data.reason);
                $('#fhe_drop_1st_edit').val(data.total_dropout_1st);
                $('#fhe_drop_2nd_edit').val(data.total_dropout_2nd);
                $('#fhe_drop_3rd_edit').val(data.total_dropout_3rd);
                $('#fhe_drop_summer_midyear_edit').val(data.total_dropout_summer_midterm);
                $('#edit_dropouts_fhe_modal').modal('show')
            }
        })
    });

    //update degree program to the table fhe
    $('#edit_dropouts_fhe_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_fhe_update_dropouts.php",
            method: "POST",
            data: $('#edit_dropouts_fhe_form').serialize(),
            success: function (data) {
                $('#tbl_fhe_dropouts_div').html(data);
                $('#edit_dropouts_fhe_form')[0].reset();
                $('#edit_dropouts_fhe_modal').modal('hide');

                $('#tbl_fhe_dropouts').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "footerCallback": function (row, data, start, end, display) {
                        var api = this.api();

                        // Remove the formatting to get integer data for summation
                        var intVal = function (i) {
                            return typeof i === 'string' ?
                                i.replace(/[\$,]/g, '') * 1 :
                                typeof i === 'number' ?
                                    i : 0;
                        };

                        // Total over all pages
                        total = api
                            .column(1)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(1).footer()).html(
                            total
                        );

                        // Total over all pages
                        total2 = api
                            .column(2)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(2).footer()).html(
                            total2
                        );

                        // Total over all pages
                        total3 = api
                            .column(3)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(3).footer()).html(
                            total3
                        );

                        // Total over all pages
                        total4 = api
                            .column(4)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(4).footer()).html(
                            total4
                        );

                        // Total over all pages
                        total5 = api
                            .column(5)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(5).footer()).html(
                            total5
                        );

                        // Total over all pages
                        total6 = api
                            .column(6)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(6).footer()).html(
                            total6
                        );

                        // Total over all pages
                        total7 = api
                            .column(7)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(7).footer()).html(
                            total7
                        );

                        // Total over all pages
                        total8 = api
                            .column(8)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(8).footer()).html(
                            total8
                        );

                        // Update footer
                        $(api.column(9).footer()).html(
                            'GRAND TOTAL:   ' + (total + total2 + total3 + total4 + total5 + total6 + total7 + total8) + ''
                        );


                    }
                })

            }
        });
    });

    //Remove reason for dropouts
    //remove data from the degree program table
    // $(document).on('click', '.remove_dropouts_fhe', function () {
    //     var uid = $(this).attr("id");
    //     $.ajax({
    //         url: "includes/stufap/inc_select_dropouts_reason.php",
    //         method: "POST",
    //         data: { uid: uid },
    //         dataType: "json",
    //         success: function (data) {
    //             $('#remove_fhe_dropouts_modal').modal('show')
    //         }
    //     })
    // });


    /*--------------------------------------------------------------------------------------------*/
    //TES Category Part
    //add tes category to the table
    $('#add_tes_category_modal').on('submit', function (event) {//modal id
        event.preventDefault();
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
    });

    //select tes category from table and display to modal
    $(document).on('click', '.edit_tes_category', function () {//button class
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_tes_category.php",//php file
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#tes_category_1').val(data.tes_category);//$('#input id').val(data.column name in the database);
                $('#total_tes_1st_1').val(data.total_tes_1st);
                $('#total_tes_2nd_1').val(data.total_tes_2nd);
                $('#total_pwd_1st_1').val(data.total_pwd_1st);
                $('#total_pwd_2nd_1').val(data.total_pwd_2nd);
                $('#total_ip_1st_1').val(data.total_ip_1st);
                $('#total_ip_2nd_1').val(data.total_ip_2nd);
                $('#total_with_board_1st_1').val(data.total_with_board_1st);
                $('#total_with_board_2nd_1').val(data.total_with_board_2nd);
                $('#edit_tes_category_modal').modal('show');//modal id
            }
        })
    });

    //update tes category to the table tes
    $('#edit_tes_category_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tes_update_category.php",//php file
            method: "POST",
            data: $('#edit_tes_category_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_category_div').html(data);//table div id
                $('#edit_tes_category_form')[0].reset();//modal form id
                $('#edit_tes_category_modal').modal('hide');//modal id

                $('#tbl_tes_category').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })

            }
        });
    });

    //Remove tes category
    //select data from the tes category
    $(document).on('click', '.remove_tes_category', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_tes_category.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#remove_tes_category_modal').modal('show');
            }
        })
    });

    /*--------------------------------------------------------------------------------------------*/
    //TES Program Part
    //add tes program to the table**
    $('#add_program_tes_modal').on('submit', function (event) {//modal id
        event.preventDefault();
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
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })

            }
        });
    });

    //select tes program from table and display to modal
    $(document).on('click', '.edit_program_tes', function () {//button class
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_tes_program.php",//php file
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#tes_program_name_1').val(data.program_name);//$('#input id').val(data.column name in the database);
                $('#total_tes_mrr_male_1').val(data.total_tes_exceeded_mrr_male);
                $('#total_tes_mrr_female_1').val(data.total_tes_exceeded_mrr_female);
                $('#edit_program_tes_modal').modal('show');//modal id
            }
        })
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
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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

    //tes dropouts part
    //add reason for tes dropouts**
    $('#add_dropouts_tes_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tes_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_tes_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tes_dropouts_div').html(data);//table div id
                $('#add_dropouts_tes_form')[0].reset();//modal form id
                $('#add_dropouts_tes_modal').modal('hide');//modal id

                $('#tbl_tes_dropouts').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "footerCallback": function (row, data, start, end, display) {
                        var api = this.api();

                        // Remove the formatting to get integer data for summation
                        var intVal = function (i) {
                            return typeof i === 'string' ?
                                i.replace(/[\$,]/g, '') * 1 :
                                typeof i === 'number' ?
                                    i : 0;
                        };

                        // Total over all pages
                        total = api
                            .column(1)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(1).footer()).html(
                            total
                        );

                        // Total over all pages
                        total2 = api
                            .column(2)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(2).footer()).html(
                            total2
                        );

                        // Update footer
                        $(api.column(3).footer()).html(
                            'GRAND TOTAL:   ' + (total + total2) + ''
                        );


                    }
                })

            }
        });
    });

    //select reason for dropouts from table tes and display to modal**
    $(document).on('click', '.edit_dropouts_tes', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_dropouts_reason.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#tes_drop_reason_1').val(data.reason);
                $('#tes_drop_1st_1').val(data.total_dropout_1st);
                $('#tes_drop_2nd_1').val(data.total_dropout_2nd);
                $('#edit_dropouts_tes_modal').modal('show')
            }
        })
    });

    //update dropouts to the table tes**
    $('#edit_dropouts_tes_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tes_update_dropouts.php",
            method: "POST",
            data: $('#edit_dropouts_tes_form').serialize(),
            success: function (data) {
                $('#tbl_tes_dropouts_div').html(data);
                $('#edit_dropouts_tes_form')[0].reset();
                $('#edit_dropouts_tes_modal').modal('hide');

                $('#tbl_tes_dropouts').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true,
                    "footerCallback": function (row, data, start, end, display) {
                        var api = this.api();

                        // Remove the formatting to get integer data for summation
                        var intVal = function (i) {
                            return typeof i === 'string' ?
                                i.replace(/[\$,]/g, '') * 1 :
                                typeof i === 'number' ?
                                    i : 0;
                        };

                        // Total over all pages
                        total = api
                            .column(1)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(1).footer()).html(
                            total
                        );

                        // Total over all pages
                        total2 = api
                            .column(2)
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                        // Update footer
                        $(api.column(2).footer()).html(
                            total2
                        );

                        // Update footer
                        $(api.column(3).footer()).html(
                            'GRAND TOTAL:   ' + (total + total2) + ''
                        );


                    }
                })

            }
        });
    });

    //Remove reason for dropouts
    //remove data from the tbl_tes_dropouts table**
    $(document).on('click', '.remove_dropouts_tes', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_dropouts_reason.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#remove_tes_dropouts_modal').modal('show')
            }
        })
    });

    /*--------------------------------------------------------------------------------------------*/
    //TDP Program Part
    //add tdp program to the table**
    $('#add_program_tdp_modal').on('submit', function (event) {//modal id
        event.preventDefault();
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

            }
        });
    });

    //select tdp program from table and display to modal
    $(document).on('click', '.edit_program_tdp', function () {//button class
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_tes_program.php",//php file
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#tdp_program_name_1').val(data.program_name);//$('#input id').val(data.column name in the database);
                $('#total_tdp_1st_male_1').val(data.total_tdp_1st_male);
                $('#total_tdp_1st_female_1').val(data.total_tdp_1st_female);
                $('#total_tdp_2nd_male_1').val(data.total_tdp_2nd_male);
                $('#total_tdp_2nd_female_1').val(data.total_tdp_2nd_female);
                $('#total_tdp_graduated_male_1').val(data.total_tdp_graduated_male);
                $('#total_tdp_graduated_female_1').val(data.total_tdp_graduated_female);
                $('#total_tdp_exceeded_mrr_male_1').val(data.total_tdp_exceeded_mrr_male);
                $('#total_tdp_exceeded_mrr_female_1').val(data.total_tdp_exceeded_mrr_female);
                $('#edit_program_tdp_modal').modal('show');//modal id
            }
        })
    });

    //update tdp program to the table tdp
    $('#edit_program_tdp_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tdp_update_program_2.php",//php file
            method: "POST",
            data: $('#edit_program_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_programs_tdp_div').html(data);//table div id
                $('#edit_program_tdp_form')[0].reset();//modal form id
                $('#edit_program_tdp_modal').modal('hide');//modal id

                $('#tbl_programs_tdp').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    "lengthChange": false,
                    "pageLength": 5,
                    orderCellsTop: true,
                    fixedHeader: true
                })
            }
        });
    });


    /*--------------------------------------------------------------------------------------------*/
    //tdp dropouts part
    //add reason for tdp dropouts
    $('#add_dropouts_tdp_modal').on('submit', function (event) {//modal id
        event.preventDefault();
        $.ajax({
            url: "includes/stufap/inc_tdp_add_dropouts.php",//php file
            method: "POST",
            data: $('#add_dropouts_tdp_form').serialize(),//modal form id
            success: function (data) {
                $('#tbl_tdp_dropouts_div').html(data);//table div id
                $('#add_dropouts_tdp_form')[0].reset();//modal form id
                $('#add_dropouts_tdp_modal').modal('hide');//modal id

                $('#tbl_tdp_dropouts').DataTable({//datatable id
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
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
    });

    //select reason for dropouts from table tdp and display to modal**
    $(document).on('click', '.edit_dropouts_tdp', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/stufap/inc_select_dropouts_reason.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#tdp_drop_reason_1').val(data.reason);
                $('#tdp_drop_1st_1').val(data.total_dropout_1st);
                $('#tdp_drop_2nd_1').val(data.total_dropout_2nd);
                $('#edit_dropouts_tdp_modal').modal('show')
            }
        })
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