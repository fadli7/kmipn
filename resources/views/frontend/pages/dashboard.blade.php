@extends('frontend.layouts')

@section('title', 'KMIPN 2018')

@section('content')

  <!--================Home Banner Area =================-->
  <section class="home_banner_area" id="home">
    <div class="banner_inner">
      <div class="container">
        <div class="row banner_content">
          <div class="col-lg-9">
            <h2><font size="10">Kompetisi Mahasiswa <br />bidang Informatika Politeknik Nasional 2018</font></h2>
            <h3>Politeknik Elektronika Negeri Surabaya, 7 - 10 November 2018</h3>
            <br /><a target="_blank" class="banner_btn" href="https://docs.google.com/viewerng/viewer?url=https://trello-attachments.s3.amazonaws.com/5abb9d7e1f807edcdbdb96e3/5b4d90ab6c288d1ececf3411/33473e9afd4b17543b083e5f562d4231/Desain_Buku_Panduan_Lomba.docx">Unduh Panduan</a>
          </div>
          <div class="col-lg-3">
            <div class="banner_map_img">
              <img class="img-fluid" src="{{ url('img/banner/tugu.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->
  <!--================Interior Area =================-->
  <section class="interior_area" id="tentang">
    <div class="container">
      <div class="interior_inner row">
        <div class="col-lg-6" style="display: flex; align-items: center; flex-wrap: wrap;">
          <img class="img-fluid" src="{{ url('img/kmipn.png') }}" alt="" width="500">
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="interior_text">
            <h4>Tentang KMIPN</h4>
            <p>KMIPN atau Kompetisi Mahasiswa Informatika Politeknik Nasional Tahun 2018, merupakan program Bakorma Politeknik se - Indonesia, sebagai upaya untuk meningkatkan kualitas peserta didik sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia. KMIPN diselenggarakan sebagai upaya pemerintah melalui Kemenristekdikti untuk peningkatan mutu perguruan tinggi khusunya politeknik. Kegiatan ini diharapkan menjadi ajang untuk menyalurkan kreativitas mahasiswa dalam pengembangan Teknologi Informasi dan Komunikasi di tingkat nasional. Untuk pertama kalinya KMIPN akan diselenggarakan pada Tahun 2018 dengan tema <br /><strong>“Tantangan TIK dalam Era Revolusi Industri 4.0”</strong></p>                   <a class="main_btn" href="#">Lihat Timeline</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Interior Area =================-->

  <!--================Feature Area =================-->
  <section class="feature_area p_120" id="feature">
    <div class="container">
      <div class="main_title">
        <h2>LOMBA</h2>
      </div>
      <div class="feature_inner row">
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('iot') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/iot.png" alt="" width="180">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('bistik') }}">
            <div class="feature_item" >
              <div class="text-center">
                <img src="img/bistik.png" alt="" width="136">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('hackathon') }}">
            <div class="feature_item">
              <div class="text-center">
                <img src="img/hackathon.png" alt="" width="95">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('anim') }}">
            <div class="feature_item">
              <div class="text-center">
                <img src="img/anim.png" alt="" width="147">
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="feature_inner row">
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('game') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/game.png" alt="" width="160">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('egov') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/egov.png" alt="" width="150">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('jaringan') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/jaringan.png" alt="" width="158">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="{{ url('cipta') }}">
            <div class="feature_item">
              <div class="text-center" >
                <img src="img/cipta.png" alt="" width="149">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!--================End Feature Area =================-->

  <!--================Price Area =================-->
  <section class="price_area p_120" id="price">
    <div class="container">
      <div class="main_title">
        <h2>Informasi Terbaru</h2>
      </div>
      <div class="latest_news_inner row">
        <div class="col-lg-4">
          <div class="l_news_item">
            <a class="date" href="#">10 April, 2018</a>
            <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
            <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
            <div class="post_view">
              <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
              <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
              <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="l_news_item">
            <a class="date" href="#">10 April, 2018</a>
            <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
            <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
            <div class="post_view">
              <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
              <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
              <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="l_news_item">
            <a class="date" href="#">10 April, 2018</a>
            <a href="#"><h4>Benjamin Franklin Method Of Habit Formation</h4></a>
            <p>There are many kinds of narratives and organizing principles. Science is driven by evidence gathered in experiments, and by the falsification of extant theories and their </p>
            <div class="post_view">
              <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 4.5k Views</a>
              <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 07</a>
              <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> 362</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Price Area =================-->
@endsection