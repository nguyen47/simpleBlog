@extends('layout.admin.master')

@section('content')

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Bài Đăng</h1>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          DataTables Advanced Tables
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Email</th>
                <th>Role</th>
                <th>Tạo Lúc</th>
                <th>Cập Nhập</th>
              </tr>
            </thead>
           <?php foreach ($userRole as $userRole): ?>
              <tbody>
              <td>{{$userRole->User->email}}</td>
              <td>{{$userRole->Role->name}}</td>
              <td>{{$userRole->created_at}}</td>
              <td>{{$userRole->updated_at}}</td>             
            </tbody>
           <?php endforeach ?>
          </table>
          <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
</div>
<!-- /#page-wrapper -->


@endsection
