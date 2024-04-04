

<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row-g-0">
    <div class="mb-5" style="max-width: 1080px;">
      <div class="d-flex flex-row">
        <div class="col-md-3 mt-5">
          <span class="fw-bolder text-uppercase mt-5" style="font-size: 65px"><strong>N E W S</strong></span>
        </div>
        <div class="col-md-5 align-bottom mt-5">
          <div class="card-body mt-5">
            <span class="text-secondary mt-5">Look for the latest news from events that have occurred.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="mx-auto" style="padding: 15px 0 100px 0">
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner shadow-lg bg-body-tertiary rounded">
      <div class="carousel-item active">
        <img src="img/main1.jpg" class="d-block w-100"alt="main1">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3)">
          <h4 class="mb-3"><strong>The Martech Summit</strong></h4>
          <p><strong>The MarTech Summit is coming to Jakarta for the second time bringing together some of the brightest minds and most innovative companies in the industry.</strong></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/main2.jpg" class="d-block w-100" alt="main2">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3)">
          <h4 class="mb-3"><strong>Paris 2023 Sporting Events</strong></h4>
          <p><strong>Sports is about bettering ourselves. It's more about self-improvement, beating one's own record every day every moment. It helps us to gain the sportsmanship attitude not just towards game but towards life. While every sport follows different rules, participating in sports activities will help your brain take decisions faster.</strong></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/main3.jpg" class="d-block w-100" alt="main3">
        <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.3)">
          <h4 class="mb-3"><strong>Horse Riding</strong></h4>
          <p><strong>As the fashion industry pivots towards a more digitally integrated future WFX is excited to announce our debut at the prestigious INDO INTERTEX 2024.</strong></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</div>

<div class="container my-5">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-5">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="img/<?php echo e($post["image"]); ?>" class="img-fluid rounded-start" alt="<?php echo e($post["slug"]); ?>">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h4 class="card-title fw-bolder"><?php echo e($post["title2"]); ?></h4>
                        <p class="card-text"><small class="text-body-secondary text-muted text-uppercase"><strong><?php echo e($post["date"]); ?></strong></small></p>
                        <p class="card-text"><?php echo e($post["bodysmall"]); ?></p>
                        <p>
                            <a href="/posts/<?php echo e($post["slug"]); ?>">Lihat lebih lengkap</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salsabilla Wachid\Documents\4_laravel\tugas-rpl - Copy\resources\views/layouts/news.blade.php ENDPATH**/ ?>