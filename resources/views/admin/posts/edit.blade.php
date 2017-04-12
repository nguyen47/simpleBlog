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
          Thêm Bài Đăng
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form action="admin/posts/edit/{{$posts->id}}" enctype="multipart/form-data" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Tiêu Đề</label>
                  <input class="form-control" name="title" value="{{$posts->title}}">
                </div>
                <div class="form-group">
                  <label>Tóm Tắt</label>
                  <input class="form-control" name="summary" value="{{$posts->summary}}">
                </div>
                <div class="form-group">
                  <label>Image Cover:</label>
                </br>
                  <img src="{{$posts->image}}" width="750" />
                </div>
                <div class="form-group">
                  <label>Image:</label>
                  <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nội Dung</label>
                  <textarea class="form-control ckeditor" name="content" rows="10">{{$posts->content}}</textarea>
                </div>
                <div class="form-group">
                  <label>Chọn Danh Mục</label>
                  <select name = "category_id" class="form-control">
                    <?php foreach ($categories as $cate): ?>
                      <option value="{{$cate->id}}">{{$cate->name}}</option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Trạng Thái</label>
                  <label class="radio-inline">
                    <input type="radio" name="status" id="optionsRadiosInline1" value="1"

                    <?php if ($posts->status =="1"): ?>
                      checked=""
                    <?php endif; ?>

                    >Xuất Bản
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="status" id="optionsRadiosInline2" value="0"

                    <?php if ($posts->status =="0"): ?>
                      checked=""
                    <?php endif; ?>


                    >Nháp
                  </label>
                </div>
                <button type="submit"class="btn btn-default">Submit Button</button>
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
