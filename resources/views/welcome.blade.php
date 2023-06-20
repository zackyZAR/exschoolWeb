<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exschool</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           .description{
            max-height: 98px;
            overflow: hidden;
           }
        </style>
        @vite(['resources/css/app.css','resource/js/app.js'])
    </head>
    <body>
        @include('layouts.userNav')
         <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Welcome</h1>
        </div>
      </div>
  </section><!-- End Hero -->
    </body>

    <main id=main>
         <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container " data-aos="fade-up">
  
          <div class="section-title">
            <h2>About</h2>
          </div>
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach($program as $a)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('photos/' . $a->photo) }}" class="card-img-top" style="object-fit:inherit; height: 180px; width:100%;" alt="{{ $a->photo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $a->exschool }}</h5>
                            <div class="card-text description" id="description_{{ $a->id }}">
                                <p>{{ $a->description }}</p>
                                {{-- <div class="text-end">
                                    <a href="#" class="btn btn-outline-primary">More</a>
                                </div> --}}
                            </div>   
                            <a href="{{route('excshool.show',$a->id)}}" class="readMoreLink" data-id="{{$a->id}}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            </div>
        </div>
      </section><!-- End About Section -->


    </main>
</html>
