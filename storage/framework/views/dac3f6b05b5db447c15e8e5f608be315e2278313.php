<?php $__env->startSection('content'); ?>


    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="my-4">Hoàng Trần Khôi Nguyên <small>htknguyen.com</small></h1>

        <!-- Blog Post -->
    <?php foreach ($posts as $post): ?>
      <div class="card mb-4">
          <img class="card-img-top img-fluid" src="<?php echo e($post->image); ?>" width="750" alt="Card image cap">
          <div class="card-block">
              <h2 class="card-title"><?php echo e($post->title); ?></h2>
              <p class="card-text">
                <?php echo e($post->summary); ?>

              </p>
              <a href="chitiet/<?php echo e($post->id); ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
              Posted on <?php echo e($post->created_at); ?> in <a href="#"><?php echo e($post->Categories->name); ?></a>
          </div>
      </div>

    <?php endforeach; ?>
        <!-- Pagination -->
          <?php echo e($posts->links('vendor.pagination.custom')); ?>

        <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item"><a class="page-link" href="#">&larr; Older</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
        </ul> -->
    </div>
<!-- /.row --><!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.client.masterLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>