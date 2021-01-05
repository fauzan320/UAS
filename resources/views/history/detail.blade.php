@extends('layouts.app')

@section('content')
<?php use App\Barang;?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3 " >
            <a href="{{url('history')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mb-2 " >    
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('history')}}">Riwayat Pemesanan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="card-body">
                    <h3>Sucsess Check Out</h3>
                    <hr>
                    <h6>Pesanan anda telah <strong>Berhasil</strong> di Check Out, selanjutnya untuk pembayaran silahkan
                        transfer ke rekening <br><strong>Bank BRI No.Rekening : 11111-22222-33333</strong>
                        dengan nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }},-</strong>
                    </h6>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-info"></i> Detail Pemesanan</h3>
                </div>
                <div class="card-body">
                    <div >
                        @if (!empty($pesanan))
                        <p align="right">Tanggal Pesan : {{$pesanan->tanggal}}</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Makanan</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Jumlah Harga</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($pesanan_details as $pesanan_detail)                                
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>
                                        <img src="{{url('images')}}/{{$pesanan_detail->Barang->gambar}}" width="100" alt="">
                                    </td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td> 
                                    <td>{{ $pesanan_detail->jumlah }} pcs</td>
                                    <td align="left">Rp. {{ number_format($pesanan_detail->Barang->harga) }}</td>
                                    <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4" align="right"><strong>Total Harga : </strong></td>
                                    <td>Rp. {{ number_format($pesanan->total_harga)}}</td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="4" align="right"><strong>Kode Unik :</strong></td>
                                    <td align="left"><strong>{{ number_format($pesanan->kode) }}</strong></td>
                                    
                                </tr>
                                 <tr>
                                    <td colspan="4" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                    <td align="left"><strong>Rp. {{ number_format($pesanan->kode+$pesanan->total_harga) }}</strong></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>
@endsection
