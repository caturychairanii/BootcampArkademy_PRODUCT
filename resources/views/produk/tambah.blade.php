@extends('index')

@section('content')
    <form action="/produk/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlInput1">Produk</label>
            <input type="text" name="nama_produk" class="form-control" id="exampleFormControlInput1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Keterangan</label>
            <textarea name="keterangan" class="form-control" id="exampleFormControlInput2" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput3">Harga</label>
            <input type="number" name="harga" class="form-control" id="exampleFormControlInput3" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput4">jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput4" >
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </form>
@endsection