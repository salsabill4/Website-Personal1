<div class="dropdown">
    <button class="btn dropdown-toggle border" id="kategoriDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo e($selectedCategory ?? 'Silahkan pilih kategori'); ?>

    </button>
    <ul class="dropdown-menu">
        <li class="dropdown-item pe-auto" onclick="changeCategory('Sepak Bola')">Sepak Bola</li>
        <li class="dropdown-item pe-auto" onclick="changeCategory('Badminton')">Badminton</li>
        <li class="dropdown-item pe-auto" onclick="changeCategory('Renang')">Renang</li>
        <li class="dropdown-item pe-auto" onclick="changeCategory('Basket')">Basket</li>
    </ul>
</div>
<input type="hidden" name="category" id="categoryInput"> <!-- Tambahkan input hidden untuk menyimpan nilai kategori -->


<script>
    function changeCategory(category) {
        document.getElementById('kategoriDropdown').textContent = category;
        document.getElementById('categoryInput').value = category; // Set nilai input hidden dengan nilai kategori yang dipilih
    }
</script>
<?php /**PATH C:\Users\aus\Devcode\code\php\tugas-rpl\resources\views/components/dropdown.blade.php ENDPATH**/ ?>