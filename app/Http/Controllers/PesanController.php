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

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $barang = Barang::where ('id', $id) ->first();

        return view('pesan.index', compact('barang'));
    }

    public function pesanmasuk (Request $request, $id) 
    {
        $barang = Barang :: where ('id', $id)->first();
        $tanggal = Carbon::now();

        // cek mas stok
        if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('pesan/'.$id);
    	}

        // validasi pesanan cek
        $cek_pesanan=Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
      
        if(empty($cek_pesanan))
        {
            //simpan ke database pesanan
            $pesanan =new Pesanan;
            $pesanan ->user_id = FacadesAuth::user()->id;
            $pesanan ->tanggal = $tanggal;
            $pesanan ->status = 0;
            $pesanan ->total_harga = 0;
            $pesanan ->kode = mt_rand(100,999);
            $pesanan ->save();
        }

        // simpan ke pesanan detail
        $pesanan_baru =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        // cek pesanan dengan barang yg sama
        $cek_pesanan_detail = Pesanan_detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
    	{
            $pesanan_details = new Pesanan_detail;
            // $pesanan__details -> barang_id -> $barang-> id;
            $pesanan_details->barang_id=$id;
            $pesanan_details->pesanan_id=$pesanan_baru->id;
            $pesanan_details->jumlah=$request->jumlah_pesan;
            $pesanan_details->jumlah_harga=$barang->harga*$request->jumlah_pesan;
            $pesanan_details->save();
        }else{
            $pesanan_details = Pesanan_detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_details->jumlah= $pesanan_details->jumlah + $request->jumlah_pesan  ;
            //harga sekrang
            $harga_pesanan_details_baru =  $barang->harga*$request->jumlah_pesan;
            $pesanan_details->jumlah_harga=$pesanan_details->jumlah_harga+$harga_pesanan_details_baru;
            $pesanan_details->update();
        }
        $pesanan =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        $pesanan->total_harga=$pesanan->total_harga+ $barang->harga*$request->jumlah_pesan;
        $pesanan->update(); 

        // Alert::success('Pesanan sukses masuk keranjang', 'Sukses');
        alert()->success('Pesanan sukses masuk keranjang', 'Sukses');

        return redirect('Check_out');

    }

    public function Check_out()
    {
        $pesanan =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        $pesanan_details = [];
        if (!empty($pesanan))
        {
            $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan->id)->get();
        }

        return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
        
    }
    public function delete($id)
    {   
        $pesanan_detail = Pesanan_Detail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        
        $pesanan_detail->delete();

        alert()->error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('Check_out');
    }

    public function konfirmasi_check_out(){
        $user = User::where('id', FacadesAuth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert()->error('Identitas Harap dilengkapi !', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            Alert()->error('Identitas Harap dilengkapi !', 'Error');
            return redirect('profile');
        }

        $pesanan =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        $pesanan_id= $pesanan->id;
        $pesanan ->status=1;
        $pesanan->update();

        $pesanan_details = Pesanan_Detail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }

        Alert()->success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);

    }

    //edit check out
    public function edit($id)
    {   
        $pesanan_detail = Pesanan_Detail::where('id', $id)->first();

        
        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        
        $pesanan_detail->delete();
        alert()->success('Silahkan masukan jumlah pesanan baru !', 'Edit');
        $barang = Barang::where ('id', $pesanan_detail->barang_id) ->first();

        return view('pesan.update', compact('barang'));
        
    }
    public function pesanmasukupdate(Request $request ,$id)
    {
        $barang = Barang :: where ('id', $id)->first();
        $tanggal = Carbon::now();

        // cek mas stok
        if($request->jumlah_pesan > $barang->stok)
    	{
    		return redirect('pesan/'.$id);
    	}

        // validasi pesanan cek
        $cek_pesanan=Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
      
        if(empty($cek_pesanan))
        {
            //simpan ke database pesanan
            $pesanan =new Pesanan;
            $pesanan ->user_id = FacadesAuth::user()->id;
            $pesanan ->tanggal = $tanggal;
            $pesanan ->status = 0;
            $pesanan ->total_harga = 0;
            $pesanan ->kode = mt_rand(100,999);
            $pesanan ->save();
        }

        // simpan ke pesanan detail
        $pesanan_baru =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        // cek pesanan dengan barang yg sama
        $cek_pesanan_detail = Pesanan_detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
    	{
            $pesanan_details = new Pesanan_detail;
            // $pesanan__details -> barang_id -> $barang-> id;
            $pesanan_details->barang_id=$id;
            $pesanan_details->pesanan_id=$pesanan_baru->id;
            $pesanan_details->jumlah=$request->jumlah_pesan;
            $pesanan_details->jumlah_harga=$barang->harga*$request->jumlah_pesan;
            $pesanan_details->save();
        }else{
            $pesanan_details = Pesanan_detail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_details->jumlah= $pesanan_details->jumlah + $request->jumlah_pesan  ;
            //harga sekrang
            $harga_pesanan_details_baru =  $barang->harga*$request->jumlah_pesan;
            $pesanan_details->jumlah_harga=$pesanan_details->jumlah_harga+$harga_pesanan_details_baru;
            $pesanan_details->update();
        }
        $pesanan =Pesanan::where('user_id', FacadesAuth::user()->id)->where('status',0)->orderBy('id','desc')->first();
        $pesanan->total_harga=$pesanan->total_harga+ $barang->harga*$request->jumlah_pesan;
        $pesanan->update(); 

        
        alert()->success('Update Berhasil', 'Sukses');

        return redirect('Check_out');
    }

    



    

}
