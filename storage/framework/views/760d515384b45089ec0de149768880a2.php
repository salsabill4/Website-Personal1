

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

<a href="/" class="fs-6 fw-medium" id="back-formm"><i class="fa-solid fa-arrow-left"></i>  Kembali</a>
<div class="container mt-5">
        <h1 class="my-4">Detail Event</h1>
        <div class="mb-3" style="max-width: 1080px;">
            <div class="d-flex flex-row">
                <div class="col-md-4">
                    <img
                    src="https://i.pinimg.com/564x/ad/3b/ca/ad3bca398f93b4d426825dbfc1225db2.jpg"
                    alt="Trendy Pants and Shoes"
                    class="img-fluid rounded"
                    />
                </div>
                <div class="ms-4">
                    <div class="card-body">
                        <p class="card-text text-danger fw-medium">Badminton</p>    
                        <h5 class="card-title mb-3 fs-3">Turnamen Badminton</h5>
                    <p class="card-text text-indent-4">
                    Tok Dalang, yang dikenal sebagai kepala desa di Kampung Durian Runtuh, akan merayakan ulang tahunnya yang ke-64 dengan mengadakan sebuah turnamen badminton yang meriah. Acara ini tidak hanya dirancang untuk merayakan ulang tahun beliau, tetapi juga untuk mempererat tali persaudaraan dan memperkuat hubungan sosial di antara penduduk kampung. Turnamen badminton ini terbuka untuk semua usia dan tingkat keahlian. Semua pemain badminton, dari pemula hingga ahli, diundang untuk bergabung dan berkompetisi dalam atmosfir yang penuh semangat dan sportivitas. Selain kompetisi badminton yang seru, acara ini juga akan dimeriahkan dengan berbagai hiburan dan kegiatan menarik lainnya, seperti suguhan makanan dan minuman tradisional, pertunjukan seni lokal, dan masih banyak lagi. Mari bergabung dalam merayakan ulang tahun yang istimewa ini bersama-sama dengan Tok Dalang dan seluruh komunitas Kampung Durian Runtuh dalam acara yang penuh keceriaan dan kebersamaan!
                    </p>                   
                    <p><i class="fa-regular fa-calendar-days"></i> 28, April 2023</p>
                    <p><i class="fa-solid fa-location-dot"></i>  Semarang</p>
                    <button class="btn btn-primary">Daftar Event</button>        
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Salsabilla Wachid\Documents\4_laravel\tugas-rpl\resources\views/layouts/detail.blade.php ENDPATH**/ ?>