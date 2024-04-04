

<?php $__env->startSection('content'); ?>

  <div class="container">
    <div class="mx-5 my-5">
      <div class="text-center">
        <h1 class="fw-bold mb-5"><?php echo e($post["title2"]); ?></h1>
        <h6 class="text-muted text-uppercase fw-bolder mt-5"><?php echo e($post["date"]); ?></h6>
      </div>
      <div class="d-flex justify-content-center align-items-center my-5">
        <img 
        src="img/<?php echo e($post["image"]); ?>" 
        alt="<?php echo e($post["slug"]); ?>" 
        class="img-fluid rounded"
        />
      </div>
      <p><?php echo e($post["body"]); ?></p>
    </div>
  </div>


  <div class="container">
    <div class="my-5">
      <a href="/news" class="fs-6 fw-medium " id="back-form"><i class="fa-solid fa-arrow-left"></i>  Kembali ke News</a>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salsabilla Wachid\Documents\4_laravel\tugas-rpl - Copy\resources\views/layouts/news1.blade.php ENDPATH**/ ?>