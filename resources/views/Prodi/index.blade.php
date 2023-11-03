<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program Study</title>
    <link rel = "stylesheet" href="{{asset ('css/pindex.css') }}">
    
</head>
<body>
    
    <h1>Program Studi Universitas Bengkulu</h1>
    <h2><a href="{{ route('Prodi.create') }}">tambah</a></h2>
    @if (session()->has('pesan'))
        <div style="color: rgb(0, 0, 0)">
            {{ session()->get('pesan') }}
        </div>
    @endif

    @foreach ($studyprograms as $studyprogram)
        <div class="Prodi-item">
            <div class="description">
                Nama Prodi: {{ $studyprogram->name }}
                <br>
                Fakultas: {{ $studyprogram->faculty->name?? 'no author' }}
                <br>
                Tahun berdiri: {{ $studyprogram->since }}
                <br>
                Nomor Telepon: {{ $studyprogram->no_telp }}
            </div>
            <div class="buttons">
                <a href="{{ route('Prodi.show', $studyprogram->id) }}">Lihat</a>
                <a href="{{ route('Prodi.edit', $studyprogram->id) }}">Edit</a>
                <br>
                <form action="{{ route('Prodi.destroy', $studyprogram->id) }}" method="post" class="delete-form">
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
