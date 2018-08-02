@extends('frontend.layouts')
<section class="hero is-transparent is-fullwidth awalan">
    @include('frontend.partials.navbar')
    <div class="hero-body"></div>
</section>
@section('title')
    Tentang - KMIPN
@endsection

<section class="hero bawah is-fullwidth is-transparent is-large">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <h1 class="title is-3 has-text-light" data-aos="fade-up-right">About KMIPN</h1>
                    <div class="content" data-aos="fade-up-right" data-aos-delay="120">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                </div>
                <div class="column is-6 has-text-centered container">
                    <p style="padding-top: 105px" data-aos="fade-up-left" data-aos-delay="200">
                        <img src="{{url('img/logoPutihHD.png')}}"/>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.footer')