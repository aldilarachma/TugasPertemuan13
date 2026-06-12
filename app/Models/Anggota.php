<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
 
class Anggota extends Model
{
    use HasFactory;
 
    protected $table = 'anggota';
 
    protected $fillable = [
        'kode_anggota',
        'nama',
        'email',
        'telepon',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'tanggal_daftar',
        'status',
    ];
 
    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_daftar' => 'date',
    ];
 
    // =========================
    // ACCESSOR UMUR
    // =========================

    public function getUmurAttribute(): int
    {
        return Carbon::parse($this->tanggal_lahir)->age;
    }
 
    // =========================
    // ACCESSOR LAMA ANGGOTA
    // =========================

    public function getLamaAnggotaAttribute(): int
    {
        return Carbon::parse($this->tanggal_daftar)->diffInDays(now());
    }
 
    // =========================
    // SCOPE AKTIF
    // =========================

    public function scopeAktif($query)
    {
        return $query->where('status', 'Aktif');
    }
 
    // =========================
    // SCOPE JENIS KELAMIN
    // =========================

    public function scopeJenisKelamin($query, $jk)
    {
        return $query->where('jenis_kelamin', $jk);
    }

    // =========================
    // ACCESSOR STATUS BADGE
    // =========================

    public function getStatusBadgeAttribute(): string
    {
        return $this->status == 'Aktif'
            ? '<span class="badge bg-success">Aktif</span>'
            : '<span class="badge bg-secondary">Nonaktif</span>';
    }

    // =========================
    // ACCESSOR KATEGORI USIA
    // =========================

    public function getKategoriUsiaAttribute(): string
    {
        if ($this->umur < 20) {
            return 'Remaja';
        } elseif ($this->umur <= 50) {
            return 'Dewasa';
        } else {
            return 'Senior';
        }
    }

    // =========================
    // SCOPE TERDAFTAR BULAN INI
    // =========================

    public function scopeTerdaftarBulanIni($query)
    {
        return $query->whereMonth('created_at', now()->month)
                     ->whereYear('created_at', now()->year);
    }
}