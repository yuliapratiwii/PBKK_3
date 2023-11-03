<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Formulir Input Data Program Studi</title>
</head>
<body>
    <form action="{{ route('Prodi.store') }}" method="POST">
        @csrf
        <table width="2060" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr height="46">
                <td width="10%"></td>
                <td width="15%"></td>
                <td width="55%"><font color="orange" size="5"> Formulir Input Data Program Studi </font></td>
            </tr>
            <tr height="46">
                <td></td>
                <td>Nama Prodi</td>
                <td><input type="text" name="name" size="35" maxlength="50" value="{{ old('name') }}" /></td>
            </tr>
            <tr height="46">
                <td></td>
                <td>Fakultas</td>
                <td colspan="5"> <!-- Menggunakan colspan untuk membuat sel lebih lebar -->
                    <select name="faculty_id" style="width: 100%;",> <!-- Menetapkan lebar select box ke 100% -->
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr height="46">
                <td></td>
                <td>Tahun Berdiri</td>
                <td><input type="text" name="since" size="35" maxlength="50" value="{{ old('since') }}" /></td>
            </tr>
            <tr height="46">
                <td></td>
                <td>Nomor Telepon</td>
                <td><input type="text" name="no_telp" size="35" maxlength="50" value="{{ old('no_telp') }}" /></td>
            </tr>
            <tr height="46">
                <td></td>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
