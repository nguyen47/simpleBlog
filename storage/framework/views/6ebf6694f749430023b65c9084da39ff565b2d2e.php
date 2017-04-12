<?php $__env->startSection('content'); ?>

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
                              <th>Tiêu Đề</th>
                              <th>Nội Dung</th>
                              <th>Danh Mục</th>
                              <th>Trạng Thái</th>
                              <th>Đăng Lúc</th>
                              <th>Cập Nhập</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($posts as $posts): ?>
                          <tr class="odd gradeX">
                              <td><?php echo e($posts->title); ?></td>
                              <td><?php echo $posts->content; ?></td>
                              <td><?php echo e($posts->Categories->name); ?></td>
                              <?php if ($posts->status == "1"): ?>
                                <td>Hiện</td>
                              <?php else: ?>
                                <td>Ẩn</td>
                              <?php endif; ?>
                              <td><?php echo e($posts->created_at); ?></td>
                              <td><?php echo e($posts->updated_at); ?></td>
                              <td><a href="admin/posts/edit/<?php echo e($posts->id); ?>">Edit</a>
                                | <a onClick="return confirm('Are You Sure ?')" href="admin/posts/delete/<?php echo e($posts->id); ?>">Delete</a>
                                | <a href="admin/comment/commentByPost/<?php echo e($posts->id); ?>">Comment</a>  

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>