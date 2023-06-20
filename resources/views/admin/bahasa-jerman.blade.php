@extends('layouts.appLayout')
@section('konten')
<div class="container">
    <table class="table table-scriped table-hover mx-auto w-60">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Exschool</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Siswa as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->kelas}}</td>
                    <td>{{$user->exschool}}</td>
                    <td>{{$user->alamat}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection