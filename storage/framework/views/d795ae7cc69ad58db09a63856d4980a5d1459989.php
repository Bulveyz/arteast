<?php $__env->startSection('content'); ?>
  <br><br><br><br>
  <div class="container">
    <h1><?php echo e($team->name); ?> <?php echo e($team->secondName); ?></h1>
    <p><?php echo e($team->text); ?></p>

    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img class="responsive-img" width="100%" src="<?php echo e(asset($image)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>