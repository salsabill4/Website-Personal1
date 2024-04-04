<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
    <div class="container ">
      <a class="navbar-brand fw-bold" href="/"><h4>ev-Sport</h4></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-2 fw-medium">
            <a class="nav-link <?php echo e(($title === "About") ? 'active' : ''); ?>" href="/">About</a>
          </li>
          <li class="nav-item mx-2 fw-medium">
            <a class="nav-link <?php echo e(($title === "Event") ? 'active' : ''); ?>" href="/event">Event</a>
          </li>
          <li class="nav-item mx-2 fw-medium">
            <a class="nav-link <?php echo e(($title === "News") ? 'active' : ''); ?>" href="/news">News</a>
          </li>
        </ul>
        <a href="/tambahEvent"><button class="btn btn-dark" type="button">Add Event</button></a>
      </div>
    </div>
</nav><?php /**PATH C:\Users\Salsabilla Wachid\Documents\4_laravel\tugas-rpl - Copy\resources\views/components/navbar.blade.php ENDPATH**/ ?>