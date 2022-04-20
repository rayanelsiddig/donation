<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payment integration task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background: url(task.jpg) no-repeat center center fixed ;
            /* center center fixed; */
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .main{
            text-align: center;
            color: #ffd500;
            margin-top: 150px;
        }
        .btn-warning,.btn-warning:hover ,.btn-warning:active {
    color: #6c1414;}
    </style>
</head>

<body class="antialiased">
        <div class="main">
            <h1> There is no shortage of money from charity</h1>
            <a href="{{url('stripe')}}" class="btn btn-warning"> Donate Now</a>
        </div>
</body>

</html>