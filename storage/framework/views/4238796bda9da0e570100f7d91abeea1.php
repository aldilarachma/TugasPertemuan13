
 
<?php $__env->startSection('title', 'Daftar Buku'); ?>
 
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>
        <i class="bi bi-book"></i>
        Daftar Buku
    </h1>
    <div>
    <a href="<?php echo e(route('buku.export')); ?>" class="btn btn-success">
        <i class="bi bi-download"></i> Export CSV
    </a>

    <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Buku
    </a>
</div>
</div>
 

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1">Total Buku</h6>
                        <h2 class="mb-0"><?php echo e($totalBuku); ?></h2>
                    </div>
                    <div class="text-primary">
                        <i class="bi bi-book-fill" style="font-size: 3rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card border-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1">Buku Tersedia</h6>
                        <h2 class="mb-0"><?php echo e($bukuTersedia); ?></h2>
                    </div>
                    <div class="text-success">
                        <i class="bi bi-check-circle-fill" style="font-size: 3rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card border-danger">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1">Buku Habis</h6>
                        <h2 class="mb-0"><?php echo e($bukuHabis); ?></h2>
                    </div>
                    <div class="text-danger">
                        <i class="bi bi-x-circle-fill" style="font-size: 3rem;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="card mb-4">
    <div class="card-body">

        <h5 class="mb-3">
            <i class="bi bi-search"></i>
            Search & Filter Buku
        </h5>

        <form action="<?php echo e(route('buku.search')); ?>" method="GET">

            <div class="row g-2">

                
                <div class="col-md-3">
                    <input type="text"
                           name="keyword"
                           class="form-control"
                           placeholder="Cari judul, pengarang, penerbit">
                </div>

                
                <div class="col-md-2">
                    <select name="kategori" class="form-select">
                        <option value="">Semua Kategori</option>
                        <option value="Programming">Programming</option>
                        <option value="Database">Database</option>
                        <option value="Web Design">Web Design</option>
                        <option value="Networking">Networking</option>
                        <option value="Data Science">Data Science</option>
                    </select>
                </div>

                
                <div class="col-md-2">
                    <select name="tahun" class="form-select">
                        <option value="">Semua Tahun</option>

                        <?php for($i = date('Y'); $i >= 2020; $i--): ?>
                            <option value="<?php echo e($i); ?>">
                                <?php echo e($i); ?>

                            </option>
                        <?php endfor; ?>

                    </select>
                </div>

                
                <div class="col-md-2">
                    <select name="ketersediaan" class="form-select">
                        <option value="">Semua</option>
                        <option value="tersedia">Tersedia</option>
                        <option value="habis">Habis</option>
                    </select>
                </div>

                
                <div class="col-md-3">
                    <button type="submit"
                            class="btn btn-primary w-100">
                        <i class="bi bi-search"></i>
                        Cari Buku
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>


<div class="card mb-4">
    <div class="card-body">
        <h6 class="card-title">
            <i class="bi bi-funnel"></i> Filter Kategori:
        </h6>
        <div class="btn-group" role="group">
            <a href="<?php echo e(route('buku.index')); ?>" class="btn btn-sm <?php echo e(!isset($kategori) ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Semua
            </a>
            <a href="<?php echo e(route('buku.kategori', 'Programming')); ?>" class="btn btn-sm <?php echo e(isset($kategori) && $kategori == 'Programming' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Programming
            </a>
            <a href="<?php echo e(route('buku.kategori', 'Database')); ?>" class="btn btn-sm <?php echo e(isset($kategori) && $kategori == 'Database' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Database
            </a>
            <a href="<?php echo e(route('buku.kategori', 'Web Design')); ?>" class="btn btn-sm <?php echo e(isset($kategori) && $kategori == 'Web Design' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Web Design
            </a>
            <a href="<?php echo e(route('buku.kategori', 'Networking')); ?>" class="btn btn-sm <?php echo e(isset($kategori) && $kategori == 'Networking' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Networking
            </a>
            <a href="<?php echo e(route('buku.kategori', 'Data Science')); ?>" class="btn btn-sm <?php echo e(isset($kategori) && $kategori == 'Data Science' ? 'btn-primary' : 'btn-outline-primary'); ?>">
                Data Science
            </a>
        </div>
    </div>
</div>

<form action="<?php echo e(route('buku.bulk-delete')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    
    <?php echo csrf_field(); ?>

    <div class="d-flex justify-content-between mb-3">

        <div>
            <input type="checkbox" id="select-all">
            <label for="select-all">
                Pilih Semua
            </label>
        </div>

        <button type="submit" class="btn btn-danger">
            <i class="bi bi-trash"></i>
            Hapus Terpilih
        </button>

    </div>
 

<div class="row">

    <?php $__empty_1 = true; $__currentLoopData = $bukus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="col-md-4 mb-4">

    <div class="card">

        <div class="card-header">
            <input type="checkbox"
                   name="buku_ids[]"
                   value="<?php echo e($buku->id); ?>">
        </div>

        <?php if (isset($component)) { $__componentOriginal4ac845093cfe0dfa116a4a1a20b2d959 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4ac845093cfe0dfa116a4a1a20b2d959 = $attributes; } ?>
<?php $component = App\View\Components\BukuCard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buku-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\BukuCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['buku' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($buku),'show-actions' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4ac845093cfe0dfa116a4a1a20b2d959)): ?>
<?php $attributes = $__attributesOriginal4ac845093cfe0dfa116a4a1a20b2d959; ?>
<?php unset($__attributesOriginal4ac845093cfe0dfa116a4a1a20b2d959); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4ac845093cfe0dfa116a4a1a20b2d959)): ?>
<?php $component = $__componentOriginal4ac845093cfe0dfa116a4a1a20b2d959; ?>
<?php unset($__componentOriginal4ac845093cfe0dfa116a4a1a20b2d959); ?>
<?php endif; ?>

    </div>

</div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div class="col-12">
            <div class="alert alert-info">
                <i class="bi bi-info-circle"></i>
                Tidak ada data buku
            </div>
        </div>

    <?php endif; ?>

</div>
 
<?php if($bukus->count() > 0): ?>
    <div class="text-center mt-4">
        <p class="text-muted">
            Menampilkan <?php echo e($bukus->count()); ?> buku
            <?php if(isset($kategori)): ?>
                dari kategori <strong><?php echo e($kategori); ?></strong>
            <?php endif; ?>
        </p>
    </div>
<?php endif; ?>
</form>
<?php $__env->startPush('scripts'); ?>
<script>
document.getElementById('select-all').addEventListener('change', function() {

    document.querySelectorAll('input[name="buku_ids[]"]').forEach(cb => {
        cb.checked = this.checked;
    });

});
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\perpustakaan\resources\views/buku/index.blade.php ENDPATH**/ ?>