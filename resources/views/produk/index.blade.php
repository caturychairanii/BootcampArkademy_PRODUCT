@extends('index')

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12"><br>
            <!-- DATA TABLE-->
            <a href="/produk/tambah" class="btn btn-primary">Tambah</a>
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Keterangan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk as $row)
                        <tr>
                            <td>{{ $row->nama_produk }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>{{ number_format($row->harga) }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <td>
                                <a href="/produk/edit/{{ $row->id }}" class="btn btn-primary">Edit</a> || 
                                <a href="/produk/hapus/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    

    </div>
@endsection