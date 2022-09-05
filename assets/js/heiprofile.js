$(document).ready(function () {

    //add new degree program to the table
    $('#addprogram').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/heiprofile/inc_add_degree_programs.php",
            method: "POST",
            data: $('#add_degree_program').serialize(),
            success: function (data) {
                $('#tbl_programs').html(data);
                $('#add_degree_program')[0].reset();
                $('#addprogram').modal('hide');

                $('#tbl_program_offerings').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })
            }
        });
    });

    //select degree program from table and display to modal
    $(document).on('click', '.edit_data', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/heiprofile/inc_select_degree_programs.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#program_code1').val(data.program_code);
                $('#program_name1').val(data.program_name);
                $('#gr_no1').val(data.gr_no);
                $('#copc_no1').val(data.copc_no);
                $('#editprogram').modal('show')
            }
        })
    })

    //update degree program to the table
    $('#editprogram').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/heiprofile/inc_update_degree_programs.php",
            method: "POST",
            data: $('#edit_degree_program').serialize(),
            success: function (data) {
                $('#tbl_programs').html(data);
                $('#edit_degree_program')[0].reset();
                $('#editprogram').modal('hide');

                $('#tbl_program_offerings').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })
            }
        });
    });

    //remove data from the degree program table
    $(document).on('click', '.remove_data', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/heiprofile/inc_select_degree_programs.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#removeprogram').modal('show')
            }
        })
    });

    //delete degree program to the table
    $('#removeprogram').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/heiprofile/inc_remove_degree_programs.php",
            method: "POST",
            data: $('#remove_degree_program').serialize(),
            success: function (data) {
                $('#tbl_programs').html(data);
                $('#remove_degree_program')[0].reset();
                $('#removeprogram').modal('hide');

                $('#tbl_program_offerings').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })
            }
        });
    });

      //add new other stufap info
      $('#addstufap').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/heiprofile/inc_add_other_stufap.php",
            method: "POST",
            data: $('#add_other_stufap').serialize(),
            success: function (data) {
                
                $('#tbl_stufaps').html(data);
                $('#add_other_stufap')[0].reset();
                $('#addstufap').modal('hide');

                $('#tbl_other_stufaps').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                });            
            }
        });
    });

});//end tag