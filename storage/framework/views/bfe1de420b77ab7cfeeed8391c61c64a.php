

<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<a href="/" class="fs-6 fw-medium " id="back-form"><i class="fa-solid fa-arrow-left"></i>  Kembali</a>

<h1 class="d-flex justify-content-center align-items-center mb-4 mt-5">Tambah Event</h1>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="post" action="<?php echo e(route('tambahEvent.simpan')); ?>" class="border border-1 shadow-sm p-4 rounded-3 mb-5">
                <?php echo csrf_field(); ?> 
                <div class="mb-3">
                    <label for="title" class="form-label fs-6 fw-medium">Judul Event:</label><br>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="text" name="title" id="title" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan judul">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fs-6 fw-medium">Deskripsi:</label><br>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <textarea name="description" id="description" class="form-control" cols="10" rows="4" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <div id="dropdown"class="mb-3">
                    <label for="dropdown" class="form-label fs-6 fw-medium">Kategori Olahraga</label><br>
                    <?php echo $__env->make('components.dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div id="date" class="mb-3">
                    <label for="date" class="form-label fs-6 fw-medium">Tanggal</label><br>
                    <?php echo $__env->make('components.date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div id="location" class="mb-3">
                    <label for="location" class="form-label fs-6 fw-medium">Lokasi</label><br>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan lokasi">
                </div>
                <div id="image" class="mb-3">
                    <label for="image" class="form-label fs-6 fw-medium">Gambar</label><br>    
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div id="daftar" class="mb-3">
                    <label for="daftar" class="form-label fs-6 fw-medium">Link Web atau Pendaftaran</label><br>
                    <input type="text" name="daftar" id="daftar" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan link">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aus\Devcode\code\php\tugas-rpl\resources\views/layouts/tambahEvent.blade.php ENDPATH**/ ?>