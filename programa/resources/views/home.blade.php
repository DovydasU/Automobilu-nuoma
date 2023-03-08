@extends("layout.base")

@section("title", "Pagrindinis puslapis")

@section("headerfoto")
<div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
      <div class="col-lg-8 ftco-animate">
        <div class="text w-100 text-center mb-md-5 pb-md-5">
          <h1 class="mb-4">Greitas ir paprastas būdas išsinuomoti automobilį</h1>
          <p style="font-size: 18px;">Greitas, pigus ir paprastas būdas išsinuomoti automobilį bet kuriame mieste, rajone bei kaime</p>
          <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="ion-ios-play"></span>
            </div>
            <div class="heading-title ml-5">
              <span>Lengvi žingsniai išsinuomoti automobilį</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section("content")
<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12	featured-top">
        <div class="row no-gutters">
          <div class="col-md-4 d-flex align-items-center">
            <form action="#" class="request-form ftco-animate bg-primary">
              <h2>Suorganizuoti kelionę</h2>
              <div class="form-group">
                <label for="" class="label">Paėmimo vieta</label>
                <input type="text" class="form-control" placeholder="Miestas, Oro uostas, Stotis, t.t.">
              </div>
              <div class="form-group">
                <label for="" class="label">Palikimo vieta</label>
                <input type="text" class="form-control" placeholder="Miestas, Oro uostas, Stotis, t.t.">
              </div>
              <div class="d-flex">
                <div class="form-group mr-2">
                  <label for="" class="label">Paėmimo data</label>
                  <input type="text" class="form-control" id="book_pick_date" placeholder="Data">
                </div>
                <div class="form-group ml-2">
                  <label for="" class="label">Palikomo data</label>
                  <input type="text" class="form-control" id="book_off_date" placeholder="Data">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Paėmimo laikas</label>
                <input type="text" class="form-control" id="time_pick" placeholder="Laikas">
              </div>
              <div class="form-group">
                <input type="submit" value="Išsinuomokite automoilį dabar" class="btn btn-secondary py-3 px-4">
              </div>
            </form>
          </div>
          <div class="col-md-8 d-flex align-items-center">
            <div class="services-wrap rounded-right w-100">
              <h3 class="heading-section mb-4">Geresnis būdas išsinuomoti automobilius</h3>
              <div class="row d-flex mb-4">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Pasirinkite savo paėmimo vietą</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Pasirinkite geriausią pasiūlymą</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                  <div class="services w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                    <div class="text w-100">
                      <h3 class="heading mb-2">Rezervuokite nuomojamą automobilį</h3>
                    </div>
                  </div>
                </div>
              </div>
              <p><a href="#" class="btn btn-primary py-3 px-4">Rezervuokite tobulą automobilį</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">Ką mes siūlome</span>
        <h2 class="mb-2">Populiariausi automobiliai</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel-car owl-carousel">
          @foreach($car_list as $item)
          <div class="item">
            <div class="car-wrap rounded ftco-animate">
              <div class="img rounded d-flex align-items-end" style="background-image: url({{asset( $item->image )}});">
              </div>
              <div class="text">
                <h2 class="mb-0"><a href="#">{{ $item->make }}</a></h2>
                <div class="d-flex mb-3">
                  <span class="cat">{{ $item->model}}</span>
                  <p class="price ml-auto">{{ $item->price}} Eur<span>/diena</span></p>
                </div>
                <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Nuomuoti</a> <a href="{{ route('car.show', $item->id) }}" class="btn btn-secondary py-2 ml-1">Detaliau</a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">Apie mus</span>
          <h2 class="mb-4">Sveiki atvykę į Carbook</h2>

          <p>CarBook – bendražygiai Jūsų kelyje! Kartu su CarBook automobiliu leiskitės į patogią, saugią ir itin malonią kelionę. Taupome jūsų brangų laiką, todėl automobilio nuomos rezervaciją galite atlikti itin paprastai, neišvykus iš savo namų: mūsų internetinėje svetainėje arba mobiliojoje programėlėje CarBook GO..</p>
          <p>Atsisakėme popierinių sutarčių – viskas dėl jūsų patogumo ir brangaus laiko taupymo. Nuolat atnaujiname automobilių pasiūlą bei nuomojame tik naujausius, ne senesnius nei 3-jų metų automobilius. Mūsų komanda domisi naujausiomis technologijomis bei myli automobilius, todėl kiekvieną automobilį prižiūrime kaip savo. Visi automobiliai itin švarūs bei techniškai tvarkingi. Nuomos pasiūlą pritaikėme prie jūsų poreikių – galite pasirinkti iš ekonominės, kompaktinės, vidutinės, standartinės, SUV ir miniveno klasių lengvųjų automobilių. Taip pat siūlome keleivinių ir krovininių mikroautobusų nuomą.</p>
          <p><a href="{{route('car')}}" class="btn btn-primary py-3 px-4">Ieškokite automobilio</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

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


<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Atsilepimai</span>
        <h2 class="mb-3">Laimingi klientai</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{asset('images/person_1.jpg')}});">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Stasys Robertas</p>
                <span class="position">Marketingo Vadybininkas</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{asset('images/person_2.jpg')}});">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Mykolas Jordanas</p>
                <span class="position">Sąsajos Dizaineris</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{asset('images/person_3.jpg')}});">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Romualdas Ulonas</p>
                <span class="position">UI Dizaineris</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{asset('images/person_1.jpg')}})">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Robertas Gražulis</p>
                <span class="position">Žiniatinklio Kūrėjas</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{asset('images/person_1.jpg')}})">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Petras Gedmintas</p>
                <span class="position">Sistemų Analitikas</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Blogas</span>
        <h2>Naujausi Blogai</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Saus. 24, 2023</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 14</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Ar tikrai reikia didelio oktaninio skaičiaus dujų?</a></h3>
            <p><a href="#" class="btn btn-primary">Skaityti daugiau</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Vas. 5, 2020</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 5</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Po 7 metų nedidelis naftos praradimas nėra didelis dalykas</a></h3>
            <p><a href="#" class="btn btn-primary">Skaityti daugiau</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
          </a>
          <div class="text pt-4">
            <div class="meta mb-3">
              <div><a href="#">Kov. 2, 2023</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 54</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#">Atsižvelkite į tarpą keisdami uždegimo žvakes</a></h3>
            <p><a href="#" class="btn btn-primary">Skaityti daugiau</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img bg-light" id="section-counter">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="60">0</strong>
            <span>Metų <br>patirtis</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="1090">0</strong>
            <span>Visi <br>Automobiliai</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="2590">0</strong>
            <span>Laimingi <br>Klientai</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18">
          <div class="text d-flex align-items-center">
            <strong class="number" data-number="67">0</strong>
            <span>Visi <br>Brančai</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section("scripts")
@endsection

@section("styles")
@endsection