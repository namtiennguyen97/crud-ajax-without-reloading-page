@extends('cdn')
@section('contain')

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
                    <form class="form-group" method="post" action="{{route('computer.update', $computerUpdate->id)}}">
                        @csrf
                        <table border="1px" class="table table-dark">
                            <tr>
                                <th scope="col">Name</th>
                            </tr>
                            <tr><td><input class="form-control" type="text" name="name" value="{{$computerUpdate->name}}"></td></tr>
                            <tr>
                                <th scope="col">ID</th>
                            </tr>
                            <tr><td><input class="form-control" type="number" name="computer_id" value="{{$computerUpdate->computer_id}}"></td></tr>

                            <tr>
                                <th scope="col">IP</th>
                            </tr>
                            <tr><td><input class="form-control" type="number" name="computer_ip" value="{{$computerUpdate->computer_ip}}"></td></tr>
                            <tr>
                                <th scope="col">Color</th>
                            </tr>

                            <tr><td><input class="form-control" type="text" name="computer_color" value="{{$computerUpdate->computer_color}}"></td></tr>
                            <tr>
                                <th scope="col">Vendor</th>
                            </tr>
                            <tr> <td><input class="form-control" type="text" name="vendor" value="{{$computerUpdate->vendor}}"></td></tr>
                            <tr>
                                <th scope="col">Price</th>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="number" name="price" value="{{$computerUpdate->price}}"></td>
                            </tr>
                        </table>
                        <input type="submit" value="Add" class="btn btn-success">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

<script src="{{asset('ajax.js')}}"></script>





{{--<form method="post" action="{{route('computer.update', $computer->id)}}">--}}
{{--    @csrf--}}
{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Name</th>--}}
{{--            <th>ID</th>--}}
{{--            <th>IP</th>--}}
{{--            <th>Color</th>--}}
{{--            <th>Vendor</th>--}}
{{--            <th>Price</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td><input type="text" name="name" value="{{$computer->name}}"></td>--}}
{{--            <td><input type="number" name="computer_id" value="{{$computer->computer_id}}"></td>--}}
{{--            <td><input type="number" name="computer_ip" value="{{$computer->computer_ip}}"></td>--}}
{{--            <td><input type="text" name="computer_color" value="{{$computer->computer_color}}"></td>--}}
{{--            <td><input type="text" name="vendor" value="{{$computer->vendor}}"></td>--}}
{{--            <td><input type="number" name="price" value="{{$computer->price}}"></td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--    <input type="submit">--}}
{{--</form>--}}
@endsection
