<?php

namespace App\Http\Controllers;

use App\Models\HomecareService;
use Illuminate\Http\Request;

class HomecareController extends Controller
{
    // Menampilkan daftar layanan
    public function index()
    {
        $services = HomecareService::all();
        return view('homecare.index', compact('services'));
    }

    // Menampilkan form untuk menambah layanan baru
    public function create()
    {
        return view('homecare.create');
    }

    // Menyimpan layanan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        HomecareService::create($request->all());

        return redirect()->route('homecare.index')->with('success', 'Layanan berhasil ditambahkan');
    }

    // Menampilkan detail layanan tertentu
    public function show($id)
    {
        $service = HomecareService::findOrFail($id);
        return view('homecare.show', compact('service'));
    }

    // Menampilkan form untuk mengedit layanan
    public function edit($id)
    {
        $service = HomecareService::findOrFail($id);
        return view('homecare.edit', compact('service'));
    }

    // Memperbarui layanan di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $service = HomecareService::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('homecare.index')->with('success', 'Layanan berhasil diperbarui');
    }

    // Menghapus layanan dari database
    public function destroy($id)
    {
        $service = HomecareService::findOrFail($id);
        $service->delete();

        return redirect()->route('homecare.index')->with('success', 'Layanan berhasil dihapus');
    }
}