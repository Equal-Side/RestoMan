@extends('public.layout')
@section('navbar')
    @include('public.navbar-light')
@endsection
@section('content')
    <section id="hero">
        <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg);">
                <div class="carousel-container">
                <div class="carousel-content">
                    <h2 class="animate__animated animate__fadeInDown"><span>RestoMan </span> Makes Easy!</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo nobis nisi est doloremque ipsum eligendi tenetur totam hic repellendus aspernatur doloribus accusantium adipisci, dolorem beatae natus dicta autem asperiores soluta?
                    </p>
                    <div>
                    <input type="number" class="animate__animated animate__fadeInUp scrollto" placeholder="Enter table code"/>
                    <a href="{{ route('menu') }}" class="btn-order animate__animated animate__fadeInUp scrollto">Order Now</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
  </section>
@endsection