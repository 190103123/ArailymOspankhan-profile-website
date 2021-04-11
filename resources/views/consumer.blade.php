<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consumer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>

        .container{
            width:500px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>

</head>
<body>
<br/>
<div class="container">
    <br>
    <h3 align="center">Form</h3><br />

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('add-user') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control"  placeholder="Enter name">

        </div>

        <div class="form-group">
            <label>Surname</label>
            <input name="surname" type="text" class="form-control" placeholder="Enter surname">

        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control"  placeholder="Enter email">

        </div>

        <div class="form-group">

            <label for="email" class="custom-file-lable">Photo</label>
            <input name="image" type="file" class="custom-file-input">

        </div>

        <div class="form-group" align="center" >
            <input type="submit" name="send" value="Send" class="btn btn-info">
        </div>

    </form>
    <br>
</div>


</body>
</html>
