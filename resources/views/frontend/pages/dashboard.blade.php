@extends('frontend.layouts')

@section('title', 'KMIPN 2018 | Politeknik ELektronika Negeri Surabaya')

@section('content')

  <!--================Home Banner Area =================-->
  <section class="home_banner_area" id="home">
    <div class="banner_inner">
      <div class="container">
        <div class="row banner_content">
          <div class="col-lg-9">
            <h2><font size="10">Kompetisi Mahasiswa <br />bidang Informatika Politeknik Nasional 2018</font></h2>
            <h3>Politeknik Elektronika Negeri Surabaya, 8 - 10 November 2018</h3>
            <br />
            <a target="_blank" class="banner_btn"
            href="https://drive.google.com/file/d/1_b7pqVZMO_CDUVzp54mKbaiLvU9-XpLj/view?usp=sharing">
              Unduh Panduan Final
            </a>
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
            <p>KMIPN atau Kompetisi Mahasiswa Informatika Politeknik Nasional Tahun 2018, merupakan program Bakorma Politeknik se - Indonesia, sebagai upaya untuk meningkatkan kualitas peserta didik sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia. KMIPN diselenggarakan sebagai upaya pemerintah melalui Kemenristekdikti untuk peningkatan mutu perguruan tinggi khusunya politeknik. Kegiatan ini diharapkan menjadi ajang untuk menyalurkan kreativitas mahasiswa dalam pengembangan Teknologi Informasi dan Komunikasi di tingkat nasional. Untuk pertama kalinya KMIPN akan diselenggarakan pada Tahun 2018 dengan tema <br /><strong>“Tantangan TIK dalam Era Revolusi Industri 4.0”</strong></p>
            <button class="main_btn" data-toggle="modal" data-target=".tl">Lihat Timeline</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Interior Area =================-->

  {{-- Timeline --}}
  <div class="modal fade tl" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="model-body">

            <div class="container">
              <div class="section-top-border">
                <h3 class="mb-30 title_color">Timeline Lomba</h3>

                  <div class="table-responsive-lg">
                    <div class="progress-table-wrap">
                      <div class="progress-table">

                        <div class="table-head">
                          <div class="country">Kategori</div>
                          <div class="percentage">Batas Pendaftaran</div>
                          <div class="percentage">Batas Babak Penyisihan</div>
                          <div class="percentage">Pengumuman Lolos ke Babak Final</div>
                          <div class="percentage">Babak Final</div>
                        </div>

                        <div class="table-row">
                            <div class="country">Internet of Things</div>
                            <div class="percentage">1 September - 14 Oktober 2018</div>
                            <div class="percentage">14 Oktober 2018</div>
                            <div class="percentage">18 Oktober 2018</div>
                            <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                            <div class="country">Bisnis TIK</div>
                            <div class="percentage">1 September - 14 Oktober 2018</div>
                            <div class="percentage">14 Oktober 2018</div>
                            <div class="percentage">18 Oktober 2018</div>
                            <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                            <div class="country">Hackathon</div>
                            <div class="percentage">1 September - 14 Oktober 2018</div>
                            <div class="percentage">14 Oktober 2018</div>
                            <div class="percentage">18 Oktober 2018</div>
                            <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                            <div class="country">Desain Animasi</div>
                            <div class="percentage">1 September - 14 Oktober 2018</div>
                            <div class="percentage">14 Oktober 2018</div>
                            <div class="percentage">18 Oktober 2018</div>
                            <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                          <div class="country">Game Development</div>
                          <div class="percentage">1 September - 14 Oktober 2018</div>
                          <div class="percentage">14 Oktober 2018</div>
                          <div class="percentage">18 Oktober 2018</div>
                          <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                          <div class="country">e-Government</div>
                          <div class="percentage">1 September - 14 Oktober 2018</div>
                          <div class="percentage">14 Oktober 2018</div>
                          <div class="percentage">18 Oktober 2018</div>
                          <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                          <div class="country">Keamanan Jaringan</div>
                          <div class="percentage">1 September - 14 Oktober 2018</div>
                          <div class="percentage">20 Oktober 2018</div>
                          <div class="percentage">22 Oktober 2018</div>
                          <div class="percentage">8 - 10 November 2018</div>
                        </div>

                        <div class="table-row">
                          <div class="country">Cipta Inovasi</div>
                          <div class="percentage">1 September - 14 Oktober 2018</div>
                          <div class="percentage">14 Oktober 2018</div>
                          <div class="percentage">18 Oktober 2018</div>
                          <div class="percentage">8 - 10 November 2018</div>
                        </div>

                      </div>
                    </div>
                  </div>
              </div>
            </div>
          
        </div>
        </div>

        <button class="basic_close btn main_btn" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {
        $('#basic').popup();
    });
  </script>

  <section class="feature_area p_120" id="feature">
    <div class="container">
      <div class="main_title">
        <h2>Lomba</h2>
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

  <section class="price_area p_120" id="price">
    <div class="container">
      <div class="main_title">
        <h2>Informasi Terbaru</h2>
      </div>
      <div class="latest_news_inner row">

        @foreach($artikel as $item)
        <div class="col-lg-4">
          <div class="l_news_item">
            <a class="date" href="{{ url('artikel/'.$item->slug) }}">{{ $item->created_at }}</a>
            <a href="{{ url('artikel/'.$item->slug) }}"><h4>{{ $item->title }}</h4></a>
            <img src="artikel/{{ $item->photo }}" width="150">
            {{--<p>{{ $item->slug }}</p>--}}
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>

  <section class="feature_area p_120" id="jemput">
      <div class="container">
        <div class="main_title">
          <h2>Informasi Penjemputan Bagi Para Finalis</h2>
          <p>
            Penjemputan menggunakan Bus PENS yang sudah kami sediakan di Bandar Udara Djuanda dan Stasiun 
            Kereta Gubeng di setiap waktu berikut ini :
          </p>
        </div>
        
          <div class="section-top-border">
            <div class="progress-table-wrap">
              <div class="progress-table">
                
                <div class="table-head">
                  <div class="serial">Bus ke</div>
                  <div class="percentage">Jam Keberangkatan</div>
                </div>

                <div class="table-row">
                  <div class="serial">1</div>
                  <div class="percentage">10.00 WIB</div>
                </div>

                <div class="table-row">
                    <div class="serial">2</div>
                    <div class="percentage">12.00 WIB</div>
                </div>

                <div class="table-row">
                    <div class="serial">3</div>
                    <div class="percentage">14.00 WIB</div>
                </div>

              </div>
            </div>
          {{-- </div> --}}
        
      </div>
    </section>

@endsection