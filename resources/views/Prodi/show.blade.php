<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href="{{asset ('css/show.css') }}">
</head>
<body>
    <div class="Prodi-item">
        <div class="faculty-details">
            <p>Nama Program Studi: {{ $studyprogram->name }}</p>
            <p>Fakultas: {{ $studyprogram->faculty_id }}</p>
            <p>Tahun Berdiri: {{ $studyprogram->since }}</p>
            <p>Nomor telepon: {{ $studyprogram->no_telp}}</p>
        </div>
        <div class="buttons">
            <a href="{{ route('Prodi.edit', $studyprogram->id) }}">Edit</a>

        </div>
    </div>
</body>
</html>
        