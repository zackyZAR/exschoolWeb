<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Data Exschool</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">{{ __('Edit Data Exschool') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('siswa.updateexschool', $program->id) }}" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group row">
                              <label for="exschool" class="col-sm-2 col-form-label">Exschool</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="exschool" id="exschool" placeholder="" value="{{ $program->exschool }}">
                              </div>
                            </div>
    
                            <div class="form-group row mt-4">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="description"  rows="3">{{ $program->description }}</textarea>
                                </div>
                            </div>
    
                             <div class="container">
                               <label class="form-label" for="photo">Input Foto</label>
                               <input type="file" class="form-control" name="photo" id="photo" value="{{ $program->photo}}"/>
                             </div>

                             <div class="container p-2">
                                <button class="btn btn-primary col-sm-12  " type="submit">Edit</button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>