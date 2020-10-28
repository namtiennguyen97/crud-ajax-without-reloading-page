
//Add new



// show detail information
$(document).ready(function (){

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
});



//edit data
$('.updateComputer').click(function (){
    $('#modalUpdate').modal('show');

});


//Delete data
$(document).ready(function (e){
    e.preventDefault();

});
