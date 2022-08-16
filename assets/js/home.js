$(document).ready(function () {
    //hei records part
    //select forms
    $(document).on('click', '.edit_record', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/home/inc_select_hei_record.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#ac_year1').val(data.ac_year);
                $("input[name=ac_calendar1]").val([data.ac_calendar]);
                $("input[name=fhe1][value=" + (data.fhe) + "]").prop('checked', true);
                $("input[name=tes1][value=" + (data.tes) + "]").prop('checked', true);
                $("input[name=tdp1][value=" + (data.tdp) + "]").prop('checked', true);
                $('#editform_modal').modal('show')
            }
        })
    });

    //update forms structure
    $('#editform_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/home/inc_update_form.php",
            method: "POST",
            data: $('#editform_modal_form').serialize(),
            success: function (data) {
                $('#tbl_list_of_forms_div').html(data);
                $('#editform_modal_form')[0].reset();
                $('#editform_modal').modal('hide');

                $('#tbl_list_of_forms').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })

            }
        });
    });

    //remove hei form record
    $(document).on('click', '.remove_record', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/home/inc_select_hei_record.php",
            method: "POST",
            data: { uid: uid },
            dataType: "json",
            success: function (data) {
                $('#removeform_modal').modal('show')
            }
        })
    });

    //delete form
    $('#removeform_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/home/inc_remove_form.php",
            method: "POST",
            data: $('#removeform_modal_form').serialize(),
            success: function (data) {
                $('#tbl_list_of_forms_div').html(data);
                $('#removeform_modal_form')[0].reset();
                $('#removeform_modal').modal('hide');

                $('#tbl_list_of_forms').DataTable({
                    "order": [[0, "desc"]],
                    orderCellsTop: true,
                    fixedHeader: true
                })

            }
        });
    });

    //select form
    $(document).on('click', '.view_record', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/home/inc_view_hei_record.php",
            method: "POST",
            data: { uid: uid },
            success: function (data) {
                window.location.href = "./heiprofile.php";
            }
        })
    });

    //select form
    $(document).on('click', '.view_record_final', function () {
        var uid = $(this).attr("id");
        $.ajax({
            url: "includes/home/inc_view_hei_record.php",
            method: "POST",
            data: { uid: uid },
            success: function (data) {
                window.location.href = "./final.php";
            }
        })
    });

});//end tag