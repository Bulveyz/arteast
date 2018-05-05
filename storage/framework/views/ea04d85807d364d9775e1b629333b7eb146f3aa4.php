<?php $__env->startSection('content'); ?>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4 item-box">
          <div class="center-cahar">
            <h5 class="item-box__title"><?php echo e($team->name); ?> <?php echo e($team->secondName); ?></h5>
            <div class="item-box__img">
              <img class="responsive-img" width="240" height="200" src="<?php echo e($team->profile); ?>" data-aos="fade-left">
            </div>
            <p class="item-box__body">
              Lorem ipsum dolor sit amet.
            </p>
            <div class="item-box__more">
              <a class="item-box__link" href="/team/<?php echo e($team->id); ?>">Подробнее</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>