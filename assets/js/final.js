$(document).ready(function () {
    $(document).on('click', '.finalize_form', function () {//button class
        $('#finalize_form_modal').modal('show');
    });

    $('#finalize_form_modal').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "includes/final/finalize.php",
            method: "POST",
            data: $('#finalize_form_modal_form').serialize(),
            success: function (data) {
                $('#finalize_div').html(data);
                $('#finalize_form_modal_form')[0].reset();
                $('#finalize_div').load(' #finalize_div');//modal content id
                $('#finalize_form_modal').modal('hide');
                location.reload(true);
            }
        });
    });
    
});