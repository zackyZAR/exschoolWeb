@extends('layouts.appLayout')
@section('konten')
<div class="container">
    {{-- <a href="/exportpdf" class="btn btn-info">Export PDF</a> --}}
    <table class="table table-scriped table-hover mx-auto w-60">
        {{-- <a href="{{route('siswa.dataexschool')}}" class="btn btn-success ">ADD</a> --}}
        <thead>
            <tr>
                <th>Exschool</th>
                <th>Description</th>
                <th>Photo</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($program as $user)
                <tr>
                    <td>{{$user->exschool}}</td>
                    <td>{{$user->description}}</td>
                    <td>{{$user->photo}}</td>
                    <td>
                        <a href="{{route('siswa.editexschool', $user->id) }}" class="btn btn-primary btn-sm">edit</a>
                        <form action="{{ route('siswa.destroyexschool', $user->id) }}" method="POST" style="display:inline">
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