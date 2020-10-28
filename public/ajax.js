
//Add new



// show detail information


    $('.showDetail').click(function (data){
        let id = $('.showDetail').val($(this).data('id'));
        $('#computerDetail').modal('show');
        $.ajax({
           url: 'show'+ id,
           type: 'get',
            data: {
              id : "id"
            },
            success: function (data){
               $('.modal-body').html(data);
            }
        });

    });




//edit data
$('.updateComputer').click(function (){
    $('#modalUpdate').modal('show');

});


//Delete data
$(document).ready(function (){
    let com_id;
    $('.showDelConfirm').click(function (){
        com_id = $(this).data('id');
        $('#confirmDeletion').modal('show');
    });
    $('#confirmDelete').click(function (){

        $.ajax({
           url: 'delete/'+ com_id,
           beforeSend: function (){
               $('#confirmDelete').text('Deleting...');
           },
            success: function (data){
               setTimeout(function (){
                    $('#confirmDeletion').modal('show');
               }, 1000);
            }

        });
    });
});

