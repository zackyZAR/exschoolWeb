@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('users.renang')}}"></a>
    <table class="table table-striped table-hover">
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