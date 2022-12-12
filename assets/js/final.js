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

    $('#notice_modal_form').on('submit', function (event) {
        event.preventDefault(event);
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You won't be able to edit this form once you submit it.",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Yes, submit it!'
        //   }).then((result) => {
        //     if (result.isConfirmed) {
            //   Swal.fire(
            //     'Submitted!',
            //     'Your submission is now being reviewed by the Regional Coordinator in-charge to your school.',
            //     'success'
            //   )
              $('#notice_modal').modal('hide');
              $('#signatories_modal').modal('show');
        //     }
        //   }) 
    });

    $('#signatories_modal_form').on('submit', function (event) {
        event.preventDefault(event);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to edit this form once you submit it.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
          }).then((result) => {
            if (result.isConfirmed) {
              $.ajax({
                url: 'final_pdf.php',
                type: 'POST',
                success: function(response) {
                  console.log(response);
                  Swal.fire(
                    'Submitted!',
                    'Your submission is now being reviewed by the Regional Coordinator in-charge to your school.',
                    'success'
                  )
                  $('#signatories_modal').modal('hide');
                }
              });
            }
          }) 
    });
    
});