<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan halaman daftar jurusan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(string $id)
    {
        return "Menampilkan jurusan dengan ID: {$id}";
    }
    public function create()
    {
        return "Menampilkan halaman tambah jurusan";
    }
    public function edit(string $id)
    {
        return "Menampilkan halaman edit jurusan";
    }
    public function store()
    {
        return "Menampilkan halaman penambahan data jurusan";
    }
    public function update(string $id)
    {
        return "Melakukan perubahan data jurusan";
    }
    public function delete(string $id)
    {
        return "menghapus data jurusan";
    }
}
