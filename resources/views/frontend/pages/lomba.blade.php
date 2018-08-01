@extends('frontend.layouts')

<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>

@section('title')
    Lomba - KMIPN
@endsection

<section class="hero is-fullwidth tengah is-medium">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h3 class="title is-3 has-text-white">LOMBA</h3>
            <div class="content">
                <div class="columns">
                    <div class="column is-3">
                        <img src="{{ url('img/logo-lomba/Design_Animasi.png') }}" width="150" height="150">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/cipta_inovasi.png')}}" width="150" height="150">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/hackathon.png')}}" width="110" height="110">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/IoT.png')}}" width="190">
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/EGov.png')}}" width="150" height="150">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/Game_Dev.png')}}" width="150" height="150">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/Bisnis_TIK.png')}}" width="150" height="110">
                    </div>
                    <div class="column is-3">
                        <img src="{{url('img/logo-lomba/keamanan_Jaringan.png')}}" width="150" height="150">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section is-transparent tengah">
    <div class="has-text-centered">
        <h3 class="title is-3 has-text-white">TIMELINE</h3>
    </div>
    <div class="section timeline is-centered container">
        <header class="timeline-header">
            <span class="tag is-medium is-danger">Start</span>
        </header>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">16 - 31 agustus 2016</p>
                <p>Pendaftaran<br> dan Pengumpulan<br> Proposal</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">14 Seltember 2018</p>
                <p>Pengumuman<br> Lolos Tahan 1</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading">14 - 28 September 2018</p>
                <p>Upload Prototype<br>Untuk Kategori Game Dev,<br>Iot, dan Animasi.</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-danger"></div>
            <div class="timeline-content">
                <p class="heading is-capitalized">5 Oktober 2018</p>
                <p>Pengumuman <br>Finalis</p>
            </div>
        </div>
        <div class="timeline-item is-white">
            <div class="timeline-marker is-info is-icon">
                <i class="fas fa-user-astronaut is-medium"></i>
            </div>
            <div class="timeline-content">
                <p class="heading">25 - 28 Oktiber 2018</p>
                <p>Grand Final</p>
            </div>
        </div>
        <header class="timeline-header">
            <span class="tag is-medium is-danger">End</span>
        </header>
    </div>
</section>