@extends('layouts.app')

@section('content')
<?php use App\Barang;?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3 " >
            <a href="{{url('home')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mb-2 " >    
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Total Pembayaran</th>
                                <th>kode Pembayaran</th>
                                <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->total_harga) }}</td>
                                <td>{{$pesanan->kode}}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
</div>
@endsection
