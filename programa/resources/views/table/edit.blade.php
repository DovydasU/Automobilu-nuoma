@extends('layout.adminbase')

@section('title', 'Automobilio Pridėjimas')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <form method="post" action="dataInsert" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Markė</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Modelis</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Rida</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pavarų dežė</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Automatinė</option>
                                <option>Mechaninė</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sedynės</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Bagažas (kg)</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kuras</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Benzinas</option>
                                <option>Dyzelis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Kaina</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Aprašymas</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('table') }}" class="btn btn-success">Back</a>
            </form>
        </div>


    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('./vendors/global/global.min.js') }}"></script>
    <script src="{{ asset('./js/quixnav-init.js') }}"></script>
    <script src="{{ asset('./js/custom.min.js') }}"></script>
    <script src="{{ asset('./vendors/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('./vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('./vendors/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('./js/dashboard/dashboard-2.js') }}"></script>
@endsection

@section('styles')
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('./images/favicon.png') }}">
    <link href="{{ asset('./vendors/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./vendors/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/adminstyle.css') }}" rel="stylesheet">
@endsection