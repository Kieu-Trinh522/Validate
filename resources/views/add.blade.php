<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table Booking Form a Flat Responsive Widget Template :: w3layouts </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Table Booking Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tags -->
    <!--stylesheets-->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <!-- Calendar -->
    <link rel="stylesheet" href="{{asset('backend/css/jquery-ui.css')}}"/>
    <!-- //Calendar -->
    <link href="{{asset('backend/css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all"/>
    <!-- Time-script-CSS -->

    <link href="{{asset('backend//fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}" rel="stylesheet">
</head>

<body>
<h1 class="header-w3ls">
    Thêm mới </h1>
<div class="appointment-w3">
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <div class="personal">

            <div class="main">
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Name</label>
                    <input value="{{old('name')}}" type="text" class="top-up" name="name" placeholder="Name">
                    @if($errors->any())
                        <p style="color: white">{{$errors->first('name')}}</p>
                        @endif
                </div>
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Age</label>

                    <input value="{{old('age')}}" type="text" name="age" placeholder="Age">
                    @if($errors->any())
                        <p style="color: white">{{$errors->first('age')}}</p>
                    @endif
                </div>
                <div class="form-left-w3l">
                    <label for="exampleFormControlInput1">Address</label>
                    <input value="{{old('address')}}" type="text" name="address" placeholder="Address">
                    @if($errors->any())
                        <p style="color: white">{{$errors->first('address')}}</p>
                    @endif
                </div>
                <div class="form-left-w3l">
                    <label for="inputFileName">File Name</label>
                    <input type="file" value="{{old('inputFile')}}"
                           class="form-control-file"
                           id="inputFile"
                           name="inputFile">
                    @if($errors->any())
                        <p style="color: white">{{$errors->first('inputFile')}}</p>
                    @endif
                </div>

            </div>

        </div>

        <div class="btnn">
            <input type="submit" value="Reserve a Table">
        </div>
    </form>
</div>
<div class="copy">
    <p>&copy;2018 Table Booking Form. All Rights Reserved | Design by <a
            href="{{asset('backend/http://www.W3Layouts.com')}}" target="_blank">W3Layouts</a></p>
</div>
<!-- js -->
<script type='text/javascript' src='{{asset('backend/js/jquery-2.2.3.min.js')}}'></script>
<!-- //js -->
<!-- Calendar -->
<script src="{{asset('backend/js/jquery-ui.js')}}"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->
<!-- Time -->
<script type="text/javascript" src="{{asset('backend/js/wickedpicker.js')}}"></script>
<script type="text/javascript">
    $('.timepicker,.timepicker1').wickedpicker({twentyFour: false});
</script>
<!-- //Time -->

</body>

</html>
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<form method="post" enctype="multipart/form-data">--}}
{{--    {{ csrf_field() }}--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlInput1">Name</label>--}}
{{--        <input type="text" name="name" class="form-control">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlInput1">Age</label>--}}
{{--        <input type="number" name="age" class="form-control">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="exampleFormControlInput1">Address</label>--}}
{{--        <input type="text" name="address" class="form-control">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="inputFileName">File Name</label>--}}
{{--        <input type="file"--}}
{{--               class="form-control-file"--}}
{{--               id="inputFile"--}}
{{--               name="inputFile">--}}
{{--    </div>--}}
{{--    <input type="submit" value="Add">--}}

{{--</form>--}}
{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
