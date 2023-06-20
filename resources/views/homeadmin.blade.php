@extends('layouts.appLayout')

@section('konten')
<div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Kelas</th>
                <th>Exschool</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Siswa as $user)
            <tr>
                <td>{{ $user->Name }}</td>
                <td>{{ $user->Kelas }}</td>
                <td>{{ $user->Exschool }}</td>
                <td>{{ $user->Alamat }}</td>
                <!-- Kolom tabel lainnya -->
                <td>
                    <a href="{{ route('edit-siswa', $user->id) }}" class="btn btn-primary btn-xs">Edit</a>
                    <form action="{{ route('admin.data', $user->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection