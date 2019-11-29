<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        # code...
        $transaksi = \App\Transaksi::where('status', 'Process')->with('paket')->get();
        // dd($data->all());
        $data = $transaksi->all();
        return view('pengawas.task.index', compact('data'));
    }
    public function show($id)
    {
        $data = $id;
        $barang1 = \App\Barang::where('transaksi_id', $data)->get();
        $barang = $barang1->all();
        // dd($barang->all());
        return view('pengawas.task.barang', compact(['data', 'barang']));
    }
    public function store(Request $request)
    {
        $data = new \App\Barang;

        \Validator::make($request->all(), [
            'item'  => 'required|min:5|max:200',
            'satuan'  => 'required|',
            'harga'  => 'required|min:1|max:200',
            'foto'    => 'required|mimes:jpg,jpeg,png|max:1024'
        ])->validate();
        // dd($request->all());
        $data->item = $request->get('item');
        $data->transaksi_id = $request->get('transaksi_id');
        $data->satuan = $request->get('satuan');
        $data->harga = $request->get('harga');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('barang', 'public');
            $data->foto = $image_path;
        }
        $data->save();
        return redirect('barang/' . $request->transaksi_id);
    }
    public function destroy($id)
    {
        \App\Barang::destroy($id);
        return back();
    }


    public function monitor()
    {
        $transaksi = \App\Transaksi::where('status', 'Process')->with('paket')->get();
        // dd($data->all());
        $data = $transaksi->all();
        return view('pengawas.monitor.index', compact('data'));
    }
    public function showMonitor($id)
    {
        $data = $id;
        $barang1 = \App\Monitoring::where('transaksi_id', $data)->get();
        $barang = $barang1->all();
        // dd($barang->all());
        return view('pengawas.monitor.monitor', compact(['data', 'barang']));
    }
    public function storeMonitor(Request $request)
    {
        // dd($request->all());
        $data = new \App\Monitoring;

        \Validator::make($request->all(), [
            'tanaman'  => 'required',
            'proses'  => 'required',
            'penyakit'  => 'required',
            'kondisi_tumbuhan'  => 'required|min:1|max:1024',
            'kondisi_lahan'  => 'required|min:10|max:1024',
            'kondisi_hama'  => 'required|min:10|max:1024',
            'kondisi_hama'  => 'required|min:10|max:1024',
            'keterangan'  => 'required|min:10|max:1024',
            'foto'    => 'required|mimes:jpg,jpeg,png|max:1024'
        ])->validate();
        // dd($request->all());
        $data->transaksi_id = $request->get('transaksi_id');
        $data->tanaman = $request->get('tanaman');
        $data->proses = $request->get('proses');
        $data->penyakit = $request->get('penyakit');
        $data->kondisi_tumbuhan = $request->get('kondisi_tumbuhan');
        $data->kondisi_lahan = $request->get('kondisi_lahan');
        $data->kondisi_hama = $request->get('kondisi_hama');
        $data->keterangan = $request->get('keterangan');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('barang', 'public');
            $data->foto = $image_path;
        }
        $data->save();
        return redirect('monitor/' . $request->transaksi_id);
    }
    public function monitorById($id)
    {
        $monitor = \App\Monitoring::where('transaksi_id', $id)->get();
        $data = $monitor->all();
        // dd($data->all());
        return view('pengawas.monitor.singlemonitor', compact('data'));
    }
    public function hapus($id)
    {
        \App\Monitoring::destroy($id);
        return back();
    }
}
