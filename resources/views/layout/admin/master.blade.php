<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Bootstrap Admin Theme</title>

  <base href="{{asset('')}}">
  <!-- Bootstrap Core CSS -->
  <link href="adminAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="adminAssets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="adminAssets/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="adminAssets/vendor/morrisjs/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="adminAssets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- DataTables CSS -->
  <link href="adminAssets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="adminAssets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    @include('layout.admin.nav')

    @yield('content')
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="adminAssets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="adminAssets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="adminAssets/vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="adminAssets/vendor/raphael/raphael.min.js"></script>
  <script src="adminAssets/vendor/morrisjs/morris.min.js"></script>
  <script src="adminAssets/data/morris-data.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="adminAssets/dist/js/sb-admin-2.js"></script>


  <!-- DataTables JavaScript -->
  <script src="adminAssets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="adminAssets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="adminAssets/vendor/datatables-responsive/dataTables.responsive.js"></script>

  <script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
  </script>

  <script type="text/javascript" src="adminAssets/ckeditor/ckeditor.js"></script>

</body>

</html>
