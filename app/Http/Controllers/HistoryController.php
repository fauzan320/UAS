<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Pesanan;
use App\Pesanan_detail;
use Auth;
use App\User;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;


class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pesanans = Pesanan::where('user_id', FacadesAuth::user()->id)->where('status', '!=',0)->get();

    	return view('history.index', compact('pesanans'));
    }
    public function detail($id){
        $pesanan = Pesanan::where('id', $id)->first();
    	$pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan->id)->get();

     	return view('history.detail', compact('pesanan','pesanan_details'));
    }
}
