//tbl_program_offerings
$(document).ready(function () {
    $('#tbl_program_offerings').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    $('#tbl_other_stufaps').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true,
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
        fixedHeader: true
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
            showbuttons: false,
            defaultValue: 0,
            //dataType: 'json',
            validate: function(value){
             if($.trim(value) == '')
             {
              return 'This field is required';
             }
            }
           });

        $('#tbl_fhe_category').DataTable({
            "order": [[0, "desc"]],
            orderCellsTop: true,
            fixedHeader: true
        });

    //tbl_fhe_dropouts
    $('#tbl_fhe_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true,
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api();
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 1 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 1 ).footer() ).html(
                total
            );

            // Total over all pages
            total2 = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 2 ).footer() ).html(
                total2
            );

            // Total over all pages
            total3 = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 3 ).footer() ).html(
                total3
            );

            // Total over all pages
            total4 = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 4 ).footer() ).html(
                total4
            );

            // Total over all pages
            total5 = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 5 ).footer() ).html(
                total5
            );

            // Total over all pages
            total6 = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 6 ).footer() ).html(
                total6
            );

            // Total over all pages
            total7 = api
                .column( 7 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 7 ).footer() ).html(
                total7
            );

            // Total over all pages
            total8 = api
                .column( 8 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 8 ).footer() ).html(
                total8
            );
            
            // Update footer
            $( api.column( 9 ).footer() ).html(
                'GRAND TOTAL:   '+ (total+total2+total3+total4+total5+total6+total7+total8) +''
            );

            
        }
    });

    //tbl_tes_category
    $('#tbl_tes_category').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    //tbl_programs_tes
    $('#tbl_programs_tes').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    //tbl_tes_dropouts
    $('#tbl_tes_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true,
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api();
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 1 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 1 ).footer() ).html(
                total
            );

            // Total over all pages
            total2 = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 2 ).footer() ).html(
                total2
            );

            // Update footer
            $( api.column( 3 ).footer() ).html(
                'GRAND TOTAL:   '+ (total+total2) +''
            );

            
        }
    });

    //tbl_programs_tdp
    $('#tbl_programs_tdp').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true
    });

    //tbl_tdp_dropouts
    $('#tbl_tdp_dropouts').DataTable({
        "order": [[0, "desc"]],
        orderCellsTop: true,
        fixedHeader: true,
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api();
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 1 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 1 ).footer() ).html(
                total
            );

            // Total over all pages
            total2 = api
                .column( 2 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Update footer
            $( api.column( 2 ).footer() ).html(
                total2
            );

            // Update footer
            $( api.column( 3 ).footer() ).html(
                'GRAND TOTAL:   '+ (total+total2) +''
            );

            
        }
    });
});//end tag