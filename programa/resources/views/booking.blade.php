<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Nuoma</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{asset('/css/adminstyle.css')}}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Nuoma</h4>
                                    <form action="index.html">
                                        <div class="form-group">
                                            <label><strong>Vardas Pavardė</strong></label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Telefono numeris</strong></label>
                                            <input type="tel" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Automobilis</strong></label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Paėmimo vieta</strong></label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Palikimo vieta</strong></label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Paėmimo data</strong></label>
                                            <input type="date" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Palikimo data</strong></label>
                                            <input type="date" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Paėmimo laikas</strong></label>
                                            <input type="time" class="form-control" value="">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success btn-block">Nuomuoti</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Nori grįžti atgal? <a class="text-primary" href="{{route('car')}}">Kiti Automobiliai</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendors/global/global.min.js"></script>
    <script src="{{asset('/js/quixnav-init.js')}}"></script>
    <script src="{{asset('/js/custom.min.js')}}"></script>

</body>

</html>