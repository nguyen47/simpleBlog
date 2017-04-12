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
                <th>User</th>
                <th>Code</th>
                <th>Kích Hoạt</th>
                <th>Kích Hoạt Lúc</th>
                <th>Tạo Lúc</th>
                <th>Cập Nhập</th>
              </tr>
            </thead>
           <?php foreach ($activations as $activations): ?>
              <tbody>
            <td>{{$activations->User->email}}</td>
              <td>{{$activations->code}}</td>
              <?php if ($activations->completed == "1"): ?>
                <td>Đã Kích Hoạt</td>
              <?php else: ?>
                <td>Chưa Kích Hoạt</td>
              <?php endif ?>
              <td>{{$activations->completed_at}}</td>
              <td>{{$activations->created_at}}</td>
              <td>{{$activations->updated_at}}</td>             
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
