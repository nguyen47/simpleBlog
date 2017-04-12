<?php $__env->startSection('content'); ?>

<!-- Post Content Column -->
<div class="col-lg-8">

  <!-- Title -->
  <h1 class="mt-4"><?php echo e($posts->title); ?></h1>

  <!-- Author -->
  <p class="lead">
    in <a href="#"><?php echo e($posts->Categories->name); ?></a>
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Posted on <?php echo e($posts->created_at); ?></p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="<?php echo e($posts->image); ?>" width="750" alt="">

  <hr>

  <?php echo $posts->content; ?>

  <!-- Comments Form -->

<hr>
  <?php if (Sentinel::check()): ?>
    <div class="card my-4">
      <h5 class="card-header">Leave a Comment:</h5>
      <div class="card-block">
        <form action="chitiet/<?php echo e($posts->id); ?>" method="post">
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <input type="hidden" name="user_id" value="<?php echo e(Sentinel::getUser()->id); ?>">
          <input type="hidden" name="status" value="2">
          <input type="hidden" name="posts_id" value="<?php echo e($posts->id); ?>">
          <div class="form-group">
            <textarea class="form-control" rows="3" name="content"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
<?php endif ?>
  <!-- Single Comment -->
    <?php foreach ($comment as $comment): ?>
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0"><?php echo e($comment->User->email); ?></h5>
          <?php echo e($comment->content); ?>

        </div>
      </div>
    <?php endforeach; ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.client.masterLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>