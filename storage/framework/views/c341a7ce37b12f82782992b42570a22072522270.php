<h1>Hello</h1>

<p>
<a href="<?php echo e(env('APP_URL')); ?>/activate/<?php echo e($user->email); ?>/<?php echo e($code); ?>">CLick Here</a> to Activate your Account
</p>