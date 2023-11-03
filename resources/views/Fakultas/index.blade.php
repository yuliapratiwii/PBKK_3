<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Fakultas</title>
    <link rel = "stylesheet" href="{{asset ('css/index.css') }}">
</head>
<body>
    <h1>Fakultas-Fakultas Universitas Bengkulu</h1>
    <h2><a href="{{ route('Fakultas.create') }}">tambah</a></h2>
    @if (session()->has('pesan'))
        <div style="color: rgb(0, 0, 0)">
            {{ session()->get('pesan') }}
        </div>
    @endif

    @foreach ($faculties as $faculty)
        <div class="Fakultas-item">
            <div class="description">
                Nama Fakultas: {{ $faculty->name }}
                <br>
                Dekan: {{ $faculty->dean }}
                <br>
                Deskripsi: {{ $faculty->description }}
            </div>
            <div class="buttons">
                <a href="{{ route('Fakultas.show', $faculty->id) }}">Lihat</a>
                <a href="{{ route('Fakultas.edit', $faculty->id) }}">Edit</a>

                <form action="{{ route('Fakultas.destroy', $faculty->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" class="delete-button">
                </form>
            </div>
        </div>
        <hr>
    @endforeach
</body>
</html>
