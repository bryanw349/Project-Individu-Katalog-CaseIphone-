@extends('layouts.main')
@section('title', 'Edit Caseip')
@section('content')
    <div class="card">
        <div class="card-header">Edit Caseip</div>
        <div class="card-body">
            <form action="/caseip/update/{{ $caseip->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>tipeiphone</label>
                    <input type="text" name="tipeiphone" class="form-control" value="{{ $caseip->tipeiphone }}" required>
                </div>
                <div class="form-group">
                    <label>warna</label>
                    <input type="text" name="warna" class="form-control" value="{{ $caseip->warna }}" required>
                </div>
                <div class="form-group">
                    <label>stok</label>
                    <input type="text" name="stok" class="form-control" value="{{ $caseip->stok }}" required>
                </div>
                <div class="form-group">
                    <label>harga</label>
                    <input type="number" min="0" max="1000000" name="harga" class="form-control" value="{{ $caseip->harga }}" required>
                </div>
                <div class="form-group">
                    <label>gambar</label>
                    <input type="file" accept="image/*" name="gambar" class="form-control-file">
                    <img src="{{asset('/storage/'.$caseip->gambar)}}" alt="{{$caseip->gambar}}" height="80" width="80">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
    </div>
@endsection
