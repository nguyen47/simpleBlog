<?php $__env->startSection('content'); ?>

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
                  DataTables Advanced Tables
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>Category Name</th>
                              <th>Description</th>
                              <th>Created At</th>
                              <th>Updated At</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($categories as $cate): ?>
                            <tr class="odd gradeX">
                                <td><?php echo e($cate->name); ?></td>
                                <td><?php echo e($cate->description); ?></td>
                                <td><?php echo e($cate->created_at); ?></td>
                                <td><?php echo e($cate->updated_at); ?></td>
                                <td><a href="admin/categories/edit/<?php echo e($cate->id); ?>">Edit</a>
                                  | <a onClick="return confirm('Are You Sure ?')" href="admin/categories/delete/<?php echo e($cate->id); ?>">Delete</a></td>
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