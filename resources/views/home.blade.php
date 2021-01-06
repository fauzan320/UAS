@extends('layouts.app')

@section('content')
{{-- <!-- Hero section -->
<section class="page-top-section set-bg" data-setbg="{{ url('template/img/page-top-bg.jpg') }}">
    <div class="container">
        <h2>Produk Pisangin_Ajaa</h2>
    </div>
</section>
<!-- Hero section end --> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <img src="{{ url('images/LOGO.png') }}" class="rounded mx-auto d-block" class="" width="150" alt="">
        </div>
        @foreach ($barangs as $barang)
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="{{url('images')}}/{{$barang->gambar}}"  alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$barang-> nama_barang}}</h5>
                <p class="card-text">
                    <strong>Harga : </strong> Rp. {{number_format($barang-> harga)}} <br>
                    <strong>Stok  :</strong> {{$barang->stok}} <br>
                    <hr>
                    <strong>Keterangan  :</strong> <br> {{$barang->keterangan}}
                    
                </p>
                <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pre-Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
