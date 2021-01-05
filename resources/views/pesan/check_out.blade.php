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
              <li class="breadcrumb-item active" aria-current="page">Check Out</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                    
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
                                    <th>Aksi</th>
                                    <th>Edit Jumlah</th>
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
                                    <td>
                                        <form action="{{url('delete')}}/{{ $pesanan_detail->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus ?');">
                                                <i class="fa fa-trash" ></i>
                                            </button>
                                        </form>
                                        {{-- <script>
                                            hapus(){
                                                Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!'
                                                }).then((result) => {
                                                if (result.isConfirmed) {
                                                    Swal.fire(
                                                    'Deleted!',
                                                    'Your file has been deleted.',
                                                    'success'
                                                    )
                                                }
                                                })
                                            }
                                        </script> --}}
                                        
                                    </td>
                                    <td>
                                        <form action="{{url('edit')}}/{{ $pesanan_detail->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Anda yakin edit data ini ? \nkarna data lama akan terhapus\ndan perlu data baru ');">
                                                <i class="fa fa-edit" ></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4" align="right"><strong>Total Harga : </strong></td>
                                    <td>Rp. {{ number_format($pesanan->total_harga)}}</td>
                                    <td>
                                        <a href="{{ url('konfirmasi_check_out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                            <i class="fa fa-shopping-cart"></i> Check Out
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                        <p>Silahkan pesan Produk yang anda sukai </p>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>
@endsection
