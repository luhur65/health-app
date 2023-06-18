@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Selamat mengerjakan!!</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('test') }}">Tes Sehat Mental</a></li>
        <li>Mulai Tes</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

{{-- form kuis --}}
<div class="container my-5">
  <div class="progress mb-3" role="progressbar" aria-label="Animated striped example" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style=""></div>
  </div>
  <form class="" action="{{ route('test.process.result') }}" method="post">

  @csrf
  <div id="all-soal"></div>
  
  
  <div class="my-3">
    <button type="button" class="btn btn-outline-secondary btn-sm" id="back">
      <i class="bi bi-arrow-left"></i>
      Kembali
    </button>
    <button type="button" class="btn btn-secondary btn-sm" id="next">
      Lanjut
      <i class="bi bi-arrow-right"></i>
    </button>
    <button type="submit" class="btn btn-primary btn-sm d-none" id="submit">
        Selesai
      </span>
    </button>
  </div>
</form>
  
</div>

@push('scripts')

<script>

  const soalTests = [
    'Dalam satu bulan terakhir, apakah kamu merasa tidak sanggup mengatasi kesulitan?',
    'Dalam satu bulan terakhir, apakah kamu merasa tidak bahagia dan tertekan?',
    'Dalam satu bulan terakhir, apakah kamu merasa sulit untuk mengambil keputusan?',
    'Apakah dalam satu bulan terakhir, kamu merasa mampu melakukan hal-hal yang bermanfaat dalam hidup?',
    'Dalam satu bulan terakhir, apakah kamu bisa menikmati kegiatan atau pekerjaan sehari-harimu?',
    'Dalam satu bulan terakhir, apakah kamu merasa tenang dan damai?',
    'Dalam satu bulan terakhir, apakah kamu susah tidur karena khawatir?',
    'Dalam satu bulan terakhir, apakah kamu bisa berkonsentrasi pada hal-hal yang sedang kamu kerjakan?',
    'Dalam satu bulan terakhir, apakah kamu bisa menghadapi masalah-masalah yang ada?',
    'Dalam satu bulan terakhir, apakah kamu merasa kehilangan kepercayaan diri?',

  ];

  for (let index = 0; index < 10; index++) {
    const render = `<div class="form-group soal-kuis mb-3 ${index + 1 > 1 ? 'd-none' : ''}">
    <label class="lead mb-3" id="soal${index + 1}">${index + 1}. ${soalTests[index]}</label>
    <ul class="list-group">
      <li class="list-group-item mb-1 rounded border border-1">
        <input class="form-check-input me-1" type="radio" name="jawabanSoal${index + 1}" value="5" id="firstRadioSoal${index + 1}" required>
        <label class="form-check-label" for="firstRadioSoal${index + 1}">
          Iya, lebih dari biasanya
        </label>
      </li>
      <li class="list-group-item mb-1 rounded border border-1">
        <input class="form-check-input me-1" type="radio" name="jawabanSoal${index + 1}" value="4" id="secondRadioSoal${index + 1}">
        <label class="form-check-label" for="secondRadioSoal${index + 1}">
          Sama saja seperti biasanya
        </label>
      </li>
      <li class="list-group-item mb-1 rounded border border-1">
        <input class="form-check-input me-1" type="radio" name="jawabanSoal${index + 1}" value="2" id="thirdRadioSoal${index + 1}">
        <label class="form-check-label" for="thirdRadioSoal${index + 1}">
          Tidak, kurang dari biasanya
        </label>
      </li>
      <li class="list-group-item mb-1 rounded border border-1">
        <input class="form-check-input me-1" type="radio" name="jawabanSoal${index + 1}" value="1" id="fourthRadioSoal${index + 1}">
        <label class="form-check-label" for="fourthRadioSoal${index + 1}">
          Sangat kurang dari biasanya
        </label>
      </li>
    </ul>
  </div>`;
    document.querySelector('#all-soal').innerHTML += render;

  }

  document.addEventListener('DOMContentLoaded', function() {

    // form-group
    const formGroup = document.querySelectorAll('.soal-kuis');

    // ambil index form-group
    let index = 0;

    // ambil jumlah form-group
    const jumlahFormGroup = formGroup.length - 1;

    // ambil button next
    const next = document.querySelector('#next');

    // ambil button back
    const back = document.querySelector('#back');

    // ambil progress bar
    const progress = document.querySelector('.progress-bar');

    next.addEventListener('click', function() {

       // cek apakah jawaban sudah diisi
      const currentFormGroup = formGroup[index];
      const selectedOption = currentFormGroup.querySelector('input[type="radio"]:checked');

      if (!selectedOption) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Jawaban belum diisi!',
        });
        return;
      }

      // cek apakah index sudah mencapai jumlah form-group
      if (index < jumlahFormGroup) {
        // jika belum, maka index ditambah 1
        index++;
        // tampilkan form-group yang sesuai dengan index
        formGroup[index].classList.remove('d-none');
        // sembunyikan form-group sebelumnya
        formGroup[index - 1].classList.add('d-none');
      }

      // cek apakah index sudah mencapai jumlah form-group
      if (index === jumlahFormGroup) {
        // jika sudah, maka tampilkan button submit
        document.querySelector('#submit').classList.remove('d-none');
        // sembunyikan button next
        next.classList.add('d-none');
      }

      // progress bar
      progress.style.width = `${(index + 1) * 10}%`;

      // cek apakah sudah menjawab soal
      

    });

    back.addEventListener('click', function() {
      // cek apakah index sudah mencapai jumlah form-group
      if (index > 0) {
        // jika belum, maka index ditambah 1
        index--;
        // tampilkan form-group yang sesuai dengan index
        formGroup[index].classList.remove('d-none');
        // sembunyikan form-group sebelumnya
        formGroup[index + 1].classList.add('d-none');
      }

      // cek apakah index sudah mencapai jumlah form-group
      if (index < jumlahFormGroup) {
        // jika sudah, maka tampilkan button submit
        document.querySelector('#submit').classList.add('d-none');
        // sembunyikan button next
        next.classList.remove('d-none');
      }

      // progress bar
      if (index > 0) {
        progress.style.width = `${(index + 1) * 10}%`;
      }

    });

    document.querySelector('#submit').addEventListener('click', function() {
      const currentFormGroup = formGroup[index];
      const selectedOption = currentFormGroup.querySelector('input[type="radio"]:checked');

      if (!selectedOption) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Jawaban belum diisi!',
        });
        return;
      }
    });


    
  });


  
</script>
    
@endpush
    
@endsection