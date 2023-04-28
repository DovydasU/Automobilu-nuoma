@extends('layout.adminbase')

@section('title', 'Automobiliai')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Automobiliai</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('add-car') }}" class="btn btn-success">Pridėti Automobilį</a>
                            <div class="table-responsive">

                                <table id="example2" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Markė</th>
                                            <th>Modėlis</th>
                                            <th>Rida</th>
                                            <th>Pavarų Dežė</th>
                                            <th>Sedynės</th>
                                            <th>Bagažas</th>
                                            <th>Kuras</th>
                                            <th>Kaina</th>
                                            <th>Būsena</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($car_list as $car)
                                            @include('table_component')
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>1</td>
                                            <th>Markė</th>
                                            <th>Modėlis</th>
                                            <th>Rida</th>
                                            <th>Pavarų Dežė</th>
                                            <th>Sedynės</th>
                                            <th>Bagažas</th>
                                            <th>Kuras</th>
                                            <th>Kaina</th>
                                            <th>Būsena</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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
    <script src="{{ asset('./vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('./js/plugins-init/datatables.init.js') }}"></script>
@endsection

@section('styles')
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('./images/favicon.png') }}">
    <link href="{{ asset('./vendors/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/adminstyle.css') }}" rel="stylesheet">
@endsection