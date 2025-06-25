

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalog Case iPhone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Katalog Case iPhone</h2>

        {{-- Form Pencarian --}}
        <form action="/catalog/search" method="GET" class="form-inline justify-content-center mb-4">
            <input type="text" name="q" class="form-control mr-2" placeholder="Cari tipe iPhone atau warna..."
                style="width: 300px;" required>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>

        {{-- Hasil Pencarian --}}
        @if(count($cs) > 0)
            <div class="row">
                @foreach($cs as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm h-100">
                            <img class="card-img-top" src="{{ asset('storage/' . $item->gambar) }}"
                                alt="{{ $item->tipeiphone }}" height="200" width="80">
                            <div class="card-body">
                                <h5 class="card-title mb-1">{{ $item->tipeiphone }}</h5>
                                <p class="card-text mb-1">Warna: <strong>{{ $item->warna }}</strong></p>
                                <p class="card-text mb-1">Stok: {{ $item->stok }}</p>
                                <p class="card-text text-primary font-weight-bold">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning text-center">Data tidak ditemukan</div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
