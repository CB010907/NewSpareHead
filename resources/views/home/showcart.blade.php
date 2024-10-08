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

<div class="center">
    <table>
        <tr>
            <th>Product name</th>
            <th>Product quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php $totalprice=0; ?>
        @foreach($cart as $cart)
        <tr>
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quantity}}</td>
            <td>{{$cart->price}}</td>
            <td><img src="/productimage/{{$cart->image}}" alt=""></td>
            <td><a href="{{url('/remove_cart',$cart->id)}}" class="btn btn-danger" onclick="return confirm('are you sure you want to remove this product from the cart')">remove</a></td>
        </tr>
            <?php $totalprice=$totalprice + $cart->price ?>
        @endforeach
    </table>
    <div>
        <h1>Total Price : {{$totalprice}}</h1>

    </div>
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
