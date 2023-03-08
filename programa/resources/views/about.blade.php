@extends("layout.base")

@section("title", "Apie mus")

@section("headerfoto")
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Pagrindinis <i class="ion-ios-arrow-forward"></i></a></span> <span>Apie <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Apie mus</h1>
      </div>
    </div>
  </div>
</section>
@endsection

@section("content")
<section class="ftco-section ftco-about">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section heading-section-white pl-md-5">
          <span class="subheading">About us</span>
          <h2 class="mb-4">Welcome to Carbook</h2>

          <p>CarBook – bendražygiai Jūsų kelyje! Kartu su CarBook automobiliu leiskitės į patogią, saugią ir itin malonią kelionę. Taupome jūsų brangų laiką, todėl automobilio nuomos rezervaciją galite atlikti itin paprastai, neišvykus iš savo namų: mūsų internetinėje svetainėje arba mobiliojoje programėlėje CarBook GO..</p>
          <p>Atsisakėme popierinių sutarčių – viskas dėl jūsų patogumo ir brangaus laiko taupymo. Nuolat atnaujiname automobilių pasiūlą bei nuomojame tik naujausius, ne senesnius nei 3-jų metų automobilius. Mūsų komanda domisi naujausiomis technologijomis bei myli automobilius, todėl kiekvieną automobilį prižiūrime kaip savo. Visi automobiliai itin švarūs bei techniškai tvarkingi. Nuomos pasiūlą pritaikėme prie jūsų poreikių – galite pasirinkti iš ekonominės, kompaktinės, vidutinės, standartinės, SUV ir miniveno klasių lengvųjų automobilių. Taip pat siūlome keleivinių ir krovininių mikroautobusų nuomą.</p>
          <p><a href="#" class="btn btn-primary py-3 px-4"> Ieškokite automobilio</a></p>
        </div>
      </div>
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
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
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
              <div class="user-img mb-2" style="background-image: url(images/person_2.jpg)">
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
              <div class="user-img mb-2" style="background-image: url(images/person_3.jpg)">
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
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
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
              <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
              </div>
              <div class="text pt-4">
                <p class="mb-4">Toli toli, už žodžio kalnai, toli nuo šalių Vokalia ir Consonantia gyvena aklieji tekstai.</p>
                <p class="name">Petras Gedmintas</p>
                <span class="position">istemų Analitikas</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-section img" id="section-counter">
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







