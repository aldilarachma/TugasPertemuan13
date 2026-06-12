<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private function getKategoriList()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],
            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan manajemen data',
                'jumlah_buku' => 18
            ],
            [
                'id' => 3,
                'nama' => 'Jaringan Komputer',
                'deskripsi' => 'Buku networking dan keamanan',
                'jumlah_buku' => 12
            ],
            [
                'id' => 4,
                'nama' => 'Desain Web',
                'deskripsi' => 'Buku UI/UX dan web design',
                'jumlah_buku' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Data Science',
                'deskripsi' => 'Buku AI, ML, dan analisis data',
                'jumlah_buku' => 15
            ]
        ];
    }

    public function index()
    {
        $kategori_list = $this->getKategoriList();

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori_list = $this->getKategoriList();
        $kategori = collect($kategori_list)->firstWhere('id', $id);

        if (!$kategori) {
            abort(404);
        }

        $buku_list = [
            [
                'kode' => 'BK-001',
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Ahmad Fauzi',
                'tahun' => 2023
            ],
            [
                'kode' => 'BK-002',
                'judul' => 'Mastering PHP',
                'penulis' => 'Budi Rahman',
                'tahun' => 2022
            ],
            [
                'kode' => 'BK-003',
                'judul' => 'OOP Modern',
                'penulis' => 'Siti Nurhaliza',
                'tahun' => 2021
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = collect($this->getKategoriList())->filter(function ($kategori) use ($keyword) {
            return stripos($kategori['nama'], $keyword) !== false ||
                   stripos($kategori['deskripsi'], $keyword) !== false;
        });

        return view('kategori.search', compact('kategori_list', 'keyword'));
    }
}