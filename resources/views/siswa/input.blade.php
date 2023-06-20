@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Input</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Input Data') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form action="{{route('user.store')}}" method="POST">
                          @csrf
                          
    
                            
                          <div class="form-group row mt-4">
                            <label for="name" class="col-sm-2 col-form-label">name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                          </div>
                          </div>
                          <div class="container">
                         <div class="form-group row mt-4">
                            <label for="kelas" class="col-sm-2 col-form-label">kelas</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="kelas" id="kelas" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row mt-4 ">
                            <label class="col-sm-2 col-form-label">exschool</label>
                            <div class="col-md-10">
                            <select name="exschool" class="form-control">
                              <option value="">-SELECT-</option>
                              <option value="bola">bola</option>
                              <option value="voli">voli</option>
                              <option value="basket">basket</option>
                              <option value="tenis">tenis</option>
                              <option value="renang">renang</option>
                              <option value="estafet">estafet</option>
                              <option value="bahasa jerman">bahasa jerman</option>
                            </select>
                          </div>
                          </div>
                    
  
                          <div class="form-group row mt-4">
                               <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                               <div class="col-sm-10">
                               <input type="text" class="form-control" name="alamat" id="alamat" placeholder="">
                          </div>     
                          
                          @if (Auth::user()->role != 1)
                          <button class="btn btn-primary col-sm-12 mt-4 " type="subbmit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Input</button>
                          @else
                          <button class="btn btn-primary col-sm-12 mt-4 " type="subbmit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" disabled>Anda sudah memilih</button>
                          @endif
                        </form>   
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection