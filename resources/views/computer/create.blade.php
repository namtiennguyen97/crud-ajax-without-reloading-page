@extends('cdn')
@section('contain')
    <form id="addForm" class="form-group" >
        @csrf
        <table border="1px" class="table table-dark">
            <tr>
                <th scope="col">Name</th>
            </tr>
            <tr><td><input class="form-control" type="text" id="name" name="name"></td></tr>
            <tr>
                <th scope="col">ID</th>
            </tr>
            <tr><td><input class="form-control" type="number" id="computer_id" name="computer_id"></td></tr>

            <tr>
                <th scope="col">IP</th>
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
        <button id="add" class="btn btn-success">> add</button>

    </form>

    <script src="{{asset('ajax.js')}}">
    </script>
@endsection
