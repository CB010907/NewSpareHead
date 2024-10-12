<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminDashboard Category</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="AdminTemplate/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="AdminTemplate/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="AdminTemplate/assets/images/favicon.ico" />


    <style type="text/css">
        .center{
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 50px;
        }

        .Xc{
            text-align: center;
            margin-top: 50px;
        }

        .img_size{
            width: 100px;
            height: 150px;
        }
        th{
            padding: 30px;
        }
        tr{
            border: 2px solid white;
        }
    </style>

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <!-- content-wrapper ends -->
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <h1 class="Xc">Product List</h1>

                <table class="center">
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discounted Price</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>

                        <td>
                            <img class="img_size" src="/productimage/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('edit_product',$product->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>


            </div>




            <!-- partial:partials/_footer.html -->
            @include('admin.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="AdminTemplate/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="AdminTemplate/assets/vendors/chart.js/Chart.min.js"></script>
<script src="AdminTemplate/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="AdminTemplate/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="AdminTemplate/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="AdminTemplate/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="AdminTemplate/assets/js/off-canvas.js"></script>
<script src="AdminTemplate/assets/js/hoverable-collapse.js"></script>
<script src="AdminTemplate/assets/js/misc.js"></script>
<script src="AdminTemplate/assets/js/settings.js"></script>
<script src="AdminTemplate/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="AdminTemplate/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>

