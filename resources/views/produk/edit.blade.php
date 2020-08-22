@extends('index')

@section('content')
@foreach($produk as $row)
<form action="/produk/update/{{ $row->id }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleFormControlInput1">Produk</label>
        <input type="text" name="nama_produk" class="form-control" value="{{ $row->nama_produk }}" id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Keterangan</label>
        <textarea name="keterangan" class="form-control" id="exampleFormControlInput2" cols="30" rows="10">{{ $row->keterangan }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Harga</label>
        <input type="number" name="harga" class="form-control" value="{{ $row->harga }}" id="exampleFormControlInput3" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput4">jumlah</label>
        <input type="number" name="jumlah" class="form-control" value="{{ $row->jumlah }}" id="exampleFormControlInput4" >
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>
@endforeach
@endsection