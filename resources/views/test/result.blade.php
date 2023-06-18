@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Hasil Tes Sehat Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li>Hasil Tes Sehat Mental</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">

    @auth
        <p class="lead">
          <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}  
          <span class="mx-3">
            <i class="bi bi-stopwatch"></i> {{ $waktu->diffForHumans() }}
          </span>
        </p>
    @endauth

    <h2>{{ $hasil }}</h2>
    <p style="text-align: justify">Hasil tes sehat mental kamu adalah <strong>{{ $hasil }}</strong>. Hasil ini didapatkan dari jawaban kamu pada tes sehat mental. Hasil ini tidak dapat menggantikan diagnosa dokter. Jika kamu merasa memiliki masalah kesehatan mental, segera hubungi dokter terdekat.</p>

    <h4 class="fw-bold">Penjelasan Hasil</h4>
    @if ($skor >= 1 && $skor <= 9) 
    <p>Skor kamu adalah {{ $skor }}. <br> Kamu termasuk dalam kategori <strong>{{ $hasil }}</strong>.</p>
    <span class="text-muted">Kata-kata: Kuat, stabil, bahagia, bersemangat, penuh harapan.</span>
    <p style="text-align: justify">
      Kamu memiliki kesehatan mental yang sangat baik. Kamu memiliki kemampuan untuk mengatasi kesulitan, merasa bahagia, dan mampu mengambil keputusan. Kamu juga mampu melakukan hal-hal yang bermanfaat dalam hidup, menikmati kegiatan atau pekerjaan sehari-hari, dan merasa tenang dan damai. Kamu juga bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan.
    </p>
    <h4 class="fw-bold">Saran untuk kamu</h4>
    <p style="text-align: justify">
      Terus menjaga keseimbangan emosional dan merawat kesehatan mental dengan tetap terhubung dengan diri sendiri, menjaga rutinitas sehat, dan menjalani gaya hidup yang seimbang.
    </p>
    @elseif ($skor >= 10 && $skor <= 19)
    <p>Skor kamu adalah {{ $skor }}. <br> Kamu termasuk dalam kategori <strong>{{ $hasil }}</strong>.</p>
    <span class="text-muted">Kata-kata: Seimbang, optimis, produktif, percaya diri, bersyukur.</span>
    <p style="text-align: justify">
      Kamu memiliki kesehatan mental yang baik. Kamu memiliki kemampuan untuk mengatasi kesulitan, merasa bahagia, dan mampu mengambil keputusan. Kamu juga mampu melakukan hal-hal yang bermanfaat dalam hidup, menikmati kegiatan atau pekerjaan sehari-hari, dan merasa tenang dan damai. Kamu juga bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan.
    </p>
    <h4 class="fw-bold">Saran untuk kamu</h4>
    <p style="text-align: justify">
      Terus merawat kesehatan mental dengan mengelola stres, menjaga hubungan sosial yang positif, berinvestasi dalam waktu luang yang bermakna, dan menjaga gaya hidup yang sehat.
    </p>
    @elseif ($skor >= 20 && $skor <= 29)
    <p>Skor kamu adalah {{ $skor }}. <br> Kamu termasuk dalam kategori <strong>{{ $hasil }}</strong>.</p>
    <span class="text-muted">Kata-kata: Cemas, lelah, bingung, ragu-ragu, perlu dukungan.</span>
    <p style="text-align: justify">
      Kamu memiliki kesehatan mental yang cukup baik. Kamu memiliki kemampuan untuk mengatasi kesulitan, merasa bahagia, dan mampu mengambil keputusan. Kamu juga mampu melakukan hal-hal yang bermanfaat dalam hidup, menikmati kegiatan atau pekerjaan sehari-hari, dan merasa tenang dan damai. Kamu juga bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan.
    </p>
    <h4 class="fw-bold">Saran untuk kamu</h4>
    <p style="text-align: justify">
      Mencari dukungan sosial, berbicara dengan orang terdekat atau profesional kesehatan mental, menjaga rutinitas sehat, dan mencari kegiatan yang membantu mengurangi stres dan meningkatkan kesejahteraan.
    </p>
    @elseif ($skor >= 30 && $skor <= 39)
    <p>Skor kamu adalah {{ $skor }}. <br>  Kamu termasuk dalam kategori <strong>{{ $hasil }}</strong>.</p>
    <span class="text-muted">Stres, cemas berlebihan, putus asa, lelah secara emosional, perlu intervensi.</span>
    <p style="text-align: justify">
      Kamu memiliki kesehatan mental yang kurang baik. Kamu memiliki kemampuan untuk mengatasi kesulitan, merasa bahagia, dan mampu mengambil keputusan. Kamu juga mampu melakukan hal-hal yang bermanfaat dalam hidup, menikmati kegiatan atau pekerjaan sehari-hari, dan merasa tenang dan damai. Kamu juga bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan.
    </p>
    <h4 class="fw-bold">Saran untuk kamu</h4>
    <p style="text-align: justify">
      Mencari bantuan dari profesional kesehatan mental, seperti psikolog atau psikiater, mengambil langkah-langkah untuk mengurangi beban stres, seperti berolahraga, bermeditasi, dan memprioritaskan diri sendiri.
    </p>
    @elseif ($skor >= 40 && $skor <= 50)
    <p>Skor kamu adalah {{ $skor }}. <br> Kamu termasuk dalam kategori <strong>{{ $hasil }}</strong>.</p>
    <span class="text-muted">Putus asa, terisolasi, depresi, cemas yang parah, perlu perhatian segera.</span>
    <p style="text-align: justify">
      Kamu memiliki kesehatan mental yang sangat kurang baik. Kamu memiliki kemampuan untuk mengatasi kesulitan, merasa bahagia, dan mampu mengambil keputusan. Kamu juga mampu melakukan hal-hal yang bermanfaat dalam hidup, menikmati kegiatan atau pekerjaan sehari-hari, dan merasa tenang dan damai. Kamu juga bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan.
    </p>
    <h4 class="fw-bold">Saran untuk kamu</h4>
    <p style="text-align: justify">
      Segera mencari bantuan dari profesional kesehatan mental, berbicara dengan orang terdekat atau anggota keluarga, menghubungi layanan darurat jika diperlukan, dan mencari dukungan dari lingkungan yang dapat diandalkan.
    </p>
    @endif
    <div class="text-center mt-3">
      <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"><img src="https://i.ibb.co/t4W2bTS/CTA-Blog-Mentoring-5-5.png" alt="CTA-Blog-Mentoring-5-5" border="0"></a>
    </div>
  </div>
</section>

    
@endsection