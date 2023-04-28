@extends('layout.adminbase')

@section('title', 'Vartotojai')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Vartotojai</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" href="{{ route('admin') }}" class="btn btn-success">Pridėti
                                Administratoriu</button>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Vardas</th>
                                            <th>Pavardė</th>
                                            <th>Elektroninis pašas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Kolor Tea Shit For Man</td>
                                            <td>January 22</td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Kolor Tea Shit For Women</td>
                                            <td>January 30</td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Blue Shit For Baby</td>
                                            <td>January 25</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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