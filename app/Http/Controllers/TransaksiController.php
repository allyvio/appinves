<?php

namespace App\Http\Controllers;

use App\Province;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = \App\Transaksi::with('paket')->get();
        // dd($data->all());
        $data = $transaksi->all();
        return view('admin.investasi.transaksi', compact('data'));
    }

    public function pesan($id)
    {
        $data = \App\Paket::findOrFail($id);
        // dd($data);
        // return view('ceckout', compact('data'));
        $provinces = Province::pluck('title', 'province_id');
        $cities = City::pluck('title', 'province_id', 'city_id');
        // dd($provinces);
        return view('ceckout', compact(['provinces', 'data']));
    }
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
        // dd($city);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        \Validator::make($request->all(), [
            'nama'  => 'required|min:5|max:200',
            // 'slug'  => ['required', Rule::unique('products')->ignore($new_product->slug, 'slug')],
            'ktp'   => 'required|min:16|max:16',
            'province_destination' => 'required',
            'city_destination' => 'required',
            'jalan'   => 'required',
            'phone'    => 'required|max:14',
            'email'    => 'required|email',
            'cekbok'    => 'required'
        ])->validate();


        $transaksi = new \App\Transaksi;
        $transaksi->user_id = Auth::user()->id;
        $transaksi->nama = $request->get('nama');
        $transaksi->ktp = $request->get('ktp');
        $transaksi->provinsi_id = $request->get('province_destination');
        $transaksi->kota_id = $request->get('city_destination');
        $transaksi->jalan = $request->get('jalan');
        $transaksi->phone = $request->get('phone');
        $transaksi->email = $request->get('email');
        $transaksi->status = 'On-order';

        $transaksi->save();


        DB::table('paket_transaksi')->insert([
            'transaksi_id' => $transaksi->id,
            'paket_id'    => $request->get('id_paket'),
        ]);
        return redirect('package');
    }
    public function show($id)
    {
        $transaksi = \App\Transaksi::where('id', $id)->with('paket')->get();
        $data = $transaksi->all();
        // dd($data);
        return view('admin.investasi.singletransaction', compact('data'));
    }

    public function posttf(Request $request)
    {
        $data = \App\Transaksi::findOrFail($request->transaksi_id);
        $image = $request->file('foto');
        if ($image) {
            $image_path = $image->store('transaksi', 'public');
            $data->bukti_tf = $image_path;
        }
        $data->status = "Booked";
        $data->save();
        return redirect('myinvestasi');
        // dd($request->all());
    }
    public function verification($value, $id)
    {
        $transaksi = \App\Transaksi::findOrFail($id);
        // $data = $transaksi->all();
        // dd($transaksi);

        if ($value == 1) {
            $transaksi->status = "Process";
        } elseif ($value == 2) {
            $transaksi->status = "Cancel";
        }
        $transaksi->save();
        return redirect('transaksi');
    }
}
