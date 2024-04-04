<!DOCTYPE html>
<html>
<head>
    <title>Add Todo</title>
</head>
<body>
    <h2>Add Todo</h2>
    <form method="POST" action="<?php echo e(route('store_data')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Masukkan judul"><br>
        <input type="text" name="body" placeholder="Masukkan isi todo"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\aus\Devcode\code\php\tugas-rpl\resources\views/todo.blade.php ENDPATH**/ ?>