{{-- <div class="Fakultas-item">
    <div>
        Nama Fakultas: {{ $faculty->name }}
        <br>
        Dekan: {{ $faculty->dean }}
        <br>
        Deskripsi: {{ $faculty->description }}
    </div>
    <div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
    <div class="Fakultas-item">
        <div class="faculty-details">
            <p>Nama Fakultas: {{ $faculty->name }}</p>
            <p>Dekan: {{ $faculty->dean }}</p>
            <p>Deskripsi: {{ $faculty->description }}</p>
        </div>
        <div class="buttons">
            <a href="{{ route('Fakultas.edit', $faculty->id) }}">Edit</a>

        </div>
    </div>
</body>
</html>
        