@extends('cdn')
@section('contain')

<div class="badge badge-primary text-wrap">
Computer available now: {{count($computer)}}
</div>
<input type="text">
<table border="1px" id="mainTable" class="table table-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">ID</th>
        <th scope="col">IP</th>
        <th scope="col">Color</th>
        <th scope="col">Vendor</th>
        <th scope="col">Price</th>
        <th scope="col">Detail</th>
        <th scope="col">Edit/Update</th>
        <th scope="col">Delete</th>

    </tr>
    <?php $num =1; ?>
    @foreach($computer as $key =>$value)
    <tr>
        <td>{{$num++}}</td>
        <td id="idCom">{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->computer_id}}</td>
        <td>{{$value->computer_ip}}</td>
        <td>{{$value->computer_color}}</td>
        <td>{{$value->vendor}}</td>
        <td>{{$value->price}}</td>
        <td><a class="showDetail btn btn-warning fa fa-eye" aria-hidden="true" data-id="{{$value->id}}"></a></td>
        <td><a class="updateComputer btn btn-success fa fa-pencil-square-o" data-id="{{$value->id}}" ></a></td>
        <td><a class="btn btn-danger fa fa-trash" href="{{route('computer.delete', $value->id)}}" data-id="{{$value->id}}" id="deleteCom"></a></td>
    </tr>
    @endforeach
</table>

<script>
    $('#deleteCom').click(function (){
         let id = $('#idCom').val();
        $.ajax(
            {
                url: " "+id,
                method: 'get', // replaced from put
                // dataType: "JSON",
                data: {
                    "id": id // method and token not needed in data
                },
                success: function (response)
                {
                    alert('deleted');
                    location.reload();
                    console.log(response);
                },
                error: function(xhr) {
                    alert('cant delete');
                    console.log(xhr.responseText); // this line will save you tons of hours while debugging
                    // do something here because of error
                }
            });
    });
</script>
<!-- Button trigger modal -->
<a id="showModal" type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
    Add new Computer/Modal
</a>
{{--// form modal Add--}}
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add new Computer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addFormModal" class="form-group" role="form" >
                    @csrf
                    <table border="1px" class="table table-dark">
                        <tr>
                            <th scope="col">Name</th>
                        </tr>
                        <tr><td><input class="form-control" type="text" id="name" name="name"></td></tr>
                        <tr>
                            <th scope="col">Computer ID</th>
                        </tr>
                        <tr><td><input class="form-control" type="number" id="computer_id" name="computer_id"></td></tr>

                        <tr>
                            <th scope="col">Computer IP</th>
                        </tr>
                        <tr><td><input class="form-control" type="number" id="computer_ip" name="computer_ip"></td></tr>
                        <tr>
                            <th scope="col">Color</th>
                        </tr>

                        <tr><td><input class="form-control" type="text" id="computer_color" name="computer_color"></td></tr>
                        <tr>
                            <th scope="col">Vendor</th>
                        </tr>
                        <tr> <td><input class="form-control" type="text" id="vendor" name="vendor"></td></tr>
                        <tr>
                            <th scope="col">Price</th>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="number" id="price" name="price"></td>
                        </tr>
                    </table>
                    <button type="submit" value="Add" id="addComputerModal" class="btn btn-success fa fa-plus" aria-hidden="true"> ADD</button>
                    <button type="button" class="fa fa-times btn btn-danger" data-dismiss="modal"> Cancel</button>

                </form>

            </div>

        </div>
    </div>
</div>




{{--    //Form Modal update--}}

<div class="modal fade" id="modalUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit a Computer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-group" method="post" action="">
                    @csrf
                    <table border="1px" class="table table-dark">
                        <tr>
                            <th scope="col">Name</th>
                        </tr>
                        <tr><td><input class="form-control" type="text" name="name" id="nameUpdate" value=""></td></tr>
                        <tr>
                            <th scope="col">ID</th>
                        </tr>
                        <tr><td><input class="form-control" type="number" name="computer_id" value=""></td></tr>

                        <tr>
                            <th scope="col">IP</th>
                        </tr>
                        <tr><td><input class="form-control" type="number" name="computer_ip" value=""></td></tr>
                        <tr>
                            <th scope="col">Color</th>
                        </tr>

                        <tr><td><input class="form-control" type="text" name="computer_color" value=""></td></tr>
                        <tr>
                            <th scope="col">Vendor</th>
                        </tr>
                        <tr> <td><input class="form-control" type="text" name="vendor" value=""></td></tr>
                        <tr>
                            <th scope="col">Price</th>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="number" name="price" value=""></td>
                        </tr>
                    </table>
                    <input type="submit" value="Add" class="btn btn-success">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{--Delete question modal--}}
<div class="modal modal-danger" id="deleteModal" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>If you delete this, you may lost some important
                    value information, are you sure to Delete this?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="confirmDelete">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>


{{--show detail modal--}}
<!-- Modal -->
<div class="modal fade" id="computerDetail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">title </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ......
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('ajax.js')}}"></script>


    <script>
        $('#addComputerModal').click(function (e){
            e.preventDefault();
            $.ajax({
                url: '{{route('computer.store')}}',
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
                        "<td>"+ "<a id='detailCom' class='btn btn-warning fa fa-eye' aria-hidden='true' data-id='data.id' data-toggle='modal' data-target='#computerDetail'></a>" + "</td>" +
                        "<td>"+"<a id='#updateComputer' class='btn btn-success fa fa-pencil-square-o' data-id='data.id' data-toggle='modal' data-target='#modalUpdate'></a>" + "</td>" +
                        "<td>"+ "<a class='btn btn-danger fa fa-trash' id='#deleteCom' data-id='data.id' ></a>" + "</td>" +
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
    </script>
@endsection
