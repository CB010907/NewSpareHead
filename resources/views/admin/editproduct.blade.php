<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AdminDashboard - Edit Product</title>
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
            text-align: center;
            padding-top: 50px;
        }

        label{
            display: inline-block;
            width: 200px;
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
                <div class="center">
                    <h1>Edit Product</h1>

                    <form action="{{url('/edit_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Product Name</label>
                            <input type="text" name="title" placeholder="Write product name" value="{{$product->title}}" style="width: 500px;">
                        </div>

                        <div>
                            <label>Product Description</label>
                            <input type="text" name="description" placeholder="Write product details" value="{{$product->description}}" style="width: 500px;">
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="number" name="price" placeholder="Write product price" value="{{$product->price}}" style="width: 500px;">
                        </div>

                        <div>
                            <label>Discounted Price</label>
                            <input type="number" name="discount_price" placeholder="Write discounted price" value="{{$product->discount_price}}" style="width: 500px;">
                        </div>

                        <div>
                            <label>Quantity</label>
                            <input type="number" min="0"  name="quantity" placeholder="Write product quantity" value="{{$product->quantity}}" style="width: 500px;">
                        </div>

                        <div>
                            <label>Category</label>
                            <select name="category" required="" style="width: 100px;">
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label>Current product image</label>
                            <img height="200" width="200" src="/productimage/{{$product->image}}" alt="image">
                        </div>

                        <div>
                            <label>Change product image</label>
                            <input type="file" name="image">
                        </div>

                        <div>
                            <input type="submit" value="Update Product" class="btn btn-primary">
                        </div>
                    </form>

                </div>


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

