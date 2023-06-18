@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Konsultasi Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li>Konsultasi Mental</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    
<section class="inner-page">
  <div class="container">
    <p style="text-align: justify">Masa-masa sulit dalam hidup sering kali membutuhkan dukungan dan bantuan. Jika Anda merasa sedang menghadapi tantangan dan perlu berbicara dengan seseorang, tim kami siap membantu.</p>

    <p style="text-align: justify">Kami memahami bahwa setiap perjalanan adalah unik, dan kami ingin mendengarkan Anda dengan sepenuh hati. Kami menawarkan konseling profesional yang berpusat pada Anda, untuk membantu Anda mengatasi kesulitan, menemukan pemahaman diri yang lebih dalam, dan mengembangkan keterampilan yang diperlukan untuk mencapai kesejahteraan mental.</p>

    <p style="text-align: justify">Jangan ragu untuk menghubungi kami jika Anda ingin memulai perjalanan konseling. Tim kami berdedikasi untuk memberikan lingkungan yang aman, dukungan yang hangat, dan kualitas pelayanan yang terbaik bagi setiap individu yang mencari bantuan.</p>

    <p style="text-align: justify">Jika Anda merasa terbebani oleh masalah, stress, atau perasaan yang berat, janganlah berjuang sendirian. Kami di sini untuk membantu Anda menemukan jalan keluar. Konsultasi dengan profesional yang berpengalaman dapat memberikan dukungan, pemahaman, dan strategi untuk mengatasi kesulitan yang Anda hadapi.</p>

    <p style="text-align: justify">Kami percaya bahwa setiap individu berhak hidup dengan damai, bahagia, dan sehat secara mental. Dalam sesi konseling, kami akan mendengarkan dengan penuh empati, memberikan ruang aman untuk Anda berbagi, dan bekerja sama dengan Anda dalam mengembangkan solusi yang sesuai dengan kebutuhan dan nilai-nilai Anda.</p>

    <div class="alert alert-primary" role="alert">
      <strong>INFO</strong> : Konsultasi ini tidak gratis, silakan hubungi kami untuk informasi lebih lanjut. Kami menjaga kerahasiaan masalah Anda, sehingga Anda tidak perlu khawatir.
    </div>

    <div class="contact-whatsapp">
      <p>Jika Anda ingin melakukan konsultasi langsung, silakan hubungi kami melalui WhatsApp:</p>
      <div class="row g-1">
        <div class="col-sm-4">
          <div class="card bg-success shadow-md ">
            <div class="card-body text-center">
              <a style="font-size: 1.3rem" class="text-decoration-none text-white" href="https://wa.me/{{ env('CONTACT1') }}" target="_blank">
                <i class="bi bi-whatsapp"></i> 
                <span>
                Admin SehatMental 1
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-success shadow-md ">
            <div class="card-body text-center text-white">
              <a style="font-size: 1.3rem" class="text-decoration-none text-white" href="https://wa.me/{{ env('CONTACT2') }}" target="_blank">
                <i class="bi bi-whatsapp"></i> 
                <span>
                Admin SehatMental 2
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card bg-success shadow-md ">
            <div class="card-body text-center">
              <a style="font-size: 1.3rem" class="text-decoration-none text-white" href="https://wa.me/{{ env('CONTACT3') }}" target="_blank">
                <i class="bi bi-whatsapp"></i> 
                <span>
                Admin SehatMental 3
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection