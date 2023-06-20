@extends('layouts.appLayout')
@section('konten')
<div class="container">
    <a href="/exportpdf" class="btn btn-info">Export PDF</a>
    <table class="table table-scriped table-hover mx-auto w-60">
        <a href="{{route('user.create')}}" class="btn btn-success ">ADD</a>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Exschool</th>
                <th>Alamat</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Siswa as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->kelas}}</td>
                    <td>{{$user->exschool}}</td>
                    <td>{{$user->alamat}}</td>
                    <td>
                        <a href="{{route('edit', $user->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <form action="{{ route('admin.data', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button  class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
               
            @endforeach
        </tbody>
    </table>
</div>
@endsection