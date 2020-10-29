
//Add new



// show detail information


    $('.showDetail').click(function (data){
        let id = $(this).data('id');
        let com_name = $(this).data('name');
        let com_desc =$(this).data('desc');
        $('#computerDetail').modal('show');
        $.ajax({
           url: 'show/'+ id,
           type: 'get',
            beforeSend: function (){
              $('.detailTitle').text('Computer Id: '+ id);
              $('.detailBody').text('Computer Name: '+ com_name);
              $('.detailFooter').text('About this computer: '+ '<br>'+ com_desc);
            },
            success: function (data){
               console.log('success');
               // $('.modal-body').html(data);
            }
        });

    });




//edit data
// let id;
// let com_name;
// let com_id;
// let com_ip;
// let com_color;
// let vendor;
// let price;
// let desc;

    $('.updateComputer').click(function (){
        //  id = $(this).data('id');
        //  com_name = $(this).data('name');
        // com_id = $(this).data('computer_id');
        // com_ip = $(this).data('computer_ip');
        //  com_color = $(this).data('computer_color');
        //  vendor = $(this).data('vendor');
        //  price = $(this).data('price');
        //  desc = $(this).data('desc');
        $('.nameUpdate').val(id);
        $('#modalUpdate').modal('show');

    });
    $('#confirmUpdate').click(function (){

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


