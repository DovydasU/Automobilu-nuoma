@extends('layout.base')

@section('title', 'Kainos')

@section('headerfoto')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Pagrindis <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Kainos <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Automobilių Kainos</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="car-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th class="bg-primary heading">Valandos Tarifas</th>
                                    <th class="bg-dark heading">Dienos Tarifas</th>
                                    <th class="bg-black heading">Lizingas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($car_list as $car)
                                    @include('prices_component')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection

@section('styles')
@endsection
