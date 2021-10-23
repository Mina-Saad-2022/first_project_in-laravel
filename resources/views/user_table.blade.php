<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Senior PRO</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonst.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.css">

    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/rounded-icons-for-it/512/source-code-program-html-php-512.png
">

    <link rel="stylesheet" href="style_table/datatable.css" />

    <link rel="stylesheet" href="dist/css/new_style.css">


    <style>
    body {
        font-size: 12pt;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen,
            Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <div class="row slid">
            <div class="col-3">
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="index3.html" class="brand-link">
                        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">Senior PRO</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="https://www2.0zz0.com/2021/10/03/22/816990324.jpg"
                                    class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">
                                    <?='Mina sa3d'?>
                                </a>
                            </div>
                        </div>

                        <!-- SidebarSearch Form -->
                        <div class="form-inline">
                            <div class="input-group" data-widget="sidebar-search">
                                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-sidebar">
                                        <i class="fas fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                <li class="nav-item" id="user">
                                    <a href="../user" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            user
                                        </p>
                                    </a>

                            </ul>
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href={{"login"}} class="nav-link">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <p>
                                            logout
                                        </p>
                                    </a>
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
            </div>
            <div class="col-9">

                <div class="content-wrapper slid-min">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Blank Page</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Blank Page</li>
                                    </ol>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- Main content -->
                    <section class="content ">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Title</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en"
                                    data-search="true">
                                    <thead>
                                        <tr class="head_table text-center">
                                            <th class="user_id"> ID </th>
                                            <th class="name"> Name </th>
                                            <th class="user_email"> Email </th>
                                            <th class="user_age"> Age </th>
                                            <th class="hd_phone"> Phone </th>
                                            <th> Password </th>
                                            <th class="hd_status"> Status </th>
                                            <th class="operation" colspan='2'> Operation </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user_data as $value)
                                        <tr class="tr_data">
                                            <td class="id"> {{$value['id']}}</td>
                                            <td class="name"> {{$value['name']}}</td>
                                            <td class="email"> {{$value['email']}}</td>
                                            <td class="age"> {{$value['age']}}</td>
                                            <td class="phone"> {{$value['phone']}}</td>
                                            <td id="td_password"> {{$value['password']}}</td>
                                            <td> <?php if ($value['is_admin'] == 1) {
    echo "Admin";} else {
    echo "User";
}
?>
                                            </td>

                                            <td>
                                                <a href="/user/delete/{{$value['id']}}"
                                                    class='btn btn-danger rounded-circle'>
                                                    <i class='fas fa-trash'></i> </a>
                                            </td>


                                            <td> <a href={{"edit/" .$value['id'] }}
                                                    class='btn btn-info rounded-circle '>
                                                    <i class='fas fa-pencil-alt'></i>
                                                </a> </td>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Content Wrapper. Contains page content -->

                        <div class=" card-footer">
                            Copyright &copy; 2020-2021 <a href="https://my-c-v.netlify.app/">Mina.Saad</a>.</strong> All
                            rights reserved.
                        </div>
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <!-- <script src="datatable.js"></script> -->
    <script src="datatable.min.js"></script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/global.js"></script>



    <script src="style_table/datatable.min.js"></script>
    <script src="style_table/datatable.js"></script>


</body>

</html>