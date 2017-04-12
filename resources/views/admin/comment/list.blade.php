@extends('layout.admin.master')

@section('content')

<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Bình Luận</h1>
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
                              <th>Tiêu Đề</th>
                              <th>Nội Dung Bình Luận</th>
                              <th>Người Dùng</th>
                              <th>Trạng Thái</th>
                              <th>Đăng Lúc</th>
                              <th>Cập Nhập</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($comment as $comment): ?>
                          <tr class="odd gradeX">
                              <td>{{$comment->Posts->title}}</td>
                              <td>{{$comment->content}}</td>
                              <td>{{$comment->User->email}}</td>
                              <?php if ($comment->status == "1"): ?>
                                <td>Đã Duyệt</td>
                              <?php else: ?>
                                <td>Chưa Duyệt</td>
                              <?php endif; ?>
                              <td>{{$comment->created_at}}</td>
                              <td>{{$comment->updated_at}}</td>
                              <td>

                              <a onClick="return confirm('Are You Sure ?')" href="admin/comment/delete/{{$comment->id}}">Delete</a> | 
                              <a href="admin/comment/duyetComment/{{$comment->id}}">Duyệt Comment</a> | 

                              </td>
                          </tr>
                        <?php endforeach; ?>

                      </tbody>
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
