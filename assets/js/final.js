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
            //   Swal.fire(
            //     'Submitted!',
            //     'Your submission is now being reviewed by the Regional Coordinator in-charge to your school.',
            //     'success'
            //   )
              $('#notice_modal').modal('hide');
              $('#signatories_modal').modal('show');
            }
          }) 
    });




    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '/delete',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });
    
});