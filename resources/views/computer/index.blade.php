@extends('cdn')
@section('contain')

    <div class="badge badge-primary text-wrap">
        Computer available now: {{count($computer)}}
    </div>
    <input type="text">
    <table border="1px" id="mainTable" class="display table table-bordered table-striped" style="width: 100%">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">ID</th>
            <th scope="col">IP</th>
            <th scope="col">Color</th>
            <th scope="col">Vendor</th>
            <th scope="col">Price</th>
            <th scope="col">Desc</th>
            <th scope="col">Detail</th>
            <th scope="col">Edit/Update</th>
            <th scope="col">Delete</th>

        </tr>
        <?php $num = 1; ?>
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
                <td>{{$value->desc}}</td>
                <td><a class="showDetail btn btn-warning fa fa-eye" aria-hidden="true" data-id="{{$value->id}}"
                       data-name="{{$value->name}}" data-desc="{{$value->desc}}"></a></td>
                <td><a class="updateComputer btn btn-success fa fa-pencil-square-o" data-id="{{$value->id}}"
                       data-name="{{$value->name}}"
                       data-computer_id="{{$value->computer_id}}" data-computer_ip="{{$value->computer_ip}}"
                       data-computer_color="{{$value->computer_color}}"
                       data-vendor="{{$value->vendor}}" data-price="{{$value->price}}" data-desc="{{$value->desc}}"></a>
                </td>
                <td><a class="showDelConfirm btn btn-danger fa fa-trash" data-id="{{$value->id}}"
                       ></a></td>
            </tr>
        @endforeach
    </table>


    <!-- Button trigger modal -->
    <a id="showModal" type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
        Add new Computer/Modal
    </a>
    {{--// form modal Add--}}
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add new Computer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addFormModal" class="form-group" role="form">
                        @csrf
                        <table border="1px" class="table table-dark">
                            <tr>
                                <th scope="col">Name</th>
                            </tr>
                            <tr>
                                <td><input placeholder="Name/vendor computer..." class="form-control" type="text"
                                           name="name"></td>
                            </tr>
                            <tr>
                                <th scope="col">Computer ID</th>
                            </tr>
                            <tr>
                                <td><input placeholder="Computer ID" class="form-control" type="number"
                                           name="computer_id"></td>
                            </tr>

                            <tr>
                                <th scope="col">Computer IP</th>
                            </tr>
                            <tr>
                                <td><input placeholder="Computer Ip..." class="form-control" type="number"
                                           name="computer_ip"></td>
                            </tr>
                            <tr>
                                <th scope="col">Color</th>
                            </tr>

                            <tr>
                                <td><input placeholder="Computer color..." class="form-control" type="text"
                                           name="computer_color"></td>
                            </tr>
                            <tr>
                                <th scope="col">Vendor</th>
                            </tr>
                            <tr>
                                <td><input placeholder="Input the vendor...." class="form-control" type="text"
                                           name="vendor"></td>
                            </tr>
                            <tr>
                                <th scope="col">Price</th>
                            </tr>
                            <tr>
                                <td><input placeholder="Input price..." class="form-control" type="number" name="price">
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">About Computer desc</th>
                            </tr>
                            <tr>
                                <td><textarea placeholder="Input something about this computer..." class="form-control"
                                              id="desc" name="desc"></textarea></td>
                            </tr>
                        </table>
                        <button type="submit" value="Add" id="addComputerModal" class="btn btn-success fa fa-plus"
                                aria-hidden="true"> ADD
                        </button>
                        <button type="button" class="fa fa-times btn btn-danger" data-dismiss="modal"> Cancel</button>

                    </form>

                </div>

            </div>
        </div>
    </div>




    {{--    //Form Modal update--}}

    <div class="modal fade" id="modalUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit a Computer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-group" id="formUpdate" role="form">
                        @csrf
                        <table border="1px" class="table table-dark">
                            <tr>
                                <th scope="col">Name</th>
                            </tr>
                            <tr>
                                <td><input class="nameUpdate form-control" type="text" name="name"
                                           value=""></td>
                            </tr>
                            <tr>
                                <th scope="col">ID</th>
                            </tr>
                            <tr>
                                <td><input class="computer_id form-control" type="number" name="computer_id" value="">
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">IP</th>
                            </tr>
                            <tr>
                                <td><input class="computer_ip form-control" type="number" name="computer_ip" value="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="col">Color</th>
                            </tr>

                            <tr>
                                <td><input class="computer_color form-control" type="text" name="computer_color"
                                           value=""></td>
                            </tr>
                            <tr>
                                <th scope="col">Vendor</th>
                            </tr>
                            <tr>
                                <td><input class="vendor form-control" type="text" name="vendor" value=""></td>
                            </tr>
                            <tr>
                                <th scope="col">Price</th>
                            </tr>
                            <tr>
                                <td><input class="price form-control" type="number" name="price" value=""></td>
                            </tr>
                            <tr>
                                <th scope="col">Desc</th>
                            </tr>
                            <tr>
                                <td><textarea class="desc form-control" name="desc" value=""></textarea></td>
                            </tr>
                        </table>
                        <input type="submit" value="Save" class="btn btn-success" id="confirmUpdate"
                               name="confirmUpdate">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Delete question modal--}}
    <div class="modal modal-danger" id="confirmDeletion" data-backdrop="static" data-keyboard="false" tabindex="-1">
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
    <div class="modal fade" id="computerDetail" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title detailTitle" id="staticBackdropLabel">title </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body detailBody">
                    ......
                </div>
                <div class="modal-footer detailFooter">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('ajax.js')}}"></script>

    {{--Script add--}}
    <script>


        $(document).ready(function () {
            //delete

            let com_id;
            $('.showDelConfirm').click(function () {
                com_id = $(this).data('id');
                $('#confirmDeletion').modal('show');
            });
            $('#confirmDelete').click(function () {

                $.ajax({
                    url: 'delete/' + com_id,
                    beforeSend: function () {
                        $('#confirmDelete').text('Deleting...');
                    },
                    success: function (data) {
                        setTimeout(function () {
                            $('#confirmDeletion').modal('show');
                            // $('#mainTable').html(location.reload());
                            location.reload();
                            // window.location.reload();
                        }, 1000);
                    }

                });
            });

            //create data

            $('#addComputerModal').click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'create',
                    type: 'post',
                    data: $('#addFormModal').serialize(),
                    success: function (data) {
                        $('#mainTable').append("<tr>" +
                            "<td>" + "</td>" +
                            "<td>" + data.id + "</td>" +
                            "<td>" + data.name + "</td>" +
                            "<td>" + data.computer_id + "</td>" +
                            "<td>" + data.computer_ip + "</td>" +
                            "<td>" + data.computer_color + "</td>" +
                            "<td>" + data.vendor + "</td>" +
                            "<td>" + data.price + "</td>" +
                            "<td>" + data.desc + "</td>" +
                            "<td>" + "<a  class='showDetail btn btn-warning fa fa-eye' aria-hidden='true' data-id='data.id' data-name='data.name' data-desc='data.desc'></a>" + "</td>" +
                            "<td>" + "<a class='updateComputer btn btn-success fa fa-pencil-square-o' data-id='data.id' data-name='data.name' data-computer_id='data.computer_id'" +
                            " data-computer_ip='data.computer_ip' data-computer_color='data.computer_color' data-vendor='data.vendor' data-price='data.price' data-desc='data.desc'></a>" + "</td>" +
                            "<td>" + "<a class='showDelConfirm btn btn-danger fa fa-trash' data-id='data.id' ></a>" + "</td>" +
                            "</tr>")
                    },
                });
            });

            //show detail data

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
                        $('.detailFooter').text('About this computer: '+ com_desc);
                    },
                    success: function (data){
                        console.log('success');
                        // $('.modal-body').html(data);
                    }
                });
            });

            //edit data
            //1- get values
            $('.updateComputer').click(function () {

                com_id = $(this).data('id');
                let computer_id = $(this).data('computer_id');
                let com_name = $(this).data('name');
                let com_ip = $(this).data('computer_ip');
                let com_color = $(this).data('computer_color');
                let vendor = $(this).data('vendor');
                let price = $(this).data('price');
                let desc = $(this).data('desc');
                $('.nameUpdate').val(com_name);
                $('.computer_id').val(computer_id);
                $('.computer_ip').val(com_ip);
                $('.computer_color').val(com_color);
                $('.vendor').val(vendor);
                $('.price').val(price);
                $('.desc').val(desc);
                $('#modalUpdate').modal('show');

            });
            // start to update

            $('#confirmUpdate').click(function (e) {

                e.preventDefault();
                $.ajax({
                    url: 'edit/' + com_id,
                    type: 'post',
                    data: $('#formUpdate').serialize(),
                    // beforeSend: function () {
                    //     $('#confirmUpdate').text('Updating...');
                    // },

                    success: function (data) {
                        location.reload();
                        console.log(data);
                    }

                });
            });
            $('#mainTable').DataTable();
        });
    </script>

@endsection
