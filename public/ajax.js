
//Add new



// show detail information


    $('.showDetail').click(function (data){
        let com_id = $(this).data('id');
        let com_name = $(this).data('name');
        let com_desc =$(this).data('desc');
        $('#computerDetail').modal('show');
        $.ajax({
           url: 'show/'+ com_id,
           type: 'get',
            beforeSend: function (){
              $('.modal-title').text('Computer Id: '+ com_id);
              $('.modal-body').text('Computer Name: '+ com_name);
              $('.modal-footer').text('About this computer: '+ '<br>'+ com_desc);
            },
            success: function (data){
               console.log('success');
               // $('.modal-body').html(data);
            }
        });

    });




//edit data


    $('.updateComputer').click(function (){

        $('#modalUpdate').modal('show');

    });
    $('#confirmUpdate').click(function (){

        let id = $(this).data('id');
        let com_name = $(this).data('name');
        let com_id = $(this).data('computer_id');
        let com_ip = $(this).data('computer_ip');
        let com_color = $(this).data('computer_color');
        let vendor = $(this).data('vendor');
        let price = $(this).data('price');
        let desc = $(this).data('desc');
        $('#nameUpdate').val(com_name);
        $.ajax({
            url: 'edit/' + id,
            type: 'post',
            data: $('#formUpdate').serialize(),
            updateWaiting: function (){
              $('#confirmUpdate').text('Updating...');
            },
            success: function (){

            }

        });
    });


//Delete data


