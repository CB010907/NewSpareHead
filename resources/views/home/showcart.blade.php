<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="Template/images/favicon.png" type="">
    <title>SpareHead Emporium</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="Template/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="Template/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="Template/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="Template/css/responsive.css" rel="stylesheet" />
    <style type="text/css">
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }
        table,th,td{
            border: 1px solid black;
        }
    </style>

</head>
<body>
<div class="hero_area">
    <!-- header section strat -->
    @include('home.header')
</div>
<div class="center">
    <table>
        <tr>
            <th>Product name</th>
            <th>Product quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>shirt</td>
            <td>2</td>
            <td>160</td>
            <td></td>
            <td>remove</td>
        </tr>
    </table>
</div>
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>
<!-- jQery -->
<script src="Template/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="Template/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="Template/js/bootstrap.js"></script>
<!-- custom js -->
<script src="Template/js/custom.js"></script>
</body>
</html>
