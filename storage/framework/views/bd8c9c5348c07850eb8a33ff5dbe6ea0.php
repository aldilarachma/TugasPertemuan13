<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['buku', 'showActions' => true]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['buku', 'showActions' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="card h-100 shadow-sm">

    <div class="card-header text-center bg-light">
        <i class="bi bi-book-fill display-4 text-primary"></i>
    </div>

    <div class="card-body">

        <h5 class="card-title">
            <?php echo e($buku->judul); ?>

        </h5>

        <p class="text-muted">
            <i class="bi bi-person"></i>
            <?php echo e($buku->pengarang); ?>

        </p>

        <span class="badge bg-info mb-2">
            <?php echo e($buku->kategori); ?>

        </span>

        <p>
            <strong>Harga:</strong><br>
            Rp <?php echo e(number_format($buku->harga, 0, ',', '.')); ?>

        </p>

        <p>
            <strong>Stok:</strong>
            <?php echo e($buku->stok); ?>

        </p>

        <?php if($buku->stok > 0): ?>
            <span class="badge bg-success">
                Tersedia
            </span>
        <?php else: ?>
            <span class="badge bg-danger">
                Habis
            </span>
        <?php endif; ?>

    </div>

   <?php if($showActions): ?> 
<div class="card-footer">

    <div class="btn-group-vertical d-grid gap-2">

        <a href="<?php echo e(route('buku.show', $buku->id)); ?>"
           class="btn btn-sm btn-info text-white">
            <i class="bi bi-eye"></i> Detail
        </a>

        <a href="<?php echo e(route('buku.edit', $buku->id)); ?>"
           class="btn btn-sm btn-warning">
            <i class="bi bi-pencil"></i> Edit
        </a>

    
    </div>

</div>
<?php endif; ?>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function() {

        const form = this.closest('form');
        const judul = this.dataset.judul;

        Swal.fire({
            title: 'Konfirmasi Hapus',
            text: `Apakah Anda yakin ingin menghapus buku "${judul}"?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

    });
});
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\laravel\perpustakaan\resources\views/components/buku-card.blade.php ENDPATH**/ ?>