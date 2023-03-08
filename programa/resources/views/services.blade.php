@extends("layout.base")

@section("title", "Paslaugos")

@section("headerfoto")
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Pagrindinis <i class="ion-ios-arrow-forward"></i></a></span> <span>Paslaugos <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Mūsų paslaugos</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section("content")
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Paslaugos</span>
        <h2 class="mb-3">Mūsų naujausios paslaugos</h2>
      </div>
    </div>
    <div class="row">
    @foreach($service_list as $item)
      <div class="col-md-3">
        <div class="services services-2 w-100 text-center">
          <div class="icon d-flex align-items-center justify-content-center"><span class="{{ $item->image }}"></span></div>
          <div class="text w-100">
            <h3 class="heading mb-2">{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>

<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 heading-section heading-section-white ftco-animate">
        <h2 class="mb-3">Ar norite užsidirbti pas mus? Taigi nevėluokite.</h2>
        <a href="#" class="btn btn-primary btn-lg">Tapti vairuotoju</a>
      </div>
    </div>
  </div>
</section>
@endsection

@section("scripts")
@endsection

@section("styles")
@endsection