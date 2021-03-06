<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<h1>Danh sách khách hàng </h1>
<a class="btn btn-success" href="{{route('customer.create')}}">ADD</a>
@if(\Illuminate\Support\Facades\Session::has('msg'))
    <div style="height: 50px;width: 100%;background-color: greenyellow;text-align: center;padding: 10px">Them thanh cong  </div>
@endif
<table class="table">
    <tr>
        <th>STT</th>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </tr>
    @forelse($customers as $key=>$customer)
        <tr>
            <td>{{++$key}}</td>
            <td><img src="{{$customer->image}}" width="100px" height="100px"></td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->age}}</td>
            <td>{{$customer->address}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('customer.edit',$customer->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('customer.destroy',$customer->id)}}">Delete</a>
            </td>
        </tr>
    @empty
    <tr>No data</tr>
    @endforelse
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
