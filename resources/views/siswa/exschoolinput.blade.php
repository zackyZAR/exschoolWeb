@extends('layouts.appLayout')
@section('konten')

<style>
    .description{
        max-width:90px;
        overflow: hidden;
    }
    
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container">
     <div class="container mt-4">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Exschool') }}</div>
      
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif

                          <form action="{{ route('excshool.store') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group mb-3">
                                  <label for="exschool">Exschool</label>
                                  <input type="text" name="exschool" class="form-control" required>
                               </div>
                              <div class="form-group mb-3">
                                  <label for="description">Description</label>
                                  <textarea name="description" class="form-control" required></textarea>
                              </div>
                              <div class="container">
                               <label class="form-label" for="photo">Input Foto</label>
                               <input type="file" class="form-control" name="photo" id="photo" />
                             </div>
                              <button type="submit" class="btn btn-primary col-sm-12 mt-4 ">Submit</button>
                          </form>
                          </div>
      
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection