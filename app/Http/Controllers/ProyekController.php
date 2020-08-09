<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    //
    public function index()
    {
        //$project = DB::table('project')->get();

        return view('layouts.index', compact('project'));
    }

    //
    public function create()
    {
        return view('proyek.add');
    }

    //
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|', //unique:
            'desk' => 'required',
        ]);

        $query = DB::table('proyek')->insert([
            "nama_proyek" => $request["judul"],
            "deskripsi_proyek" => $request["isi"],
            "tanggal_mulai_proyek" => $request["tgl_mulai"],
            "tanggal_deadline_proyek" => $request["tgl_deadline"],
            "status_proyek" => $request["status"]
        ]);

        return redirect('/proyek')->with('success', 'Data Berhasil ditambah');
    }

    //
    public function show($id)
    {
        $proyek = DB::table('proyek')->where('id_proyek', $id)->first();

        return view('proyek.detail', compact('proyek'));
    }

    //
    public function edit($id)
    {
        $proyek = DB::table('proyek')->where('id_proyek', $id)->first();

        return view('proyek.edit', compact('proyek'));
    }

    //
    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255|', //unique:
            'isi' => 'required',
        ]);

        $query = DB::table('proyek')->where('id_proyek', $id)->update([
            "nama_proyek" => $request["judul"],
            "deskripsi_proyek" => $request["isi"],
            "tanggal_mulai_proyek" => $request["tgl_mulai"],
            "tanggal_deadline_proyek" => $request["tgl_deadline"],
            "status_proyek" => $request["status"]
        ]);

        return redirect('/proyek')->with('success', 'Data Berhasil diupdate');
    }

    //
    public function destroy($id)
    {
        $query = DB::table('proyek')->where('id_proyek', $id)->delete();

        return redirect('/proyek')->with('success', 'Data Berhasil di hapus');
    }
}
