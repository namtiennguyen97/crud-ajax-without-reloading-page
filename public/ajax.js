
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




//Delete data


