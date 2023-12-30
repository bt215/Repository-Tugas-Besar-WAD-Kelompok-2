@extends('page_pembeli_1')
@section('content')
<div class="hero-wrap ftco-degree-bg header" style="background-image: url('{{ url('theme-assets/bred.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-center">
            <h1 class="mb-4 text-white" style="margin-top: -150px;">Butuh Roti?<br>Beli Disini Aja</h1>
            <p class="text-white" style="font-size: 20px;">Bila anda malas untuk mengantri di toko, sekarang sudah ada solusinya. Anda dapat memesan roti tanpa harus mengantri loh. Tinggal cari aja disini. <br> Makan praktis, perut kenyang.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
      <a href="#tim" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
      </a>
    </div>
</div>

    <section class="ftco-section goto-here ftco-no-pb">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ url('theme-assets/') }}');">
                    </div>
                    <p> Selamat datang di "bakery.com," 
                      tujuan utama Anda untuk mendapatkan roti artisanal 
                      terbaik yang diantar langsung ke depan pintu Anda! Di bakery, kami bukan hanya toko roti online,
                      kami adalah perayaan atas seni abadi dan keahlian lezat yang menghasilkan roti yang dapat diminati oleh kustomer.</p>
                </div>
            </div>
     </section>

    <br>
    <br>
    <br>

    <section class="ftco-section ftco-agent ftco-no-pt" id="tim">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          </div>
        </div>
      </div>
    </section>    

    <footer class="ftco-footer ftco-section" style="padding: 3em 0 2em 0;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Zvezda</h2>
                <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <div class="block-23 mb-3">
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Alamat Kami</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506970.8488831191!2d107.59841949999999!3d-6.9252563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8d55bd4809d%3A0x2c7daa977527ef8b!2sJ%26K%20Bakery!5e0!3m2!1sen!2sid!4v1703841985880!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </footer>
@endsection    
