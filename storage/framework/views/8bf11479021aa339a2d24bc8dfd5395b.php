
 
<?php $__env->startSection('title', $anggota->nama); ?>
 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('anggota.index')); ?>">Anggota</a></li>
                <li class="breadcrumb-item active"><?php echo e($anggota->nama); ?></li>
            </ol>
        </nav>
    </div>
</div>
 
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">
                    <i class="bi bi-person"></i>
                    Detail Anggota
                </h4>
            </div>
            <div class="card-body">
                <div class="text-center mb-4">
                    <?php if($anggota->jenis_kelamin == 'Laki-laki'): ?>
                        <i class="bi bi-person-circle text-primary" style="font-size: 5rem;"></i>
                    <?php else: ?>
                        <i class="bi bi-person-circle text-danger" style="font-size: 5rem;"></i>
                    <?php endif; ?>
                    <h3 class="mt-2"><?php echo e($anggota->nama); ?></h3>
                    <?php if($anggota->status == 'Aktif'): ?>
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle"></i> Anggota Aktif
                        </span>
                    <?php else: ?>
                        <span class="badge bg-secondary">
                            <i class="bi bi-x-circle"></i> Nonaktif
                        </span>
                    <?php endif; ?>
                </div>
                
                <table class="table table-borderless">
                    <tr>
                        <td width="200" class="fw-bold">
                            <i class="bi bi-upc text-success"></i> Kode Anggota
                        </td>
                        <td>: <code><?php echo e($anggota->kode_anggota); ?></code></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-envelope text-success"></i> Email
                        </td>
                        <td>: <?php echo e($anggota->email); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-telephone text-success"></i> Telepon
                        </td>
                        <td>: <?php echo e($anggota->telepon); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-geo-alt text-success"></i> Alamat
                        </td>
                        <td>: <?php echo e($anggota->alamat); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-calendar text-success"></i> Tanggal Lahir
                        </td>
                        <td>: <?php echo e($anggota->tanggal_lahir->format('d F Y')); ?> (<?php echo e($anggota->umur); ?> tahun)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-gender-ambiguous text-success"></i> Jenis Kelamin
                        </td>
                        <td>: <?php echo e($anggota->jenis_kelamin); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-briefcase text-success"></i> Pekerjaan
                        </td>
                        <td>: <?php echo e($anggota->pekerjaan ?? '-'); ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">
                            <i class="bi bi-calendar-check text-success"></i> Tanggal Daftar
                        </td>
                        <td>: <?php echo e($anggota->tanggal_daftar->format('d F Y')); ?> (<?php echo e($anggota->lama_anggota); ?> hari)</td>
                    </tr>
                </table>
                
                <hr>
                <div class="row text-muted small">
                    <div class="col-md-6">
                        <i class="bi bi-clock"></i> 
                        Ditambahkan: <?php echo e($anggota->created_at->format('d M Y H:i')); ?>

                    </div>
                    <div class="col-md-6 text-end">
                        <i class="bi bi-clock-history"></i> 
                        Terakhir Update: <?php echo e($anggota->updated_at->format('d M Y H:i')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header bg-secondary text-white">
                <h6 class="mb-0">
                    <i class="bi bi-gear"></i> Aksi
                </h6>
            </div>
            <div class="card-body d-grid gap-2">
                <a href="<?php echo e(route('anggota.edit', $anggota->id)); ?>" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Edit Anggota
                </a>
                <a href="<?php echo e(route('anggota.index')); ?>" class="btn btn-outline-success">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
                <hr>
                <form action="<?php echo e(route('anggota.destroy', $anggota->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger w-100">
                        <i class="bi bi-trash"></i> Hapus Anggota
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\perpustakaan\resources\views/anggota/show.blade.php ENDPATH**/ ?>