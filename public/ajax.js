
//Add new
$('#addComputerModal').click(function (e){
    e.preventDefault();
    $.ajax({
        url: 'create',
        type: 'post',
        data: $('#addFormModal').serialize(),
        success: function (data){
           $('#mainTable').append("<tr>" +
               "<td>"+  "</td>" +
               "<td>"+ data.id+ "</td>" +
               "<td>"+ data.name+ "</td>" +
               "<td>"+ data.computer_id+ "</td>" +
               "<td>"+ data.computer_ip+ "</td>" +
               "<td>"+ data.computer_color+ "</td>" +
               "<td>"+ data.vendor+ "</td>" +
               "<td>"+ data.price+ "</td>" +
               "<td>"+ "<a id='deltailCom' class='btn btn-warning fa fa-eye' aria-hidden='true' data-id='data.id' data-toggle='modal' data-target='#detail'></a>" + "</td>" +
               "<td>"+"<a id='#updateComputer' class='btn btn-success fa fa-pencil-square-o' data-id='data.id' data-toggle='modal' data-target='#modalUpdate'></a>" + "</td>" +
               "<td>"+ "<a class='btn btn-danger fa fa-trash' id='#deleteCom' data-id='data.id' href='{{route('computer.delete', data.id)}}'></a>" + "</td>" +
               "</tr>")
        },
        // dataType: 'html',
    });
    // $('#name').val('');
    // $('#computer_id').val('');
    // $('#computer_ip').val('');
    // $('#computer_color').val('');
    // $('#vendor').val('');
    // $('#price').val('');
});


//show detail information

    $('#detailCom').click(function (){
        $('#detail').modal('show');
        let id = $('#detailCom').val(data-id);
        $.ajax({
            url: '/show/'+ id,
            type: 'get',
            data: {
                'id': id
            },
            success: function (id){
                console.log(id);
            }
        })
    });


//edit data
$('#updateComputer').click(function (){
    $('#modalUpdate').modal('show');
    $('#nameUpdate').val($(this).data('name'));
});
