@props(['buku', 'showActions' => true])

<div class="card h-100 shadow-sm">

    <div class="card-header text-center bg-light">
        <i class="bi bi-book-fill display-4 text-primary"></i>
    </div>

    <div class="card-body">

        <h5 class="card-title">
            {{ $buku->judul }}
        </h5>

        <p class="text-muted">
            <i class="bi bi-person"></i>
            {{ $buku->pengarang }}
        </p>

        <span class="badge bg-info mb-2">
            {{ $buku->kategori }}
        </span>

        <p>
            <strong>Harga:</strong><br>
            Rp {{ number_format($buku->harga, 0, ',', '.') }}
        </p>

        <p>
            <strong>Stok:</strong>
            {{ $buku->stok }}
        </p>

        @if($buku->stok > 0)
            <span class="badge bg-success">
                Tersedia
            </span>
        @else
            <span class="badge bg-danger">
                Habis
            </span>
        @endif

    </div>

   @if($showActions) 
<div class="card-footer">

    <div class="btn-group-vertical d-grid gap-2">

        <a href="{{ route('buku.show', $buku->id) }}"
           class="btn btn-sm btn-info text-white">
            <i class="bi bi-eye"></i> Detail
        </a>

        <a href="{{ route('buku.edit', $buku->id) }}"
           class="btn btn-sm btn-warning">
            <i class="bi bi-pencil"></i> Edit
        </a>

    
    </div>

</div>
@endif
</div>

@push('scripts')
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
@endpush