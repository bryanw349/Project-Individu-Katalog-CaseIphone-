@extends('layouts/main')
@section('title', "Caseip")
@section('content')
    @if (session('alert'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alert') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="/caseip/formadd" class="btn btn-primary"><i class="bi bi-plus-square-fill"></i>Add Case Ip</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>tipeiphone</th>
                        <th>warna</th>
                        <th>stok</th>
                        <th>harga</th>
                        <th>gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cs as $idx => $m)
                        <tr>
                            <td>{{ $idx + 1 }}</td>
                            <td>{{ $m->tipeiphone }}</td>
                            <td>{{ $m->warna }}</td>
                            <td>{{ $m->stok }}</td>
                            <td>{{ $m->harga }}</td>
                            <td>
                                @if ($m->gambar)
                                    <img src="{{ asset('storage/' . $m->gambar) }}" alt="{{$m->gambar}}" height="80" width="80">
                                @else
                                    <img src="data:image/jpeg;base64,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"
                                        alt="No Image" height="80" width="80">
                                @endif
                            </td>
                            <td>
                                <a href="/caseip/edit/{{ $m->id }}" class="btn btn-success">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="/caseip/delete/{{ $m->id }}" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
