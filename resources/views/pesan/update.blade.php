@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3 " >
            {{-- <a href="{{url('Check_out')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> Kembali</a> --}}
        </div>
        <div class="col-md-12 mb-2 " >    
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              {{-- <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$barang->nama_barang}}</li> --}}
            </ol>
        </nav>
        </div>
        
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <h3>{{$barang->nama_barang}}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('images')}}/{{$barang->gambar}}" class="rounded mx-auto d-block" width="75%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h4>Update Jumlah</h4>
                            <table class="table">
                                <body>
                                    <tr>
                                        <td>Harga</td>
                                        <td> : </td>
                                        <td>Rp. {{number_format($barang-> harga)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td> : </td>
                                        <td>{{number_format($barang-> stok)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> : </td>
                                        <td>{{($barang-> keterangan)}}</td>
                                    </tr>
                                   
                                        <tr>
                                            <td> jumlah Pesan</td>
                                            <td> : </td>
                                            <td> 
                                                <form method="POST" action="{{url('pesanmasukupdate')}}/{{$barang->id}}" >
                                                    {{ csrf_field() }}
                                                    <input type="number" name="jumlah_pesan" class="form-control" 
                                                    requiered="" >
                                                    <p><i>(Masukan Jumlah yang baru !)</i></p>
                                                    <button type="submit" class="btn btn-primary mt-3"> <i class="fa fa-shopping-cart"></i> 
                                                        Update Jumlah</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                
                                            </td>
                                        </tr>
                                    
                                </body>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
