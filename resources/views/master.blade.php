<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px
    }
    img.slider-img {
        height: 400px !important;
    }
    .custom-product {
        height: 600px;
    }
    .slider-text {
        background-color: #35443585 !important;
    }
    .trending-image {
        height: 100px;
    }
    .trending-item {
        float: left;
        width: 20%;
    }
    .trendring-wrapper{
        margin: 30px;
    }
    .detail-img {
        height: 200px;
    }
</style>
</html>
