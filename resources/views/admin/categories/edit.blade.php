@extends('layout.admin.master')

@section('content')

<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Danh Mục</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Sửa Danh Mục
              </div>
              <div class="panel-body">
                  <div class="row">
                      <div class="col-lg-12">
                          <form action="" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                                  <label>Danh Mục</label>
                                  <input class="form-control" name="name" value="{{$categories->name}}">
                              </div>
                              <div class="form-group">
                                  <label>Mô Tả</label>
                                  <textarea class="form-control" name="description" rows="3">{{$categories->description}}</textarea>
                              </div>
                              <button type="submit" class="btn btn-default">Submit Button</button>
                              <button type="reset" class="btn btn-default">Reset Button</button>
                          </form>
                      </div>
                      <!-- /.col-lg-6 (nested) -->
                  </div>
                  <!-- /.row (nested) -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->


@endsection
