<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.investasi.index');
    }
    public function komen($id)
    {
        $paket = \App\Paket::findOrFail($id);
        $komen = \App\Komen::where('paket_id', $paket->id)->get()->all();

        return view('komen', compact('paket', 'komen'));
    }
    public function storeKomen(Request $request)
    {
        // dd($request->all());
        \Validator::make($request->all(), [
            'komen'  => 'required|max:200',
        ])->validate();
        $new = new \App\Komen;
        $new->paket_id = $request->get('paket_id');
        $new->user_id = Auth::user()->id;
        $new->komen = $request->get('komen');
        $new->save();
        return back();
    }

    public function paket()
    {
        $paket = \App\Paket::all();
        return view('admin.paket.index', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paket.create');
        //
    }
    public function myinvestasi()
    {
        $user_id = Auth::user()->id;
        $transaksi = \App\Transaksi::with('paket')->where('user_id', $user_id)->get();
        $data = $transaksi->all();
        // dd($data);
        return view('myinvestasi', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = new \App\Paket;

        \Validator::make($request->all(), [
            'nama_paket'  => 'required|min:5|max:200',
            'deskripsi'   => 'required|min:20|max:1024',
            'modal' => 'required|digits_between:0,10',
            'luas_lahan' => 'required|digits_between:0,10',
            'profit'   => 'required|digits_between:0,10',
            'waktu'   => 'required|min:1|max:20',
            'foto'    => 'required|mimes:jpg,jpeg,png|max:1024'
        ])->validate();

        $data->nama_paket = $request->get('nama_paket');
        $data->deskripsi = $request->get('deskripsi');
        $data->modal = $request->get('modal');
        $data->luas_lahan = $request->get('luas_lahan');
        $data->profit = $request->get('profit');
        $data->waktu = $request->get('waktu');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('paket', 'public');
            $data->foto = $image_path;
        }

        $data->save();
        return redirect('paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $transaksi = \App\Transaksi::where('id', $id)->with('paket')->get();
        $data = $transaksi->all();
        // dd($data);
        return view('singleinvestasi', compact('data'));
    }
    public function showId($id)
    {
        $transaksi = \App\Transaksi::where('id', $id)->with('paket')->get();
        $data = $transaksi->all();
        // dd($data);
        return view('invesonprocess', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function task()
    {
        $transaksi = \App\Transaksi::where('status', 'Process')->with('paket')->get();
        // dd($data->all());
        $data = $transaksi->all();
        return view('pengawas.task.index', compact('data'));
    }
}
