@extends('layouts.main')
@section('title', 'Form Add Caseip')
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tipeiphone</label>
                    <input type="text" name="tipeiphone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <select name="warna" class="form-control">
                        <option value="0">--Pilih Warna--</option>
                        <option value="Merah">Merah</option>
                        <option value="Pink">Pink</option>
                        <option value="Hitam">Hitam</option>
                        <option value="Putih">Putih</option>
                        <option value="Biru">Biru</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" min="0" max="8" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" name="gambar" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
    </div>
@endsection
