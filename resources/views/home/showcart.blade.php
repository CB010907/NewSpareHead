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
    <link rel="shortcut icon" href="Template/images/favicon.ico" type="">
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
            width: 100%;
            text-align: center;
            padding: 30px;
        }
        table{
            display: flex;
            justify-content: center;

        }
        th,td{
            border: 1px solid black;
            padding: 20px;
        }

        .cashhover{
            transition: transform 0.3s ease;
        }
        .cashhover:hover{
            transform: scale(1.1);
        }

    </style>

</head>
<body>
<div class="hero_area">
    <!-- header section strat -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{url('/')}}"><img width="350" src="Template/images/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Products</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dashboard') }}">Profile</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                                </li>
                            @endauth
                        @endif
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


@if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        </div>
    @endif

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
            <td>Rs. {{$cart->price}}</td>
            <td><img src="/productimage/{{$cart->image}}" alt="product image" style="width: 200px; padding: 5px"></td>
            <td style="padding: 20px">
                <form action="{{ url('/remove_cart', $cart->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this product from the cart?');">
                    @csrf
                    <button type="submit" class="btn btn-danger">Remove</button>
                </form>
            </td>
        </tr>
            <?php $totalprice=$totalprice + $cart->price ?>
        @endforeach
    </table>
    <br>
    <div>
        <h1 style="font-size: 30px">Total Price : {{$totalprice}}</h1>
    </div>
    <div>
        <h1 style="font-size: 30px">Proceed to Order the items</h1>
        <div style="display: flex; justify-content: center; gap:20px; ">
            <a href="{{url('cash_order')}}" class="btn btn-primary cashhover">Cash on Delivery</a>
            <a href="{{url('stripe',$totalprice)}}" class="btn btn-primary cashhover">Pay Online</a>
        </div>

    </div>
</div>
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
{{--<div class="cpy_">--}}
{{--    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>--}}

{{--        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>--}}

{{--    </p>--}}
{{--</div>--}}
<!-- jQery -->
<script src="Template/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="Template/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="Template/js/bootstrap.js"></script>
<!-- custom js -->
<script src="Template/js/custom.js"></script>
</div>
</body>
</html>
