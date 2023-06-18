@extends('layouts.app')
@Section('hero')

<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
      <h1>SehatMental: sehat dan berkualitas</h1>
      <h2>Temukan Ketenangan Batin dan Kebahagiaan dengan SehatMental: Pendamping Kesehatan Mental Pribadi Anda</h2>
      </div>
    </div>
    <div class="text-center">
      <a href="{{ route('test') }}" style="background-color: rgb(252, 86, 86)" class="btn-get-started scrollto">
          <i class="bx bx-play"></i> Mulai tes sekarang juga !
      </a>
    </div>
  </div>
</section>

@endsection