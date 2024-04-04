

<?php $__env->startSection('content'); ?>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5"><?php echo e($post["title2"]); ?></h1>
            <img src="img/<?php echo e($post["image"]); ?>" alt="<?php echo e($post["slug"]); ?>" class="img-fluid">
        </div>
    </div>
  </div>


  <div class="container">
    <div class="my-5">
      <a href="/news" class="fs-6 fw-medium " id="back-form"><i class="fa-solid fa-arrow-left"></i>  Kembali ke News</a>
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salsabilla Wachid\Documents\4_laravel\tugas-rpl - Copy\resources\views/layouts/news2.blade.php ENDPATH**/ ?>