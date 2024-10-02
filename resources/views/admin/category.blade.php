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
    <link rel="shortcut icon" href="AdminTemplate/assets/images/favicon.png" />


    <style type="text/css">
        .center{
            text-align: center;
            padding-top: 50px;
        }
        .Tcenter{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 50px;
            border: 1px solid white;
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
                    <h1>Add Category</h1>

                    <form action="{{url('add_category')}}" method="POST">
                        @csrf
                        <input type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
                <table class="Tcenter">
                    <tr>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td><a onclick="return confirm('Are you sure to delete this category')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a></td>
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

