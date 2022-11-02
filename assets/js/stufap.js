$(document).ready(function () {
    //STUFAP PART
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
    });


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
    });
    
    //tes dropouts part
    //add reason for tes dropouts
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