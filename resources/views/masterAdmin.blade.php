<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('navigationAdmin')}}
    @yield('content')
    {{View::make('footerAdmin')}}
    
</body>

<style>
.table-dark{
    background: #a1bf8f
}
.table-head{
    background: rgb(35, 38, 31);
    color: rgb(210, 202, 93)
}
.customer_view{
    color: green;
    margin-bottom: 30px;
    margin-top: 25px;
}

.customer_order{
    color: #054fb9;
    margin-bottom: 30px;
    margin-top: 25px;
}

.table-sticky-head{
    position: sticky;
    top: 0px;
}
.table-sticky-head-product{
    position: sticky;
    top: 30px;
}

.table-order{
    background: #9bb5ee
}

.table-order-head{
    background:#ca5c21;
    color: #dddddd;
}

.table-order-button{
    background: #1e5eb8;
    color:#fefac9
}

.content-space{
    position: absolute;
    width: calc(100%-300px);
    left: 290px;
    min-height: 100vh;
    transition: 0.5s;
}

.table-size{
    height: 100px;
    width: 1000px;
    overflow-x: scroll;
    overflow-y:scroll;
}

.text-position{
    padding-left: 350px;
}

.content-space-top{
    padding-top: 240px;
}

</style>


</html>